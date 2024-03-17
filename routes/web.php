<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LoginController;

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
    return view('/home/penggunaan_layout');
});

Route::get('/home', function () {
    return view('/home/index');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai.index');



Route::resource('pegawai', PegawaiController::class);
Route::post('/pegawai/{id}/riwayat', [PegawaiController::class, 'store_riwayat']);
Route::get('/pegawai/{id}/riwayat', 'PegawaiController@riwayat');

Route::delete('/pegawai/{id}/{pegawai_id}/riwayat', [PegawaiController::class, 'destroy_riwayat']);


