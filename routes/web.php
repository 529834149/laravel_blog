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
Route::group(['prefix' => 'bodys', 'namespace' => 'bodys'], function(){
    Route::resource('{name?}/cate', 'CategoryController');
});
Route::resource('/','ArticleController');
Route::get('/article/{aid}/details','ArticleController@show');
//Route::resource('category', 'CategoryController');
//Route::resource('demo', 'DemoController');
//Route::resource('article', 'ArticleController');
//Route::resource('article/tag', 'TagController');
//Route::get('article/{article}/{slug?}', 'ArticleController@show')->name('article.show');
//
////阅读数量及当前点赞个数
//Route::resource('cache', 'CacheController');
//
////测试已结算账单显示：订单号、结算人、结算金额、结算时间、结算去向（代理商）
//Route::resource('search', 'SearchController');
////每日资讯
//Route::resource('journalism', 'JournalismController');
//Route::get('/load', 'JournalismController@Load');
//Route::resource('/about', 'AboutController');
////功能案例精品
//Route::resource('/boutique', 'RebilityController');
////归档文件
//
//
////专栏开发
//Route::get('/documents/details', 'SpecialController@info');
//Route::resource('/documents', 'DocumentsController');
//Route::get('/article_deal', 'SpecialController@details');
//Route::get('/article_click', 'SpecialController@click');
//Route::post('/article_common', 'SpecialController@insertInfo');
//Route::resource('/settings','SettingsController');
////Route::resource('/documents', 'DocumentsController');