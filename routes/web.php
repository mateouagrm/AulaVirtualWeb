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


Route::get('/productos', function () {
    return view('cliente.productos');
});

Route::get('/bono', function () {
    return view('cliente.bono');
});

Route::get('/panel-administrador', function () {
    return view('administrador-panel');
});

Route::get('/infoProducto', function () {
    return view('cliente.infoProducto');
});

Route::get('/recomendar', function () {
    return view('cliente.recomendar');
});

Route::get('/cambioContraseña', function () {
    return view('cliente.cambioContraseña');
});

Route::get('/perfil', function () {
    return view('cliente.perfil');
});
/*----------------------------------
administrador
----------------------------------*/
Route::resource('administrador','UserController');
Route::get('administrador-usuarioConBono','UserController@usuarioConBono');
Route::get('administrador-usuarioRecomendado','UserController@usuarioRecomendado');


Route::resource('administrador-productos','ProductoController');
Route::get('administrador-categoria/{id}','ProductoController@categoria');
Route::get('administrador-subcategoria/{id}','ProductoController@subcategoria');


/*CATEGORIA*/
Route::resource('administrador-categoria','CategoriaController');

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


//login registro.
Route::post('/login2', 'UserController@login');
Route::post('/registro2', 'UserController@register');


