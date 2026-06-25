<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OilChange;
use Carbon\Carbon;

class OilChangeController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // confirm the inputs first 
        $validated = $request->validate([
            'previous_odometer' => 'required|integer|min:0',
            'current_odometer' => 'required|integer|min:0',
            'previous_oil_change_date' => 'required|date|before:today',
        ]);

    
        if ($validated['current_odometer'] < $validated['previous_odometer']) {
            return back()->withErrors([
                'current_odometer' => 'Current odometer must be greater than or equal to previous odometer.'
            ])->withInput();
        }

        // Save the record
        $record = OilChange::create($validated);

        return redirect("/result/{$record->id}");
    }

    public function result($id)
    {
        $data = OilChange::findOrFail($id);

        // Distance driven
        $kmDriven = $data->current_odometer - $data->previous_odometer;

        // Months since last oil change (safe + clean)
        $months = $data->previous_oil_change_date
            ? Carbon::parse($data->previous_oil_change_date)->diffInMonths()
            : 0;

        // Oil change condition
        $due = ($kmDriven > 5000 || $months > 6);

        return view('result', compact('data', 'kmDriven', 'months', 'due'));
    }
}