@extends('layouts.app')

@section('content')
    <h1>Reservation Details</h1>
    <p>Name: {{ $reservation->name }}</p>
    <p>Email: {{ $reservation->email }}</p>
    <p>Phone: {{ $reservation->phone }}</p>
    <p>Check In: {{ $reservation->check_in }}</p>
    <p>Check Out: {{ $reservation->check_out }}</p>
@endsection
