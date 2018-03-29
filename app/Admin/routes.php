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
});
