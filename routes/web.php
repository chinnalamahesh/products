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


Route::get('products/add', 'ProductsController@getCreateProducts');
Route::post('products/add', 'ProductsController@postCreateProducts');
Route::get('products', 'ProductsController@getAllProducts');
Route::get('product/{id}', 'ProductsController@getGenerators');
Route::get('products/edit/{id}', 'ProductsController@getEditProducts');
Route::post('products/update', 'ProductsController@updateProduct');
Route::get('products/delete', 'ProductsController@deleteProduct');


Route::post('product/{id}', 'ProductsController@generators');


//checking purpose
Route::get('check', 'ProductsController@getCheck');

Route::get('edit', 'ProductsController@getEdit');


//

Route::get('array', 'ProductsController@getArray');
Route::post('array', 'ProductsController@postArray');
Route::get('values', 'ProductsController@getValues');

Route::get('view', 'ProductsController@view');


Route::get('collection','ProductsController@getCollection');