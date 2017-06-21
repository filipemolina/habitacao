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

// Rotas dos Relatórios

Route::get('pessoas/relatorios', 'ParticipantesController@relatorios');
Route::post('pessoas/imprimerelatorios', 'ParticipantesController@imprimeRelatorio');
Route::get('pessoas/comprovante/{id}', 'ParticipantesController@imprimeComprovante');

// Rotas para AJAX

// Rota para alterar a senha do usuário atual

Route::get("mudarsenha", "HomeController@mudarsenha");
Route::post("/users/alterarsenha", "UsersController@alterarSenha");

Route::get('/pessoas/api/{id}', 'ParticipantesController@info_ajax');
Route::get('/pessoas/verificacpf/{cpf}', 'ParticipantesController@cpfExiste');

// Rotas dos Resourceful Controllers

Route::resource('users', 'UsersController');
Route::resource('pessoas', 'ParticipantesController');