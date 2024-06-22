<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_description',
        'feutured_photo',
        'room_number',
        'room_type',
        'price_per_night',
        'capacity'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_id');
    }
}
