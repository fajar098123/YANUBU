<?php

use App\Http\Controllers\DownloadController;
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

Route::get('galeriadmin', 'App\Http\Controllers\GaleriController@index');
Route::post("/savegaleri", 'App\Http\Controllers\GaleriController@store');
Route::get('/deletegaleri/{id}', [GaleriController::class, 'destroy'])->name('deletegaleri');

Route::get('/artikeladmin', 'App\Http\Controllers\ArtikelController@index');
Route::post("/saveartikel", 'App\Http\Controllers\ArtikelController@store');
Route::get('/deleteartikel/{id}', [ArtikelController::class, 'destroy'])->name('deleteartikel');

Route::get('/downloadadmin', [DownloadController::class, 'index'])->name('downloadadmin');
Route::get('/deletedownload/{id}', [DownloadController::class, 'destroy'])->name('deletedownload');
Route::post('/simpandownload', [DownloadController::class, 'store'])->name('simpandownload');

Route::view('/registrasiadmin', 'admin.registrasi');
Route::view('/dataadmin', 'admin.dataadmin');
Route::view('/addDownload', 'admin.adddownload');

Route::view('/addArtikel', 'admin.addartikel');

Route::view('/editDownload', 'admin.editdownload');

Route::view('/addGaleri', 'admin.addgaleri');
Route::view('/editGaleri', 'admin.editgaleri');
