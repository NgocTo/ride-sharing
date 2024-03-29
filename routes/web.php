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
Route::get('/', 'HomeController@index')->name('/');
Route::get('/index', function () {
    return view('index');
});

// AUTH Routing
Auth::routes();

// Route::get('/ride-history', function () {
//     return view('ride-history.index');
// });
Route::get('/ride-history', 'RideController@getRideHistory'); //localhost:8000/rides/

Route::get('/rides', function () { //to be removed
    return view('rides.index');
});
Route::get('/settings', 'UserController@getAll');
// UserController Routing
Route::resource('/user', 'UserController');

// Set Driver Mode
Route::get('/setDriverMode', 'UserController@setDriverMode');
Route::get('/setRiderMode', 'UserController@setRiderMode');

// RideController Routing
Route::get('/getCurrentRides','RideController@index');
Route::get('/ride/{id}/{origin}/{destination}','RideController@rideinfo'); 
Route::patch('/ride/updateCurrentRide/{id}','RideController@updateCurrentRide'); 
Route::get('/rideconfirmation', function() {
    return view('rides.rideconfirmation');
}); 
Route::get('/rides', 'RideController@index'); //localhost:8000/rides/
Route::post('/rides/store', 'RideController@store');
Route::get('/rides/{terms}', 'RideController@fillDropdown');
Route::get('/rides/{origin}/{destination}', 'RideController@getDirection');




