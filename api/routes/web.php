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

Route::post('registrar', ['uses'=>'RegistroController@store']);

Route::get('usuarios', ['uses'=>'UsuariosController@getUsers']);

// ejemplo de la ruta http://127.0.0.1:8000/eliminar/12
Route::delete('eliminar/{id}', ['uses'=>'UsuariosController@destroy']);

Route::get('usuarios/{id}', ['uses'=>'UsuariosController@show']);

Route::get('usuarios/{id}/edit', ['uses'=>'UsuariosController@edit']);

Route::put('usuarios/{id}', ['uses'=>'UsuariosController@update']);

// Route::get('prueba/{ id }', ['as'=>'prueba','uses'=>'UsuariosController@destroy']);

// route::post('prueba/{id}', ['as'=>'prueba','uses'=>'UsuariosController@destroy']);







