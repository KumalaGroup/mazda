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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Beranda@index')->name('home'); 

Route::get('/detail/{id}','Produk@detail')->name('unitDetail');

Route::get('/berita','Berita@index')->name('berita');

Route::get('/berita/{slug}','Berita@detail')->name('beritaDetail');


