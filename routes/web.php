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
//Route::resource('demo', 'DemoController');
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
Route::resource('readability ', 'ReadabilityController');//文章抓取
Route::post('readability_success ', 'ReadabilityController@index');//文章抓取
Route::any('webchat', 'EasyChatController@wx');//用户支付信息
Route::any('info', 'EasyChatController@wxtest');//用户支付信息
//归档文件 请求路由
Route::get('file_information', 'ArticleController@index');//讨论
Route::resource('file_infomation/list', 'InfomationController');//文章抓取

//每日采集
Route::get('readbility_list', 'ReadabilityController@read_list');//每日采集
Route::get('readbility_list/{id}', 'ReadabilityController@show');//每日采集
Route::get('read_num', 'ReadabilityController@read_num');//每日采集

//自媒体
Route::resource('media', 'MediaController');//文章抓取