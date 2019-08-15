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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/users/{slug}', 'User\UserController@show');

Route::resource('avatar', 'User\AvatarController')->only([
    'store', 'destroy'
]);

Route::resource('posts', 'PostController')->parameters(['posts' => 'slug']);

Route::get('/posts/tags/{slug}', 'TagController@index');

Route::get('/posts/categories/{slug}', 'CategoryController@index');
