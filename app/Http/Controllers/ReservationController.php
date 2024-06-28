<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create($roomId)
    {
        $room = Room::findOrFail($roomId);
        return view('reservations.create', compact('room'));
    }

    public function store(Request $request, $roomId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after_or_equal:check_in',
        ]);

        $room = Room::findOrFail($roomId);

        $reservation = new Reservation();
        $reservation->room_id = $room->id;
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->check_in = $request->check_in;
        $reservation->check_out = $request->check_out;
        $reservation->save();

        return redirect()->route('reservations.show', $reservation->id)->with('success', 'Reservation successfully created.');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }
}


