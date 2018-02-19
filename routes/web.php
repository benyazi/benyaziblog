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
Route::get('/career', 'HomeController@career')->name('career');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/p/{slug}', 'PostController@view')->name('post.item');
Route::get('/t/{tag}', 'PostController@tag')->name('post.bytag');
