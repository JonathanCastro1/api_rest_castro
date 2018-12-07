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

// Route::post('logearse', ['as'=>'logearse','uses'=>'logearseController@logearse']);

Route::get('usuarios', ['as'=>'usuarios','uses'=>'usuariosController@getUsers']);

// Route::post('id', ['as'=>'id','uses'=>'logearseController@id']);

// Route::get('id', ['as'=>'id','uses'=>'logearseController@id']);

// Route::get('municipios', ['as'=>'municipios','uses'=>'logearseController@getMunicipios']);
