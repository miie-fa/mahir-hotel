<?php

// app/Http/Controllers/ReservationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'address' => 'required',
            'room_type' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'additional_requests' => 'nullable',
        ]);

        Reservation::create($validatedData);

        return redirect()->route('reservation.index')
            ->with('success', 'Reservasi berhasil disimpan.');
    }
}

