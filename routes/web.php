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

Route::post('/cadastro', 'TokenController@validateToken');

Route::get('/form/{token}', ['as' => 'form', 'uses' => 'CadastroController@showForm'])->middleware('verifictoken');
Route::post('/store', ['as' => 'cadastrar', 'uses' => 'CadastroController@store'])->middleware('verifictoken');

// Testes

Route::get('/gerar', 'TokenController@newToken');
Route::post('/gerador', ['as' => 'gerador', 'uses' => 'TokenController@generate']);
