<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
    // return view('welcome');
// });

Auth::routes();

Route::get('/', 'PostController@index');
Route::get('/posts/category/{category_name}', 'PostController@index')->name('posts.category');
Route::get('/about', function() {
    return view('about');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/posts', 'PostController@index')->name('post.index');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/{post?}', 'PostController@store')->name('post.store');
    Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::get('/post/{post}/disable', 'PostController@disable')->name('post.disable');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
});
