<?php

Route::get('/', function(){
	return view('pages.home');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::resource('flyers','FlyersController');

 // Route::resource('flyers', 'FlyersController');
Route::get('flyers/create','FlyersController@create');
Route::post('flyers/store','FlyersController@store');
Route::get('{zipcode}/{street}','FlyersController@show');
Route::post('{zipcode}/{street}/photos','FlyersController@addPhoto');

//Route::post('flyers/create', array('as' => 'createflyer', 'uses' => 'FlyersController@create'));

/*Route::get('flyers/create','FlyersController@create');

Route::post('flyers','FlyersController@store');*/
