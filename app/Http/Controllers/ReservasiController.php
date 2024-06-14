<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        return view('reservasi.index');
    }

    public function store(Request $request)
    {
        // Validasi data form
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'negara' => 'required',
            'alamat_tinggal_sekarang' => 'nullable',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'hotel' => 'required',
            'jumlah_kamar' => 'required|numeric',
        ]);

        // Simpan data reservasi ke database
        $reservasi = new Reservasi;
        $reservasi->nama_depan = $request->nama_depan;
        $reservasi->nama_belakang = $request->nama_belakang;
        $reservasi->email = $request->email;
        $reservasi->nomor_telepon = $request->nomor_telepon;
        $reservasi->negara = $request->negara;
        $reservasi->alamat_tinggal_sekarang = $request->alamat_tinggal_sekarang;
        $reservasi->check_in = $request->check_in;
        $reservasi->check_out = $request->check_out;
        $reservasi->hotel = $request->hotel;
        $reservasi->jumlah_kamar = $request->jumlah_kamar;
        $reservasi->save();

        // Redirect ke halaman konfirmasi
        return redirect()->route('reservasi.konfirmasi', ['id' => $reservasi->id]);
    }

    public function konfirmasi($id)
    {
        // Ambil data reservasi dari database
        $reservasi = Reservasi::findOrFail($id);

        // Tampilkan halaman konfirmasi
        return view('reservasi.konfirmasi', ['reservasi' => $reservasi]);
    }
}
