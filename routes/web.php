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
//halaman

Route::get('matkul', 'matkulController@index')->name('matkul');
Route::get('tambah-matkul', 'matkulController@create')->name('tambah.matkul');
Route::post('simpan-matkul', 'matkulController@store')->name('simpan.matkul');

Route::get('edit-matkul/{id}', 'matkulController@edit')->name('edit.matkul');
Route::post('update-matkul{id}', 'matkulController@update')->name('update.matkul');

Route::get('hapus-matkul/{id}', 'matkulController@destroy')->name('hapus.matkul');

//untuk route mahasiswa
Route::get('mahasiswa', 'mahasiswaController@index')->name('mahasiswa');
Route::get('tambah-mahasiswa', 'mahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'mahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'mahasiswaController@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa{id}', 'mahasiswaController@update')->name('update.mahasiswa');

Route::get('hapus-mahasiswa/{id}', 'mahasiswaController@destroy')->name('hapus.mahasiswa');

//untuk route nilai
Route::get('nilai', 'nilaiController@index')->name('nilai');
Route::get('tambah-nilai', 'nilaiController@create')->name('tambah.nilai');
Route::post('simpan-nilai', 'nilaiController@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'nilaiController@edit')->name('edit.nilai');
Route::post('update-nilai{id}', 'nilaiController@update')->name('update.nilai');

Route::get('hapus-nilai/{id}', 'nilaiController@destroy')->name('hapus.nilai');
