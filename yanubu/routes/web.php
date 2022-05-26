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
// Route Frontend
Route::get('/', function () {
    return view('guest.home');
});

Route::view('fasilitas', 'guest.fasilitas');
Route::view('kontak', 'guest.kontak');
Route::view('galeri', 'guest.galeri');
Route::view('artikel', 'guest.artikel');


// Route Admin
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::view('/fasilitasadmin', 'admin.fasilitas');
Route::view('/profiladmin', 'admin.profil');
Route::view('/galeriadmin', 'admin.galeri');
Route::view('/artikeladmin', 'admin.artikel');
Route::view('/downloadadmin', 'admin.download');
Route::view('/registrasiadmin', 'admin.registrasi');
Route::view('/dataadmin', 'admin.dataadmin');
Route::view('/addDownload', 'admin.adddownload');
