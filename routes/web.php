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
    return view('landingpage');
});


Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Haloo Apa Kabar</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('meet1', function () {
    return view('meet1');
});

Route::get('meet2', function () {
    return view('meet2');
});

Route::get('meet3', function () {
    return view('meet3');
});

Route::get('meet4', function () {
    return view('meet4');
});

Route::get('meet5', function () {
    return view('meet5');
});

Route::get('meet6', function () {
    return view('meet6');
});

Route::get('meet7', function () {
    return view('meet7');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/nilaikuliah','App\Http\Controllers\NilaikuliahController@indexnilai');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaikuliahController@tambahnilai');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaikuliahController@storenilai');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/batal/{ID}','App\Http\Controllers\KeranjangController@batal');

Route::get('/bus','App\Http\Controllers\BusController@index');
Route::get('/bus/tambah','App\Http\Controllers\BusController@tambah');
Route::post('/bus/store','App\Http\Controllers\BusController@store');
Route::get('/bus/edit/{kodebus}','App\Http\Controllers\BusController@edit');
Route::post('/bus/update','App\Http\Controllers\BusController@update');
Route::get('/bus/view/{kodebus}','App\Http\Controllers\BusController@view');
Route::get('/bus/hapus/{kodebus}','App\Http\Controllers\BusController@hapus');
Route::get('/bus/cari','App\Http\Controllers\BusController@cari');
