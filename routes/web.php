<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('./pages/user_main');
});

Route::get('/login', function () {
    return view('./pages/login');
});

Route::post('/login', 'LoginController@authenticate');

Route::get('/emp/main', function () {
    return view('./pages/employer_main');
});

// Route::post('/employer_main', 'LoginController@authenticate');

Route::get('/emp/profile', function () {
    return view('./pages/employer_profile');
});

Route::get('/register/employer', function () {
	return view('./pages/register_employer');
});

Route::get('/user/main', function () {
    return view('./pages/user_main');
});

// Route::post('/user_main', 'LoginController@authenticate');

Route::get('/user/profile', function () {
    return view('./pages/user_profile');
});

Route::get('/register/user', function () {
	return view('./pages/register_user');
});

Route::get('/boost', function () {
	return view('./pages/boost');
});

Route::get('/chat', function () {
	return view('./pages/chat');
});

Route::get('/filter', function () {
	return view('./pages/filter');
});

