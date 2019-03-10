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
    return view('dashboard');
});
Route::resource('dataTafsir', 'DataTafsirController');
Route::get('Al-Fatihah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah1'));
Route::get('Al-Baqarah', array('middleware' => 'cors', 'uses' => 'ApiController@Surah2'));
// Route::get('dataTafsir/{id}', 'DataTafsirController@Tafsir');