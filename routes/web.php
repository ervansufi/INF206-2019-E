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

// jika / dia akan diarahkan ke halaman index
Route::get('/', 'HomeController@index');

// jika /buat-lelang dia akan diarahkan ke halaman buat_lelang
Route::get('/buat-lelang', 'WebController@lelang')->middleware('auth');

// jika /login dia akan diarahkan ke halaman login
Route::get('/login', 'WebController@login');

// jika /register dia akan diarahkan ke halaman register
Route::get('/register', 'WebController@register');

// jika /riwayat-lelang dia akan diarahkan ke halaman riwayat_lelang
Route::get('/riwayat-lelang', 'WebController@rLelang')->middleware('auth');

// jika /riwayat-bid dia akan diarahkan ke halaman riwayat_bid
Route::get('/riwayat-bid', 'WebController@rBid')->middleware('auth');

Route::get('/bid', 'BidController@index')->name('bid');
Route::get('/bid/tambah/{lelang_id}', 'BidController@create')->name('bid.tambah');
Route::post('/bid/simpan', 'BidController@store')->name('bid.simpan');
Route::get('/bid/{id}/edit', 'BidController@edit')->name('bid.edit');
Route::post('/bid/{id}/update', 'BidController@update')->name('bid.update');
Route::get('/bid/{id}/delete', 'BidController@destroy')->name('bid.delete');

Route::get('/lelang', 'LelangController@index')->name('lelang');
Route::get('/lelang/tambah', 'LelangController@create')->name('lelang.tambah');
Route::post('/lelang/simpan', 'LelangController@store')->name('lelang.simpan');
Route::get('/lelang/{id}/edit', 'LelangController@edit')->name('lelang.edit');
Route::post('/lelang/{id}/update', 'LelangController@update')->name('lelang.update');
Route::get('/lelang/{id}/delete', 'LelangController@destroy')->name('lelang.delete');
Route::get('/lelang/{id}', 'LelangController@show')->name('lelang.tampil');

Auth::routes();
