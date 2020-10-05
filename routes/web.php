<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/produtos/pesquisar', 'App\Http\Controllers\ProdutoController@pesquisar');
Route::post('/produtos/pesquisar', 'App\Http\Controllers\ProdutoController@pesquisar');

Route::get('/produtos/inserir', 'App\Http\Controllers\ProdutoController@mostrar_inserir');
Route::post('/produtos/inserir', 'App\Http\Controllers\ProdutoController@inserir');

Route::get('/produtos/alterar/{id}', 'App\Http\Controllers\ProdutoController@mostrar_alterar');
Route::post('/produtos/alterar', 'App\Http\Controllers\ProdutoController@alterar');

Route::get('/produtos/excluir/{id}', 'App\Http\Controllers\ProdutoController@excluir');

