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

Route::get('/galeriadmin', 'App\Http\Controllers\GaleriController@index')->name('galeriadmin');
Route::get('/deletegaleri/{id}', 'App\Http\Controllers\GaleriController@destroy')->name('deletegaleri');

Route::get('/artikeladmin', 'App\Http\Controllers\artikelController@index')->name('artikeladmin');
Route::get('/deleteartikel/{id}', 'App\Http\Controllers\artikelController@destroy')->name('deleteartikel');

Route::get('/downloadadmin', 'App\Http\Controllers\DownloadController@index')->name('downloadadmin');
Route::get('/deletedownload/{id}', 'App\Http\Controllers\DownloadController@destroy')->name('deletedownload');

Route::view('/registrasiadmin', 'admin.registrasi');
Route::view('/dataadmin', 'admin.dataadmin');
Route::view('/addDownload', 'admin.adddownload');
