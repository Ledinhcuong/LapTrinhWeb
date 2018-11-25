<?php



Route::get('{page?}', 'ProjectController@index');

Route::resource('admin/banner','BannerController');
Route::resource('admin/user','UserController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/type','TypeController');
Route::resource('admin/users','TypeController');
Route::resource('admin/review','ReviewController');
Route::resource('admin/application','ApplicationController');


/*------------------------- Application -----------*/
Route::get('application/{id}/delete', 'ApplicationController@destroy');

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
Route::get('banner/create','BannerController@getCreate');

//đường dẫn khi submit form thêm
Route::post('banner/create', [
    'as' => 'create.banner', 'uses' => 'BannerController@postCreate'
]);

Route::get('banner','BannerController@index');

//đường dẫn đến form edit của banner
Route::get('banner/{id}/edit','BannerController@getEdit');

//đường dẫn khi submit edit
Route::post('banner/{id}/update', [
    'as' => 'update.banner', 'uses' => 'BannerController@postEdit'
]);

//đường dẫn khi delete banner
Route::get('banner/{id}/delete','BannerController@destroy');



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

//==================================================================================//
//review
//đường dẫn đến form của review
Route::get('review/createreview','reviewController@getCreate');

//đường dẫn khi submit form thêm
Route::post('review/createreview', [
    'as' => 'create.review', 'uses' => 'reviewController@postCreate'
]);
Route::get('review','reviewController@index');

//đường dẫn đến form edit của review
Route::get('review/{id}/editreview','reviewController@getEdit');

//đường dẫn khi submit edit
Route::post('review/{id}/update', [
    'as' => 'update.review', 'uses' => 'reviewController@postEdit'
]);

//đường dẫn khi delete review
Route::get('review/{id}/delete','reviewController@destroy');


//====================================================================//

Route::patch('admin/category',['as' => 'admin.category','uses' => 'CategoryController@index']);

Route::patch('admin/type',['as' => 'admin.type','uses' => 'TypeController@index']);

Route::patch('admin/banner',['as' => 'admin.banner','uses' => 'BannerController@index']);

Route::patch('admin/user',['as' => 'admin.user','uses' => 'UserController@index']);

Route::patch('admin/review',['as' => 'admin.review','uses' => 'ReviewController@index']);



//=============== trang dang nhap


Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::get('','HomeController@getIndex');

// Đăng ký thành viên
Route::get('register', 'RegisterController@getRegister');
Route::post('register', 'RegisterController@postRegister');



