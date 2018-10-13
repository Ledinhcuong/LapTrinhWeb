<?php


Route::get('/', 'ProjectController@index');

//Route::get('/{page}', 'ProjectController@view');  // Route giao diện project

Route::get('/foo/bar','UriController@index');

//Route::get('/', 'WelcomeController@view');

//Route::get('home', 'HomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
 
