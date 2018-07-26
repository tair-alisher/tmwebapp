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

Route::get('/gallery', [
    'as' => 'albums',
    'uses' => 'AlbumsController@index'
]);
Route::get('/gallery/{slug}', [
    'as' => 'albums.show',
    'uses' => 'ImagesController@show'
]);

Route::get('/employees', [
    'as' => 'employees',
    'uses' => 'EmployeesController@index'
]);
Route::get('/employees/{slug}', [
    'as' => 'employees.show',
    'uses' => 'Employeescontroller@show'
]);

Route::get('/partners', [
    'as' => 'partners',
    'uses' => 'PartnersController@index'
]);

Route::get('/pages/edu_projects', [
    'as' => 'edu_projects',
    'uses' => 'PagesController@eduProjects'
]);
Route::get('/pages/edu_projects/{slug}', [
    'as' => 'edu_projects.show',
    'uses' => 'PagesController@showEduProject'
]);

Route::get('/pages/discipline_modules', [
    'as' => 'disciplines',
    'uses' => 'PagesController@disciplines'
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