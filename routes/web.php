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


Route::get('/', 'ArticleController@homes');//首页
Route::resource('demo', 'DemoController');
Route::get('home', 'ArticleController@homes');//首页
Route::get('update_click', 'ArticleController@update_click');//首页
Route::resource('article', 'ArticleController');//首页