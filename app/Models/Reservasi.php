<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'nomor_telepon',
        'negara',
        'alamat_tinggal_sekarang',
        'check_in',
        'check_out',
        'hotel',
        'jumlah_kamar',
    ];
}
