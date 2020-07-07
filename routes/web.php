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
    return view('home');
});

Route::get('/data-tables', function () {
    return view('data');
});

Route::get('/items/create', 'ItemController@create'); //menampilkan halaman
Route::post('/items', 'ItemController@store'); //menyimpan data
Route::get('/items', 'ItemController@index'); //menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); //menampilkan detailnya
Route::get('/items/{id}/edit', 'ItemController@edit'); //menampilkan form edit item
Route::put('/items/{id}', 'ItemController@update'); //menyimpan perubahan
Route::delete('/items/{id}', 'ItemController@destroy'); //menghapus data dengan id