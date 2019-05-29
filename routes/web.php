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
Route::get('/view', 'ProductController@view');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/admin/edit/{id}', [
    'middleware' => 'auth',
    'uses' => 'ProductController@edit'
]);

Route::get('/admin/create', [
    'middleware' => 'auth',
    'uses' => 'ProductController@create'
]);

Route::get('/admin', [
    'middleware' => 'auth',
    'uses' => 'AdminController@index'
]);

Route::get('/profile', 'PageController@profile');