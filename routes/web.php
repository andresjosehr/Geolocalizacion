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

use App\log_biofiltro;
use App\instalacion;
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', function (){

	return view("auth/login");

})->name('login');




Route::get('/db_instalaciones', 'InstalacionesController@ConsultaInicial')->name('/db_instalaciones');


Route::post('/ConsultaInicialModal-inter', "InstalacionesController@ConsultaInicialModal"); 


Route::get('/Prueba', "PruebaController@index"); 



