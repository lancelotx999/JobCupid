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
    return view('/test');
});
// Login controller
Route::get('/login', function () {
    return view('/pages/login');
});

Route::post('/login', 'LoginController@authenticate');

// Route::post('/user_main', 'LoginController@authenticate');
// Route::post('/employer_main', 'LoginController@authenticate');

// Route::get('/employer_main', function () {
//     return view('/pages/employer_main');
// });

// Route::get('/user_main', function () {
//     return view('/pages/user_main');
// });

// // Stock controller
// Route::get('/stock', 'StockController@index');
// Route::get('/stock/{id}', 'StockController@show');
// Route::get('/stock/create/{name}+{price}+{stock}', 'StockController@store');
// Route::get('/stock/update/{id}/{name}+{price}+{stock}+{date}', 'StockController@update');
// Route::get('/stock/delete/{id}', 'StockController@destroy');
