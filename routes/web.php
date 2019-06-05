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


Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/profile', 'PageController@profile');



// Create

Route::get('/admin/create', 'ProductController@create')->middleware('auth', 'checklvl');
Route::post('/admin/create', 'ProductController@PostCreate')->middleware('auth', 'checklvl');

// Edit

Route::get('/admin/edit/{id}', 'ProductController@edit')->middleware('auth', 'checklvl');
Route::post('/admin/edit/{id}', 'ProductController@PostEdit')->middleware('auth', 'checklvl');

// Delete

Route::get('/admin/delete/{id}', 'ProductController@delete')->middleware('auth', 'checklvl');
