<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/booking', [BookingController::class,'main'])->name('booking.main');
Route::post('/booking/process', [BookingController::class,'store'])->name('booking.store');
Route::get('/booking/show', [BookingController::class,'show'])->name('booking.show');
Route::get('/booking/delete', [BookingController::class,'destroy'])->name('batalkan.pemesanan');

