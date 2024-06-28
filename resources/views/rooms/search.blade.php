@extends('layouts.app')

@section('content')
    <h1>Search Rooms</h1>
    <form action="{{ route('rooms.searchResults') }}" method="GET">
        <div>
            <label for="check_in">Check In</label>
            <input type="date" id="check_in" name="check_in" required>
        </div>
        <div>
            <label for="check_out">Check Out</label>
            <input type="date" id="check_out" name="check_out" required>
        </div>
        <div>
            <label for="type">Room Type</label>
            <select id="type" name="type">
                <option value="">Any</option>
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
            </select>
        </div>
        <div>
            <label for="price_min">Min Price</label>
            <input type="number" id="price_min" name="price_min">
        </div>
        <div>
            <label for="price_max">Max Price</label>
            <input type="number" id="price_max" name="price_max">
        </div>
        <button type="submit">Search</button>
    </form>
@endsection
