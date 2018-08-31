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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/exclusive', 'ExclusiveController');
Route::resource('/showing', 'ShowingController');
Route::resource('/about', 'AboutController');
Route::resource('/contact', 'ContactController');
Route::get('/contact-list', 'ContactController@list')->name('contact.list');

Route::resource('/property', 'PropertyController');
Route::get('/property-list', 'PropertyController@list')->name('property.list');
Route::resource('/image', 'ImagePropertyController');

Route::resource('/request', 'RequestController');
Route::resource('/offer', 'OfferController');
Route::post('/acceptOffer', 'OfferController@acceptOffer')->name('acceptOffer');

Route::resource('/dashboard', 'DashboardController');

/* Parameter */
Route::resource('/city', 'CityController');
Route::resource('/khan', 'KhanController');
Route::resource('/sangkat', 'SangkatController');
Route::resource('/village', 'VillageController');