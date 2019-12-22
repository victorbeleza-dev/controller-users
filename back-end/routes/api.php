<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->group(function (){
    Route::prefix('/usuarios')->group(function (){

       Route::get('/', 'UsuarioController@index')->name('usuarios');
       Route::get('/{id}', 'UsuarioController@show')->name('single_usuario');

       Route::post('/', 'UsuarioController@store')->name('store_usuario');
       Route::put('/{id}', 'UsuarioController@update')->name('update_usuario');
    });
});
