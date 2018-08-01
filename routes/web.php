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

/* ********** admin routes ********** */

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

Route::get('/admin/users', [
    'as' => 'admin.users',
    'uses' => 'AppController@users'
]);
Route::get('/admin/users/edit/{id}', [
    'as' => 'admin.users.edit_form',
    'uses' => 'AppController@editUserForm'
]);
Route::post('/admin/users/edit/{id}', [
    'as' => 'admin.users.edit',
    'uses' => 'AppController@editUser'
]);

Route::get('/admin/users/{id}/change_password', [
    'as' => 'admin.users.change_password_form',
    'uses' => 'AppController@changePasswordForm'
]);
Route::post('/admin/users/{id}/change_password', [
    'as' => 'admin.users.change_password',
    'uses' => 'AppController@changePassword'
]);

Route::get('/admin/users/{id}/delete', [
    'as' => 'admin.users.delete',
    'uses' => 'AppController@deleteUser'
]);

Route::get('/admin/pages/{slug}/edit', [
    'as' => 'admin.pages.edit_form',
    'uses' => 'PagesController@editForm'
]);
Route::post('/admin/pages/{slug}/edit', [
    'as' => 'admin.pages.edit',
    'uses' => 'PagesController@edit'
]);

Route::get('/admin/posts/{locale}', [
    'as' => 'admin.posts',
    'uses' => 'PostsController@posts'
]);

Route::get('/admin/posts/{slug}/edit', [
    'as' => 'admin.posts.edit_form',
    'uses' => 'PostsController@editForm'
]);
Route::post('/admin/posts/{slug}/edit', [
    'as' => 'admin.posts.edit',
    'uses' => 'PostsController@edit'
]);

Route::get('/admin/posts/create/{locale}/{post_id}', [
    'as' => 'admin.posts.create_form',
    'uses' => 'PostsController@createForm'
]);
Route::post('/admin/posts/create/{locale}/{post_id}', [
    'as' => 'admin.posts.create',
    'uses' => 'PostsController@create'
]);

Route::get('/admin/posts/edit/{id}', [
    'as' => 'admin.posts.general_edit_form',
    'uses' => 'PostsController@generalEditForm'
]);
Route::post('/admin/posts/edit/{id}', [
    'as' => 'admin.posts.general_edit',
    'uses' => 'PostsController@generalEdit'
]);

Route::get('/admin/posts/{id}/delete', [
    'as' => 'admin.posts.delete',
    'uses' => 'PostsController@delete'
]);

Route::get('/admin/posts/create/{locale}', [
    'as' => 'admin.posts.add_post_form',
    'uses' => 'PostsController@addPostForm'
]);
Route::post('/admin/posts/create/{locale}', [
    'as' => 'admin.posts.add_post',
    'uses' => 'PostsController@addPost'
]);