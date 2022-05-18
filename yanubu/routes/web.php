<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('guest.home');
});

Route::view('fasilitas', 'guest.fasilitas');

Route::view('kontak', 'guest.kontak');

Route::view('galeri', 'guest.galeri');

Route::view('artikel', 'guest.artikel');
