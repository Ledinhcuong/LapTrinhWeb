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
Route::get('application/{id}/delete', 'ApplicationController@destroy');

