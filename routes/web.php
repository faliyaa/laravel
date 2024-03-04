<?php

<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
=======
use App\Http\Controllers\AnggotaController;
>>>>>>> d5cdcb94ac8a685c8f92356f5d32e1d849d128dd
use App\Http\Controllers\HitungController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() //buat alamat url
{
    return view ('welcome'); //nama file di views
})-> name('home'); 

// Route::get('/pendataan', function() {
//     return view ('pendataan');
// })-> name('pendataan');

// Route::get('/pendaftaran', function() {
//     return view ('dashboard');
// })-> name('form');

// Route::get('/hitung', [HitungController::class, 'hitung']);

Route::get('/daftar', [TestController::class, 'daftar']);
Route::post('/kirim', [TestController::class, 'kirim']);

Route::get('/daftar', [AnggotaController::class, 'index']); // untuk menampilkan tabel anggota
