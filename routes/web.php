<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);

// Route::get('/', function() //buat alamat url
// {
//     return view ('welcome'); //nama file di views
// })-> name('home'); 

// Route::get('/pendataan', function() {
//     return view ('pendataan');
// })-> name('pendataan');

// Route::get('/pendaftaran', function() {
//     return view ('dashboard');
// })-> name('form');

// Route::get('/hitung', [HitungController::class, 'hitung']);

// Route::get('/daftar', [TestController::class, 'daftar']);
// Route::post('/kirim', [TestController::class, 'kirim']);
