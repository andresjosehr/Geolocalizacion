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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/db_instalaciones', 'InstalacionesController@ConsultaInicial')->name('/db_instalaciones');


// Route::get('/Prueba', function(){ return view('prueba'); }); 



Route::post('/ConsultaInicialModal', 'InstalacionesController@Consulta24Hrs'); 

// Route::post('/ConsultaInstalacion','InstalacionesController@post'); 


