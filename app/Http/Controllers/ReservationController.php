<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $rooms = Room::all();
        return view('reservations.create', compact('rooms'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'selectedRoom' => 'required|string',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|string',
            'country' => 'required|string',
            'address' => 'required|string',
            'additionalInfo' => 'nullable|string',
        ]);

        // Simpan data pemesanan ke database
        $reservation = new Reservation();
        $reservation->check_in_date = $request->checkInDate;
        $reservation->check_out_date = $request->checkOutDate;
        $reservation->room_type = $request->selectedRoom;
        $reservation->first_name = $request->firstName;
        $reservation->last_name = $request->lastName;
        $reservation->email = $request->email;
        $reservation->phone_number = $request->phoneNumber;
        $reservation->country = $request->country;
        $reservation->address = $request->address;
        $reservation->additional_info = $request->additionalInfo;
        $reservation->save();

        // Redirect atau response sukses
        return redirect()->route('thankyou'); // Ganti dengan route halaman terima kasih Anda
    }

    public function show($id)
{
    $reservation = Reservation::findOrFail($id);
    return response()->json(['reservation' => $reservation]);
}

public function update(Request $request, $id)
{
    $reservation = Reservation::findOrFail($id);

    $validatedData = $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'country' => 'required|string',
        'address' => 'required|string',
        'check_in' => 'required|date',
        'check_out' => 'required|date|after:check_in',
        'room_type' => 'required|string',
        'additional_requests' => 'nullable|string',
    ]);

    $reservation->update($validatedData);

    return response()->json(['message' => 'Reservation updated successfully', 'reservation' => $reservation]);
}

public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->delete();
    return response()->json(['message' => 'Reservation deleted successfully']);
}

}
