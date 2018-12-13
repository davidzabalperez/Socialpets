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

Route::get('/', 'SocialPetsController@getIndex');
Route::post('/contact', 'SocialPetsController@store');
Route::post('/UserPanel', 'SocialPetsController@getUserPanel');
Route::get('/AdminPanel', 'SocialPetsController@getAdminPanel');
Route::get('/admin', 'SocialPetsController@getAdminIndex');
Route::get('/user', 'SocialPetsController@getUserIndex');
Route::get('/noticia', 'SocialPetsController@getNoticia');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
