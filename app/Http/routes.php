<?php


Route::get('{page?}', 'ProjectController@index');

Route::resource('admin/banner','BannerController');
Route::resource('admin/user','UserController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/type','TypeController');
Route::resource('admin/review','ReviewController');
Route::resource('admin/application','ApplicationController');

//Category
//đường dẫn đến form của category
Route::get('category/createcategory','CategoryController@create');

//đường dẫn khi submit form thêm
Route::post('category/createcategory','CategoryController@store');
Route::get('category','CategoryController@index');
//đường dẫn đến form edit của category
Route::get('category/{id}/editcategory','CategoryController@edit');
//đường dẫn khi submit edit
Route::post('category/updatecategory','CategoryController@update');
//đường dẫn khi delete category
Route::get('category/{id}/delete','CategoryController@destroy');


//Route::get('/', 'WelcomeController@index');


//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
