<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');


// ======================
// DATA PELANGGAN
// ======================

Route::get('/pelanggan/laporan',
    [PelangganController::class, 'laporanPelanggan'])
    ->name('pelanggan.laporan');

Route::resource('pelanggan', PelangganController::class);


// ======================
// DATA LAUNDRY
// ======================

Route::get('/laundry/laporan',
    [LaundryController::class, 'laporan'])
    ->name('laundry.laporan');

Route::resource('laundry', LaundryController::class);


// ======================
// DATA PEMBAYARAN
// ======================

Route::get('/pembayaran/laporan', [PembayaranController::class, 'laporan'])
    ->name('pembayaran.laporan');

Route::resource('pembayaran', PembayaranController::class);


// ======================
// HALAMAN LAIN
// ======================

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});