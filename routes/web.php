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

//Route::get('/cart/{id}','CartController@index');

Route::get('/cart/{id}', ["uses" => 'CartController@index']);
Route::get('/cart/add/{id}', ["uses" => 'CartController@add']);
Route::get('/cart/delete/{id}', ["uses" => 'CartController@delete']);
Route::get('/cart/minus/{id}', ["uses" => 'CartController@minus']);
Route::get('/cart/plus/{id}', ["uses" => 'CartController@plus']);

Route::get('/checkout/{id}', ["uses" => 'CheckoutController@index']);
Route::get('/checkout/delete/{id}', ["uses" => 'CheckoutController@index']);

Route::get('/home', 'HomeController@index')->name('home');
