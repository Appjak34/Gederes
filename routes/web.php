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
Route::get('/welcome','navbarController@welcome')->name('welcome');
Route::get('/menu','navbarController@menu')->name('menu');
Route::get('/log-in','navbarController@login')->name('log-in');