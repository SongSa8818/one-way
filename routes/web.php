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

Route::resource('/property', 'PropertyController');
Route::get('/property-list', 'PropertyController@list')->name('property.list');
Route::resource('/image', 'ImagePropertyController');

Route::resource('/request', 'RequestController');
Route::resource('/offer', 'OfferController');
Route::post('/acceptOffer', 'OfferController@acceptOffer')->name('acceptOffer');

Route::resource('/dashboard', 'DashboardController');
Route::resource('/user', 'UserController');

/* Parameter */
Route::resource('/city', 'CityController');
Route::resource('/khan', 'KhanController');
Route::resource('/sangkat', 'SangkatController');
Route::resource('/village', 'VillageController');

/* Ajax */
Route::post('select_khans', array('as' => 'ajax.khans_select', 'uses' => 'KhanController@getKhans'));
Route::post('select_sangkats', array('as' => 'ajax.sangkats_select', 'uses' => 'SangkatController@getSangkats'));
Route::post('select_villages', array('as' => 'ajax.villages_select', 'uses' => 'VillageController@getVillages'));
