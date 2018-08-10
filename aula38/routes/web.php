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

/* Rotas Adicionar Filmes */
Route::get('/filmes', 'aula38Controller@exibirFilmes');

Route::get('/filme/add', 'aula38Controller@form');

Route::post('/filme/add', 'aula38Controller@validar');

/* Rotas Atores */

Route::get('/actor/add', 'ActorsController@formactors');

Route::post('/actor/add', 'ActorsController@validarator');

//Route::post('/adicionar', 'aula38Controller@adicionar');

/* Rotas Editar Filmes */
Route::get('/filmes/edit/{id}', 'aula38Controller@editForm');
Route::put('/filmes/edit/{id}', 'aula38Controller@update');

/* Rotas Deletar Filme */
Route::get('/filme/delete/{id}', 'FilmeController@delete');