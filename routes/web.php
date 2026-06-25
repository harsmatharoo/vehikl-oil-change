<?php

use App\Http\Controllers\OilChangeController;

Route::get('/', [OilChangeController::class, 'create']);
Route::post('/check', [OilChangeController::class, 'store']);
Route::get('/result/{id}', [OilChangeController::class, 'result']);