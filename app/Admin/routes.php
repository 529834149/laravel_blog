<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {
    $router->resource('category_list','CategoriesController'); 
    $router->resource('article_list','ArticleController'); 
    $router->resource('media','MediaController'); 
    $router->resource('case_list','CaseListController'); 
    
    //专栏分类功能
    $router->resource('menu','MenuController'); 
    $router->resource('menu_special','SpecialController'); //在专栏哪个分类下的的专栏
    $router->get('zhuanlan','SpecialController@info');//内容搜索大咖
    $router->resource('menu_special_article','Menu_special_articleController'); //文章在哪个分类下的专栏
     $router->get('zhuanlan_special','Menu_special_articleController@info');//内容搜索大咖
});
