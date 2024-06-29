<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function main()
    {
        return view('booking.main');
    }

    public function store(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'negara' => 'required|string|max:255',
            'alamat' => 'required|string',
            'preferensi_tambahan' => 'nullable|string',
            'tgl_checkin' => 'required|date',
            'tgl_checkout' => 'required|date',
            'kamar' => 'required|string',
            'tambah_rencana' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $booking = new Booking();
        $booking->nama_depan = $validated['nama_depan'];
        $booking->nama_belakang = $validated['nama_belakang'];
        $booking->email = $validated['email'];
        $booking->nomor_telepon = $validated['nomor_telepon'];
        $booking->negara = $validated['negara'];
        $booking->alamat = $validated['alamat'];
        $booking->preferensi_tambahan = $validated['preferensi_tambahan'];
        $booking->tgl_checkin = $validated['tgl_checkin'];
        $booking->tgl_checkout = $validated['tgl_checkout'];
        $booking->kamar = $validated['kamar'];
        $booking->tambah_rencana = $validated['tambah_rencana'];
        $booking->price = $validated['price'];

        $booking->save();

        return redirect()->route('booking.main')->with('success', 'Pemesanan berhasil disimpan');
    }

    // public function show(Request $request)
    // {
    //     return view('booking.show' );
    // }

    // public function destroy(string $id)
    // {
    //     $booking = Booking::find($id);
    //     $booking->delete();

    //     return redirect()->route('booking.main')->with('success', 'Pemesanan berhasil dihapus');
    // }
}
