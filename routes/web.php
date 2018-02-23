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

/**
 * 为了完善以维护把所有的分类模块都单独分离出来，方s便以后开发新功能不至于牵动过大
 */
Route::resource('phplist', 'PhplistController');//php
Route::resource('discuss', 'DiscussController');//讨论
Route::resource('database_all', 'DatabaseController');//mysql
Route::resource('webdesign', 'WebdesignController');//javascript
Route::resource('informal ', 'InformalController');//随笔