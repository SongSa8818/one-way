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
Route::get('/search', 'ExclusiveController@search')->name('search');
Route::resource('/showing', 'ShowingController');
Route::get('/showing-list', 'ShowingController@list')->name('showing.list');

Route::resource('/about', 'AboutController');

Route::resource('/contact', 'ContactController');

Route::resource('/customer', 'CustomerController');
Route::get('/customer-list', 'CustomerController@list')->name('customer.list');

Route::resource('/property', 'PropertyController');
Route::get('/property-list', 'PropertyController@list')->name('property.list');
Route::put('/property-block/{id}', 'PropertyController@block')->name('property.block');
Route::put('/property-showing/{id}', 'PropertyController@showing')->name('property.showing');
Route::put('/accept-offer/{id}', 'PropertyController@acceptOffer')->name('property.accept');
Route::put('/reject-offer/{id}', 'PropertyController@rejectOffer')->name('property.reject');

Route::resource('/image', 'ImagePropertyController');

Route::resource('/slideshow', 'SlideshowController');
Route::get('/slideshow-list', 'SlideshowController@list')->name('slideshow.list');

Route::resource('/request', 'RequestController');
Route::get('/request-list', 'RequestController@list')->name('request.list');

Route::resource('/offer', 'OfferController');
Route::get('/offer-list', 'OfferController@offerList')->name('offer.offerList');

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
