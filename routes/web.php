<?php

use App\Http\Controllers\HitungController;
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

Route::get('/', function() {
    return view ('welcome');
})-> name('home');

Route::get('/pendataan', function() {
    return view ('pendataan');
})-> name('pendataan');

Route::get('/hitung', [HitungController::class, 'hitung']);
