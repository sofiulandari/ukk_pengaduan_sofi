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
    return view('welcome');
});

// Route::get('/', function () {
//     return view('beranda.index');
// });
Route::get('login', function () {
    return view('login.index');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/beranda', 'BerandaController@index');

// pengaduan
Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
Route::get('/pengaduan/destroy/{id}', 'PengaduanController@destroy');
Route::get('/pengaduan/status/{id}', 'PengaduanController@status');


//tanggapan 
Route::get('/tanggapan', 'TanggapanController@index')->name('tanggapan');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
Route::get('/tanggapan/destroy/{id}', 'TanggapanController@destroy');
