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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ini halaman biaya
Route::get('biaya', 'biayaController@index')->name('biaya');
Route::get('tambah-biaya', 'biayaController@create')->name('tambah.biaya');
Route::post('simpan-biaya', 'biayaController@store')->name('simpan.biaya');

Route::get('edit-biaya/{id}', 'biayaController@edit')->name('edit.biaya');
Route::post('update-biaya{id}', 'biayaController@update')->name('update.biaya');

Route::get('hapus-biaya/{id}', 'biayaController@destroy')->name('hapus.biaya');
