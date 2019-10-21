<?php

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

/*
Route buat dashboard
*/
Route::get('dash', 'DashboardC@home');
Route::get('dash/tentang', 'DashboardC@ab');
Route::get('dash/faq', 'DashboardC@fa');
Route::get('regist', 'RegisterC@v');
Route::post('regist/proses','RegisterC@register');

Route::get('/dokter', 'DokterC@i');
Route::get('/dokter/tambah', 'DokterC@tambah');
Route::get('/dokter/cari', 'DokterC@c');
Route::post('/dokter/simpan', 'DokterC@simpan');
Route::get('/dokter/edit/{id_dokter}', 'DokterC@edit');
Route::put('/dokter/update/{id_dokter}', 'DokterC@update');
Route::get('/dokter/hapus/{id_dokter}', 'DokterC@delete');