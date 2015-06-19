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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('home_2', 'HomeController@index_2');

Route::get('about', 'HomeController@about');

Route::get('resources', 'HomeController@resources');

Route::get('help', 'HomeController@help');

Route::get('register', 'RegisterController@index');
Route::post('register', 'RegisterController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
