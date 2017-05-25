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

use App\DataTables\ParticipantesDataTable;

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

// Rota para o dataTables

Route::get('pessoas/dados', 'ParticipantesController@dados');
Route::get('pessoas/data', function (ParticipantesDataTable $datatables){

	return $datatables->render('pessoas.table');

});

// Rota para calcular o tempo de residência do participante

Route::get('pessoas/temporesidencia/', 'ParticipantesController@anosResidencia');

// Rotas dos Resourceful Controllers

Route::resource('users', 'UsersController');
Route::resource('pessoas', 'ParticipantesController');
Route::get("mudarsenha", "HomeController@mudarsenha");