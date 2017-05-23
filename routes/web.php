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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

// Rota para o dataTables

Route::get('pessoas/dados', 'ParticipantesController@dados');

// Rotas dos Resourceful Controllers

Route::resource('users', 'UsersController');
Route::resource('pessoas', 'ParticipantesController');
Route::get("mudarsenha", "HomeController@mudarsenha");