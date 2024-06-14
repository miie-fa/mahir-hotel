@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>
    @if($rooms->isEmpty())
        <p>No rooms found.</p>
    @else
        <ul>
            @foreach($rooms as $room)
                <li>
                    <a href="{{ route('rooms.show', $room->id) }}">{{ $room->name }}</a>
                    <p>{{ $room->description }}</p>
                    <p>Price: {{ $room->price }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
