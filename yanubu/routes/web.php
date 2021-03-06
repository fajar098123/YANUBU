<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

Route::view('/fasilitas', 'guest.fasilitas');
Route::view('/kontak', 'guest.kontak');
Route::view('/galeri', 'guest.galeri');
Route::get('/galeri', 'App\Http\Controllers\GaleriController@galeri');
Route::get('/reccentgaleri', 'App\Http\Controllers\GaleriController@reccentgaleri');
Route::get('/artikel', 'App\Http\Controllers\ArtikelController@artikel');
Route::get('/', 'App\Http\Controllers\ArtikelController@reccentartikel');
Route::view('/sejarah-visi-misi', 'guest.profileSejarah');
Route::view('/profilpengurus', 'guest.profilpengurus');
Route::view('/detail-artikel', 'guest.detailartikel');


Route::get('/login', function() {
    return view('layouts.login');
});
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');

// Route Admin

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

Route::view('/fasilitasadmin', 'admin.fasilitas');
Route::view('/profileadmin', 'admin.profile');

Route::get('galeriadmin', 'App\Http\Controllers\GaleriController@index');
Route::post("/savegaleri", 'App\Http\Controllers\GaleriController@store');
Route::get('/deletegaleri/{id}', [GaleriController::class, 'destroy'])->name('deletegaleri');

Route::get('/artikeladmin', 'App\Http\Controllers\ArtikelController@index');
Route::post("/saveartikel", 'App\Http\Controllers\ArtikelController@store');
Route::get('/deleteartikel/{id}', [ArtikelController::class, 'destroy'])->name('deleteartikel');

Route::get('/downloadadmin', [DownloadController::class, 'index'])->name('downloadadmin');
Route::get('/deletedownload/{id}', [DownloadController::class, 'destroy'])->name('deletedownload');
Route::post('/simpandownload', [DownloadController::class, 'store'])->name('simpandownload');

Route::view('/addDownload', 'admin.adddownload');
Route::view('/editDownload', 'admin.editdownload');

Route::view('/addArtikel', 'admin.addartikel');
Route::view('/editArtikel', 'admin.editartikel');

Route::view('/addGaleri', 'admin.addgaleri');
Route::view('/editGaleri', 'admin.editgaleri');

Route::view('/addFasilitas', 'admin.addfasilitas');
Route::view('/editFasilitas', 'admin.editfasilitas');

Route::view('/addProfile', 'admin.addprofile');
Route::view('/editProfile', 'admin.editprofile');

Route::view('/registrasiadmin', 'admin.registrasi');

Route::view('/dataadmin', 'admin.dataadmin');

