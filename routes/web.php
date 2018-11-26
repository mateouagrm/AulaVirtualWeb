<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is wherebbbhhh you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
      return view('cliente.carrusel');
});


/*----------------------------------
administrador
----------------------------------*/

/*DE AQUI PARA ABAJO LO DE TECNO WEB*/




/*CARGO*/
Route::resource('administrador-cargo','CargoController');

/*CICLO*/
Route::resource('administrador-ciclo','CicloController');

/*CRONOGRAMA*/
Route::resource('administrador-cronograma','CronogramaController');

/*USUARIO*/
Route::resource('administrador-users','UserController');

//login registro.
Route::post('/login2', 'UserController@login');
Route::post('/registro2', 'UserController@register');


