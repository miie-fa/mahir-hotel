<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'nomor_telepon',
        'negara',
        'alamat',
        'preferensi_tambahan',
        'tgl_checkin',
        'tgl_checkout',
        'kamar',
        'tambah_rencana',
        'price',
    ];

    protected $casts = [
        'tgl_checkin' => 'date',
        'tgl_checkout' => 'date',
    ];

}
