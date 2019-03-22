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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('1');
});

Route::get('/driver', function () {
    return view('auth.driver');
});
Route::resource('/users', 'UserController')->names([
    'show' => 'profile'
]);
Route::resource('drivers', 'DriverInfoController');
// Route::resource('photos', 'PhotoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
