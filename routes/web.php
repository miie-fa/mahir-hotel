<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Authentication routes
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Email verification routes
Route::get('email/verify', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')->name('verification.notice');

Route::get('email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Password reset routes
Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');

    Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
    
    Route::group(['middleware' => 'user'], function(){
        Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    });
    
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');