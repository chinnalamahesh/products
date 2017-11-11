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


Route::get('create-products', 'ProductsController@getCreateProducts');
Route::post('create-products', 'ProductsController@postCreateProducts');
Route::get('all-products', 'ProductsController@getAllProducts');
Route::get('product/{id}', 'ProductsController@getGenerators');

Route::post('product/{id}', 'ProductsController@generators');


//checking purpose
Route::get('check', 'ProductsController@getCheck');

Route::get('edit', 'ProductsController@getEdit');
