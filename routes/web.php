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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('mobil');
});

Route::get('/detail/{id}', function () {
    return view('detail');
});

Route::get('/berita',function(){
    return view('berita');
});

Route::get('/berita/{id}',function(){
    return view('detailBerita');
});

