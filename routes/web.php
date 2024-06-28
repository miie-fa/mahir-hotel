<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms/search', [RoomController::class, 'search'])->name('rooms.search');
Route::get('/rooms/results', [RoomController::class, 'searchResults'])->name('rooms.searchResults');
Route::get('/rooms/{room}/reserve', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/rooms/{room}/reserve', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
