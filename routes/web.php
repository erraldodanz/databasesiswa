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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/logic', 'HomeController@logic')->name('logic');
Route::match(['get', 'post'],'/home/logic_process', 'HomeController@logic_process')->name('logic_process');
Route::get('/home/data_siswa', 'CRUDSiswaController@index')->name('data_siswa');
Route::get('/home/tambah_siswa', 'CRUDSiswaController@tambah_siswa')->name('tambah_siswa');
Route::post('/home/data_siswa/add', 'CRUDSiswaController@add')->name('add');
Route::get('/home/data_siswa/edit/{id}', 'CRUDSiswaController@edit');
Route::get('/home/data_siswa/hapus/{id}', 'CRUDSiswaController@delete');
Route::put('/home/data_siswa/update/{id}', 'CRUDSiswaController@update');