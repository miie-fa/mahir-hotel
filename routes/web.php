<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisController;

Route::get('/page', [HomeController::class,'index'])->name('landing');
Route::get('/regis', [AuthController::class,'index'])->name('user.register');
Route::get('/login',[AuthController::class,'login'])->name('user.login');