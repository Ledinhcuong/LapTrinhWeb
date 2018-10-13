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

Route::get('/{page}', 'ProjectController@index');  // Route giao diện project

Route::get('/foo/bar','UriController@index');

Route::get('/', 'WelcomeController@view');

Route::get('home', 'HomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
 
