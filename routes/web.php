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
Route::get('/menu','platilloController@menu')->name('menu');
Route::get('/log-in','navbarController@login')->name('log-in');
Route::get('/Chef', 'ordenController@muestraordenes')->name('Chef');
Route::get('/almacen','Ingredientes@almacen')->name('almacen');
Route::get('/menu/agregarPlatillo','IngredientsOption@addoption')->name('agregarPlatillo');
Route::get('/menu/actualizarPlatillo', 'IngredientsOption@addoptionupdate')->name('actualizarPlatillo');
Route::get('/menu/eliminarPlatillo', 'platilloController@showdelete')->name('eliminarPlatillo');
Route::post('/insertado', 'platilloController@store')->name('insertado');
Route::put('/actualizado', 'platilloController@update')->name('actualizado'); 
Route::delete('/eliminado', 'platilloController@delete')->name('eliminado');