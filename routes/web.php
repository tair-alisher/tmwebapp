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


Route::get('/admin/register', [
    'as' => 'admin.register',
    'uses' => 'AuthController@register'
]);
Route::post('/admin/register', [
    'as' => 'admin.register.check',
    'uses' => 'AuthController@registerUser'
]);

Route::get('/admin/login', [
    'as' => 'admin.login',
    'uses' => 'AuthController@login'
]);
Route::post('/admin/login', [
    'as' => 'admin.login.check',
    'uses' => 'AuthController@loginUser'
]);

Route::get('/admin/logout', [
    'as' => 'admin.logout',
    'uses' => 'AuthController@logout'
]);

Route::get('/admin', [
    'as' => 'admin.home',
    'uses' => 'AppController@index'
]);