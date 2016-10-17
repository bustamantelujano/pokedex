<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/consultarUsuarios', 'usuariosController@consultar');

Route::get('/consultarUsuarios/{var}', 'usuariosController@selectTypes');

Route::get('/consultarPerfil', 'usuariosController@perfil');

Route::get('/', 'principalController@home');

Route::get('/home', 'principalController@home');

Route::get('/consultarPerfil/{id}', 'usuariosController@perfil');
