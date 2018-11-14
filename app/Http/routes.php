<?php


Route::get('{page?}', 'ProjectController@index');

Route::resource('admin/banner','BannerController');
Route::resource('admin/user','UserController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/type','TypeController');
Route::resource('admin/review','ReviewController');
Route::resource('admin/application','ApplicationController');



//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
