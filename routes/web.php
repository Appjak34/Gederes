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

Route::get('/welcome',function(){
	return view('welcome');
})->name('welcome');

Route::get('/menu',function(){
	return view('Paginas/menu');
})->name('menu');

Route::get('/log-ing',function(){
	return view('Paginas/log-in');
})->name('log-in');

Route::get('/Chef',function(){
	return view('Paginas/Chef');
})->name('Chef');

Route::get('/insertarplatillo', function(){
	return view('Paginas/insertaplatillo');
})->name('insertarplatillo');

Route::get('/update', function(){
	return view('Paginas/update');
})->name('update');

Route::get('/delete', function(){
	return view('Paginas/delete');
})->name('delete');

Route::post('/insertado', 'platilloController@store')->name('insertado');

Route::put('/actualizado', 'platilloController@update')->name('actualizado');

Route::delete('/eliminado', 'platilloController@delete')->name('eliminado');