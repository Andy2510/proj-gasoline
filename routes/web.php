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
Route::get('/', 'HomeController@showWelcome');

Route::get('gasolines/{city_id?}', 'SearchController@getSearch');
Route::get('gasoline/{title}', 'GasolineController@getGasoline');
Route::get('about', 'AboutController@showIndex');
Route::get('contacts', 'ContactController@showIndex');

Route::group(array('before' => 'auth'), function() {
	Route::resource('admin/gasolines', 'AdminGasolinesController');
	Route::resource('admin/cities', 'AdminCitiesController');
	Route::resource('admin/gasoline_types', 'AdminTypesController');
});