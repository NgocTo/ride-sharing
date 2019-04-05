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
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

// Landing page Routing
Route::get('/', 'HomeController@index');
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
Route::resource('drivers', 'DriverInfoController');

// UserController Routing
Route::resource('/user', 'UserController');

// Set Driver Mode
Route::post('/setDriverMode', 'UserController@setDriverMode')->name('setDriverMode'); ;
Route::get('/setDriverMode', 'UserController@setDriverMode');
Route::get('/setRiderMode', 'UserController@setRiderMode');

// RideController Routing
Route::get('/rides/', 'RideController@index'); //localhost:8000/rides/
Route::post('/rides/store', 'RideController@store');
Route::get('/rides/{terms}', 'RideController@fillDropdown');
Route::get('/rides/{origin}/{destination}', 'RideController@getDirection');

Route::get('/rides/rideinfo', function() {
    return view('rides.rideinfo');
}); 
