<h1>Result</h1>

<p>Current Odometer: {{ $data->current_odometer }}</p>
<p>Previous Odometer: {{ $data->previous_odometer }}</p>
<p>Previous Oil Change Date: {{ $data->previous_oil_change_date }}</p>

<hr>

<p>Distance Driven: {{ $kmDriven }} km</p>
<p>Months Passed: {{ $months }}</p>

@if($due)
    <h2 style="color:red;">Car is NOW due for oil change</h2>
@else
    <h2 style="color:green;">Car is NOT due</h2>
@endif

<br>

<a href="/">Check another car</a>