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
Route::resource('category', 'CategoryController');
Route::resource('demo', 'DemoController');
Route::resource('article', 'ArticleController');
Route::resource('article/tag', 'TagController');
Route::get('article/{article}/{slug?}', 'ArticleController@show')->name('article.show');

//阅读数量及当前点赞个数
Route::resource('cache', 'CacheController');

//测试已结算账单显示：订单号、结算人、结算金额、结算时间、结算去向（代理商）
Route::resource('search', 'SearchController');
//每日资讯
Route::resource('journalism', 'JournalismController');
Route::get('/load', 'JournalismController@Load');
Route::resource('/about', 'AboutController');