<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/filter', [RoomController::class, 'filterRooms'])->name('rooms.filter');
