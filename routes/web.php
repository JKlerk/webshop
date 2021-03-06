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

Route::get('/', 'PageController@index');
Route::get('/view/{id}', 'ProductController@view');
Route::get('/image/{id}', 'ImageController@getImage');
Route::get('/profile', 'PageController@profile');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/admin', 'PageController@admin')->middleware('auth', 'checklvl');

// Create Product
Route::get('/admin/create', 'ProductController@create')->middleware('auth', 'checklvl');
Route::post('/admin/create', 'ProductController@PostCreate')->middleware('auth', 'checklvl');

// Edit Product
Route::get('/admin/edit/{id}', 'ProductController@edit')->middleware('auth', 'checklvl');
Route::post('/admin/edit/{id}', 'ProductController@PostEdit')->middleware('auth', 'checklvl');

// Create Category
Route::get('/admin/create/category', 'CategoryController@create')->middleware('auth', 'checklvl');
Route::post('/admin/create/category', 'CategoryController@PostCreate')->middleware('auth', 'checklvl');

// Edit Category
Route::get('/admin/edit/category/{id}', 'CategoryController@edit')->middleware('auth', 'checklvl');
Route::post('/admin/edit/category/{id}', 'CategoryController@PostEdit')->middleware('auth', 'checklvl');

// Delete
Route::get('/admin/delete/{id}', 'ProductController@delete')->middleware('auth', 'checklvl');
Route::get('/admin/delete/category/{id}', 'CategoryController@delete')->middleware('auth', 'checklvl');

// Shoppingcart
Route::get('/shoppingcart', 'CartController@index')->middleware('auth');
Route::post('/shoppingcart/add/{id}', 'CartController@addCart')->middleware('auth');
Route::post('/shoppingcart/update/{id}', 'CartController@updateCart')->middleware('auth');
Route::get('/shoppingcart/remove/{id}', 'CartController@removeCart')->middleware('auth');

Route::get('/shoppingcart/pay', 'CartController@pay')->middleware('auth');

Route::get('/shoppingcart/order', 'OrderController@index')->middleware('auth');