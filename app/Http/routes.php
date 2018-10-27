<?php


Route::get('{page?}', 'ProjectController@index');


//Route::get('/', 'WelcomeController@index');


//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
