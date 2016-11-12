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
    return view('/pages/login');
});

// Route::get('/employee/create', function () {
//     return view('employeecreate');
// });

// Route::get('/', 'MainController@index');


// Login controller
Route::get('/login/{email}+{password}', 'LoginController@authenticate');

Route::post('/login', 'LoginController@authenticate');

// // Stock controller
// Route::get('/stock', 'StockController@index');
// Route::get('/stock/{id}', 'StockController@show');
// Route::get('/stock/create/{name}+{price}+{stock}', 'StockController@store');
// Route::get('/stock/update/{id}/{name}+{price}+{stock}+{date}', 'StockController@update');
// Route::get('/stock/delete/{id}', 'StockController@destroy');
