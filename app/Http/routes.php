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


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('users', [
    'as' => 'users',
    'uses' => 'UsersController@index'
]);

Route::group(['prefix' => 'admin', 'namespace' => '\Admin'], function(){

    Route::resource('users','UsersController');

});

//rutas para familias del programa
Route::group(['prefix' => 'familiaprograma', 'namespace' => '\FamiliasPrograma'], function(){

    Route::get('familias', [
        'as' => 'familias',
        'uses' => 'FamiliaProgramaController@index'
    ]);


    Route::get('editarfamilia/{id}', [
        'as' => 'editarfamilia',
        'uses' => 'FamiliaProgramaController@edit'
    ]);

    //Route::resource('familias','FamiliaProgramaController');



});




// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);



