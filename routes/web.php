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
    return view('erd.erd');
});

Route::get('/projek/create', 'ProjekController@create'); // menampilkan halaman form
Route::post('/projek', 'ProjekController@store'); // menyimpan data
Route::get('/projek', 'ProjekController@index'); // menampilkan semua
Route::get('/projek/{id}', 'ProjekController@show'); // menampilkan detail Projek dengan id
Route::get('/projek/{id}/edit', 'ProjekController@edit'); // menampilkan form untuk edit Projek
Route::put('/projek/{id}', 'ProjekController@update'); // menyimpan perubahan dari form edit
Route::delete('/projek/{id}', 'ProjekController@destroy'); // menghapus data dengan id
