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
Route::resource('admin/review','ReviewController');
Route::resource('admin/application','ApplicationController');
Route::get('/', function () {
    return view('welcome');
});


/*------------------------- Application -----------*/

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

Route::patch('admin/category',['as' => 'admin.category','uses' => 'CategoryController@index']);
