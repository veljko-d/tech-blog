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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::redirect('/', '/home');

Route::get('/users/{slug}', 'User\UserController@show');

Route::resource('posts', 'PostController')->parameters(['posts' => 'slug']);

Route::get('/posts/tags/{slug}', 'TagController@index');

Route::get('/posts/categories/{slug}', 'CategoryController@index');
