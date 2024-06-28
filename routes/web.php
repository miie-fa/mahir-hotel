<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms/search', [RoomController::class, 'search'])->name('rooms.search');
Route::get('/rooms/details', [RoomController::class, 'show'])->name('rooms.detail');
