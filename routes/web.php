<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/details', [RoomController::class, 'show'])->name('rooms.detail');

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store-reservation');
Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');