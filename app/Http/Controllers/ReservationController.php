<?php

namespace App\Http\Controllers;

use index;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = $user->id ?? null;
        $reservations = Reservation::with(['kamar'])
        ->where('user_id', $userId)
        ->where('check_out_date', '>=', now())
        ->orderBy('check_in_date', 'asc')
        ->get();


        return view('keranjang-pemesanan.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('keranjang-pemesanan.index')->with('success', 'Pemesanan berhasil dibatalkan');
    }
}
