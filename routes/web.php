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
// rota da pagina index.php - pagina inicial
Route::get('/', function () {
    return view('welcome');
});

// rota para mostrar view de nova mensagem
Route::get('/newmessage','MessageController@index');

// rota de Passagem de parametros por post por meio do metodo store
Route::post('/receive','MessageController@store');

// Rota de retorno de json das mensagens
Route::get('/getmessage', 'MessageController@show');

