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
Route::post('clientes','ClientesController@create');

Route::post('livros','LivrosController@create');

Route::get('livros/{id}', 'LivrosController@show');

Route::get('livros', 'LivrosController@list');

Route::put('livros/{id}', 'LivrosController@update');

Route::delete('livros/{id}', 'LivrosController@delete');
