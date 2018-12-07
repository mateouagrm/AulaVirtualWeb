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

/*AULA VIRTUAL*/
Route::resource('administrador-aula-virtual','AulaVirtualController');

/*REQUISITO*/
Route::resource('administrador-requisito','RequisitoController');

/*ARCHIVO*/
//Route::resource('profesor-archivo','ArchivoController');

/*DE AQUI PARA ABAJO SON LOS CONTROLADORES DEL CLIENTE O PROFESOR*/

/*MIS AULAS VIRTUALES*/
Route::get('profesor-aula-virtuales/{id}', 'ProfesorController@misAulasVirtuales');
Route::get('profesor-aula-virtual/{id}', 'ProfesorController@procesoAulaVirtual');
Route::get('profesor-aula-virtual_estadisticas/{id}', 'ProfesorController@misAulasVirtualesEstadisticas');

Route::get('envio/{id_aula}/{id_requisito}', 'ProfesorController@envio');


Route::post('/profesor-aula-virtual', 'ArchivoController@store');

Route::get('profesor-aula', 'ProfesorController@index');
//login registro.
Route::post('/login2', 'UserController@login');
Route::post('/registro2', 'UserController@register');


//buscar
Route::get('/buscar/{nombre}', 'BuscarController@buscar');

//contador
Route::get( 'conteo/{nombre}','ContadorController@updateView');



Route::post('/login3', ['as' =>'login3', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
