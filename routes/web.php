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