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
Route::get('/car', function () {
    return view('auth.car');
});
Route::get('/index', function () {
    return view('index');
});
Route::resource('/users', 'UserController')->names([
    'show' => 'profile'
]);
// Route::get('/users/getDirection', 'UserController@getDirection');
Route::get('/users/{origin}/{destination}', 'UserController@getDirection');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
