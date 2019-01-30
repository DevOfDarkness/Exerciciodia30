<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


});
Route::post('clientes','ClientesController@create')->name('create_clientes');

Route::post('livros','LivrosController@create')->name('create_livros');

Route::get('livros/{id}', 'LivrosController@show')->name('show_livros');

Route::get('livros', 'LivrosController@list')->name('list_livros');

Route::put('livros/{id}', 'LivrosController@update')->name('update_livros');

Route::delete('livros/{id}', 'LivrosController@delete')->name('delete_livros');

Route::apiResource('emprestimos', 'EmprestimoController');
