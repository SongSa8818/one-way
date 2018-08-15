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


Auth::routes();

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/exclusive', 'ExclusiveController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/property', 'PropertyController@index');
Route::get('/request', 'RequestController@index');

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/exclusive', 'ExclusiveController');
Route::resource('/showing', 'ShowingController');
Route::resource('/about', 'AboutController');
Route::resource('/contact', 'ContactController');
Route::resource('/property', 'PropertyController');

