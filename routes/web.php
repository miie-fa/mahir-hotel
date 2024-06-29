<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/booking', [BookingController::class,'main'])->name('booking.main');
Route::post('/booking/process', [BookingController::class,'store'])->name('booking.store');
Route::get('/booking/show', [BookingController::class,'show'])->name('booking.show');
Route::get('/booking/delete', [BookingController::class,'destroy'])->name('batalkan.pemesanan');

Route::post('/payment', [BookingController::class, 'payment'])->name('payment');
Route::post('/payment/ipaymu/{price}', [BookingController::class, 'ipaymu'])->name('ipaymu');
Route::post('/payment/pay_at_hotel/{price}', [BookingController::class, 'pay_at_hotel'])->name('pay_at_hotel');

Route::controller(BookingController::class)
    ->prefix('paypal')
    ->group(function () {
        Route::view('payment', 'paypal.index')->name('create.payment');
        Route::get('handle-payment', 'handlePayment')->name('make.payment');
        Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
        Route::get('payment-success', 'paymentSuccess')->name('success.payment');
    });

    Route::prefix('/callback')->name('callback.')->group(function () {
    Route::get('/return', function ()  {return view('pages.callback.return');})->name('return');
    Route::get('/cancel', function ()  {return view('pages.callback.cancel');})->name('cancel');
});

Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice');
