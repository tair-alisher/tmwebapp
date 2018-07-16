<?php

Route::get('lang/{language}', [
    'as' => 'lang.switch',
    'uses' => 'LanguagesController@switchLang'
]);

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@index'
]);

Route::get('/news', [
    'as' => 'news',
    'uses' => 'PostsController@index'
]);

Route::get('/gallery', [
    'as' => 'gallery',
    'uses' => 'GalleryController@index'
]);

Route::get('/employees', [
    'as' => 'employees',
    'uses' => 'EmployeesController@index'
]);

Route::get('/partners', [
    'as' => 'partners',
    'uses' => 'PagesController@partners'
]);

Route::get('/news/{slug}', [
    'as' => 'news.show',
    'uses' => 'PostsController@show'
]);

Route::get('/pages/{slug}', [
    'as' => 'pages.show',
    'uses' => 'PagesController@show'
]);

Route::get(
    trans('routes.about'),
    [
        'as' => 'about',
        'uses' => 'PagesController@about'
    ]);