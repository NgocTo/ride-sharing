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
// Welcome Routing - to be changed into loading screen with logo
Route::get('/', function () {
    return view('welcome');
});
// Landing page Routing
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', function () {
    return view('index');
});

// AUTH Routing
Auth::routes();

Route::get('/ride-history', function () {
    return view('ride-history.index');
});
Route::get('/rides', function () {
    return view('rides.index');
});

// Test Routing
Route::resource('/users', 'UserController')->names([
    'show' => 'profile'
]);
Route::resource('drivers', 'DriverInfoController');

// UserController Routing
Route::get('/users/{origin}/{destination}', 'UserController@getDirection');
Route::get('/users/{terms}', 'UserController@fillDropdown');

Route::get('/users', 'UserController@setSession');

// RideController Routing
Route::get('/rides/{terms}', 'RideController@fillDropdown');
Route::get('/rides/{origin}/{destination}', 'RideController@getDirection');