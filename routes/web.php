<?php


use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

//Route User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// Route Kamar
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
Route::post('/kamar/create', [KamarController::class, 'store'])->name('kamar.store');
Route::get('/kamar/edit/{id}', [KamarController::class, 'edit'])->name('kamar.edit');
Route::put('/kamar/{kamar}', [KamarController::class, 'update'])->name('kamar.update');
Route::delete('/kamar/{kamar}', [KamarController::class, 'destroy'])->name('kamar.destroy');

// Route Keranjang-pemesanan
Route::get('/keranjang-pemesanan', [ReservationController::class, 'index'])->name('keranjang-pemesanan.index');

Route::get('/booking', [BookingController::class,'main'])->name('booking.main');
Route::post('/booking/process', [BookingController::class,'store'])->name('booking.store');
Route::get('/booking/show', [BookingController::class,'show'])->name('booking.show');
Route::get('/booking/delete', [BookingController::class,'destroy'])->name('batalkan.pemesanan');





