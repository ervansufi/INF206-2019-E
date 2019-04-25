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
Route::get('/', 'WebController@index');

// jika /buat-lelang dia akan diarahkan ke halaman buat_lelang
Route::get('/buat-lelang', 'WebController@lelang');

// jika /login dia akan diarahkan ke halaman login
Route::get('/login', 'WebController@login');

// jika /register dia akan diarahkan ke halaman register
Route::get('/register', 'WebController@register');

// jika /riwayat-lelang dia akan diarahkan ke halaman riwayat_lelang
Route::get('/riwayat-lelang', 'WebController@rLelang');

// jika /riwayat-bid dia akan diarahkan ke halaman riwayat_bid
Route::get('/riwayat-bid', 'WebController@rBid');

