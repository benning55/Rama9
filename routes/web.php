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
    return view('home');
});

Route::get('/sign', function () {
	return view('sign');
});

Route::get('/home', function () {
	return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/history', function () {
	return view('history');
});

Route::post('sign', 'user_control@store');

Route::get('com', 'user_control@show');

