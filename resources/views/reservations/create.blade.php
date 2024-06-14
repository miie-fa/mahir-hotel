@extends('layouts.app')

@section('content')
    <h1>Reserve Room: {{ $room->name }}</h1>
    <form action="{{ route('reservations.store', $room->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="check_in">Check In</label>
            <input type="date" id="check_in" name="check_in" required>
        </div>
        <div>
            <label for="check_out">Check Out</label>
            <input type="date" id="check_out" name="check_out" required>
        </div>
        <button type="submit">Reserve</button>
    </form>
@endsection
