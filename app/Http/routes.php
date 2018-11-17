<?php


Route::get('{page?}', 'ProjectController@index');

Route::resource('admin/banner','BannerController');
Route::resource('admin/user','UserController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/type','TypeController');
Route::resource('admin/review','ReviewController');
Route::resource('admin/application','ApplicationController');

//<<<<<<< HEAD
//Category
//đường dẫn đến form của category
Route::get('category/createcategory','CategoryController@getCreate');

//đường dẫn khi submit form thêm
Route::post('category/createcategory','CategoryController@postCreate');


Route::get('category','CategoryController@index');

//đường dẫn đến form edit của category
Route::get('category/{id}/editcategory','CategoryController@getEdit');

//đường dẫn khi submit edit
Route::post('category/update','CategoryController@postEdit');


//đường dẫn khi delete category
Route::get('category/{id}/delete','CategoryController@destroy');

//===========================================================================================//
//Type
//đường dẫn đến form của type
Route::get('type/createtype','TypeController@getCreate');

//đường dẫn khi submit form thêm
Route::post('type/createtype','TypeController@postCreate');


Route::get('type','TypeController@index');

//đường dẫn đến form edit của type
Route::get('type/{id}/edittype','TypeController@getEdit');

//đường dẫn khi submit edit
Route::post('type/update','TypeController@postEdit');


//đường dẫn khi delete type
Route::get('type/{id}/delete','TypeController@destroy');



//Route::get('/', 'WelcomeController@index');
//=======
//>>>>>>> b1427c9abe56057125881f8727d213b742684a18


//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::patch('admin/category',['as' => 'admin.category','uses' => 'CategoryController@index']);

Route::patch('admin/type',['as' => 'admin.type','uses' => 'TypeController@index']);

