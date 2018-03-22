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

Route::resource('/','ArticleController');
Route::resource('demo', 'DemoController');
Route::resource('article', 'ArticleController');

//阅读数量及当前点赞个数
Route::resource('cache', 'CacheController');