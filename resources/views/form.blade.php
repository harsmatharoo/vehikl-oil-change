<h1>Oil Change Checker</h1>

<form method="POST" action="/check">
    @csrf

    <input type="number" name="current_odometer" placeholder="Current Odometer">
    @error('current_odometer') <p>{{ $message }}</p> @enderror

    <input type="number" name="previous_odometer" placeholder="Previous Odometer">
    @error('previous_odometer') <p>{{ $message }}</p> @enderror

    <input type="date" name="previous_oil_change_date">
    @error('previous_oil_change_date') <p>{{ $message }}</p> @enderror

    <button type="submit">Check</button>
</form>