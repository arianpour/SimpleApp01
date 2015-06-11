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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function () {
    Route::get('clients', 'ClientController@index');
    Route::get('clients/create', 'ClientController@create');
    Route::post('clients/store', 'ClientController@store');
    Route::get('clients/{id}', 'ClientController@show');
});







Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
