<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
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

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/details', [RoomController::class, 'show'])->name('rooms.detail');

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store-reservation');
Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');