<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('usuarios')->group(function(){
    Route::get('','UsuarioController@index');
    Route::get('/{id}','UsuarioController@show');
    Route::put('/{id}','UsuarioController@update');
    Route::post('','UsuarioController@store');
    Route::delete('/{id}','UsuarioController@destroy');
});

Route::prefix('/enderecos')->group(function(){
    Route::get('','EnderecoController@index');
    Route::get('/{id}','EnderecoController@show');
    Route::put('/{id}','EnderecoController@update');
    Route::post('','EnderecoController@store');
    Route::delete('/{id}','EnderecoController@destroy');
});

Route::prefix('/cidades')->group(function(){
    Route::get('','CidadeController@index');
    Route::get('/{id}','CidadeController@show');
    Route::put('/{id}','CidadeController@update');
    Route::post('','CidadeController@store');
    Route::delete('/{id}','CidadeController@destroy');
});

Route::prefix('/estados')->group(function(){
    Route::get('','EstadoController@index');
    Route::get('/{id}','EstadoController@show');
    Route::put('/{id}','EstadoController@update');
    Route::post('','EstadoController@store');
    Route::delete('/{id}','EstadoController@destroy');
});
