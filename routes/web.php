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


Auth::routes();

Route::resource('/Pelicula','PeliculaController');
Route::resource('/Cart','CartController');
Route::resource('/Renta','RentaController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
