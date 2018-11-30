<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('{page?}', 'ProjectController@index');

Route::resource('admin/banner','BannerController');
Route::resource('admin/user','UserController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/type','TypeController');
Route::resource('admin/users','TypeController');
Route::resource('admin/review','ReviewController');
Route::resource('admin/application','ApplicationController');
//====================================================================================//
//Category
//đường dẫn đến form của category
Route::get('category/createcategory','CategoryController@getCreate');

//đường dẫn khi submit form thêm
Route::post('category/createcategory', [
    'as' => 'create.category', 'uses' => 'CategoryController@postCreate'
]);

Route::get('category','CategoryController@index');
//đường dẫn đến form edit của category

Route::get('category/{id}/editcategory','CategoryController@getEdit');

//đường dẫn khi submit edit

Route::post('category/{id}/update', [
    'as' => 'update.category', 'uses' => 'CategoryController@postEdit'
]);

//đường dẫn khi delete category
Route::get('category/{id}/delete','CategoryController@destroy');

//===========================================================================================//
//Type
//đường dẫn đến form của type
Route::get('type/createtype','TypeController@getCreate');

//đường dẫn khi submit form thêm
Route::post('type/createtype', [
    'as' => 'create.type', 'uses' => 'TypeController@postCreate'
]);

Route::get('type','TypeController@index');

//đường dẫn đến form edit của type
Route::get('type/{id}/edittype','TypeController@getEdit');

//đường dẫn khi submit edit
Route::post('type/{id}/update', [
    'as' => 'update.type', 'uses' => 'TypeController@postEdit'
]);

//đường dẫn khi delete type
Route::get('type/{id}/delete','TypeController@destroy');

//==================================================================================//
//Banner
//đường dẫn đến form của banner
Route::get('banner/create','BannerController@create');

//đường dẫn khi submit form thêm
Route::post('banner/create', 'BannerController@store');

Route::get('banner','BannerController@index');

//đường dẫn đến form edit của banner
Route::get('banner/{id}/edit','BannerController@getEdit');

//đường dẫn khi submit edit
Route::post('banner/{id}/update', 'BannerController@postEdit');

//đường dẫn khi delete banner
Route::get('banner/{id}/delete','BannerController@destroy');

//====================================//
Route::get('/', function () {
    return view('welcome');

});

//==================================================================================//
//user
//đường dẫn đến form của user
Route::get('users/createuser','UserController@getCreate');

//đường dẫn khi submit form thêm
Route::post('users/createuser', [
    'as' => 'create.users', 'uses' => 'UserController@postCreate'
]);
Route::get('users','UserController@index');

//đường dẫn đến form edit của user
Route::get('users/{id}/edituser','UserController@getEdit');

//đường dẫn khi submit edit
Route::post('users/{id}/update', [
    'as' => 'update.users', 'uses' => 'UserController@postEdit'
]);

//đường dẫn khi delete user
Route::get('users/{id}/delete','UserController@destroy');


//====================================================================//
Route::patch('admin/category',['as' => 'admin.category','uses' => 'CategoryController@index']);

Route::patch('admin/type',['as' => 'admin.type','uses' => 'TypeController@index']);

Route::patch('admin/banner',['as' => 'admin.banner','uses' => 'BannerController@index']);

Route::patch('admin/user',['as' => 'admin.user','uses' => 'UserController@index']);



//=============== trang dang nhap====================================


Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::get('','HomeController@getIndex');

// Đăng ký thành viên
Route::get('register', 'RegisterController@getRegister');
Route::post('register', 'RegisterController@postRegister');

/*------------------------- Application -----------*/
Route::get('application/{id}/delete', 'ApplicationController@destroy');

Route::post('application/update', 'ApplicationController@update');