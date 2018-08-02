<?php

Route::get('lang/{language}', [
    'as' => 'lang.switch',
    'uses' => 'LanguagesController@switchLang'
]);

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@index'
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

/* ********** disciplines ********** */

Route::get('/pages/discipline_modules', [
    'as' => 'disciplines',
    'uses' => 'DisciplinesController@index'
]);

/* ********** projects ********** */

Route::get('/pages/edu_projects', [
    'as' => 'edu_projects',
    'uses' => 'ProjectsController@index'
]);
Route::get('/pages/edu_projects/{slug}', [
    'as' => 'edu_projects.show',
    'uses' => 'ProjectsController@show'
]);

/* ********** admin auth/register ********** */

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

/* ********** admin users ********** */

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

/* ********** pages ********** */

Route::get('/pages/{slug}', [
    'as' => 'pages.show',
    'uses' => 'PagesController@show'
]);

/* ********** admin pages ********** */

Route::get('/admin/pages/{slug}/edit', [
    'as' => 'admin.pages.edit_form',
    'uses' => 'PagesController@editForm'
]);
Route::post('/admin/pages/{slug}/edit', [
    'as' => 'admin.pages.edit',
    'uses' => 'PagesController@edit'
]);

/* ********** posts ********** */

Route::get('/posts', [
    'as' => 'posts',
    'uses' => 'PostsController@index'
]);
Route::get('/posts/{slug}', [
    'as' => 'posts.show',
    'uses' => 'PostsController@show'
]);

/* ********** admin posts ********** */

Route::get('/admin/posts/{locale}', [
    'as' => 'admin.posts',
    'uses' => 'PostsController@posts'
]);

Route::get('/admin/posts/{slug}/edit', [
    'as' => 'admin.posts.edit_translation_form',
    'uses' => 'PostsController@editTranslationForm'
]);
Route::post('/admin/posts/{slug}/edit', [
    'as' => 'admin.posts.edit_translation',
    'uses' => 'PostsController@editTranslation'
]);

Route::get('/admin/posts/create/{locale}/{post_id}', [
    'as' => 'admin.posts.create_translation_form',
    'uses' => 'PostsController@createTranslationForm'
]);
Route::post('/admin/posts/create/{locale}/{post_id}', [
    'as' => 'admin.posts.create_translation',
    'uses' => 'PostsController@createTranslation'
]);

Route::get('/admin/posts/edit/{id}', [
    'as' => 'admin.posts.edit_form',
    'uses' => 'PostsController@editForm'
]);
Route::post('/admin/posts/edit/{id}', [
    'as' => 'admin.posts.edit',
    'uses' => 'PostsController@edit'
]);

Route::get('/admin/posts/create/{locale}', [
    'as' => 'admin.posts.create_form',
    'uses' => 'PostsController@createForm'
]);
Route::post('/admin/posts/create/{locale}', [
    'as' => 'admin.posts.create',
    'uses' => 'PostsController@create'
]);

Route::get('/admin/posts/{id}/delete', [
    'as' => 'admin.posts.delete',
    'uses' => 'PostsController@delete'
]);

/* ********** admin projects ********** */

Route::get('/admin/projects/{locale}', [
    'as' => 'admin.projects',
    'uses' => 'ProjectsController@projects'
]);

Route::get('/admin/projects/{slug}/edit', [
    'as' => 'admin.projects.edit_translation_form',
    'uses' => 'ProjectsController@editTranslationForm'
]);
Route::post('/admin/projects/{slug}/edit', [
    'as' => 'admin.projects.edit_translation',
    'uses' => 'ProjectsController@editTranslation'
]);

Route::get('/admin/projects/create/{locale}/{project_id}', [
    'as' => 'admin.projects.create_translation_form',
    'uses' => 'ProjectsController@createTranslationForm'
]);
Route::post('/admin/projects/create/{locale}/{project_id}', [
    'as' => 'admin.projects.create_translation',
    'uses' => 'ProjectsController@createTranslation'
]);

Route::get('/admin/projects/edit/{id}', [
    'as' => 'admin.projects.edit_form',
    'uses' => 'ProjectsController@editForm'
]);
Route::post('/admin/projects/edit/{id}', [
    'as' => 'admin.projects.edit',
    'uses' => 'ProjectsController@edit'
]);

Route::get('/admin/projects/create/{locale}', [
    'as' => 'admin.projects.create_form',
    'uses' => 'ProjectsController@createForm'
]);
Route::post('/admin/projects/create/{locale}', [
    'as' => 'admin.projects.create',
    'uses' => 'ProjectsController@create'
]);

Route::get('/admin/projects/{id}/delete', [
    'as' => 'admin.projects.delete',
    'uses' => 'ProjectsController@delete'
]);

/* ********** admin disciplines ********** */

Route::get('/admin/disciplines/{locale}', [
    'as' => 'admin.disciplines',
    'uses' => 'DisciplinesController@disciplines'
]);

Route::get('/admin/disciplines/{file_id}/edit', [
    'as' => 'admin.disciplines.edit_file_form',
    'uses' => 'DisciplinesController@editFileForm'
]);
Route::post('/admin/disciplines/{file_id}/edit', [
    'as' => 'admin.disciplines.edit_file',
    'uses' => 'DisciplinesController@editFile'
]);

Route::get('/admin/disciplines/add_file/{locale}/{discipline_id}', [
    'as' => 'admin.disciplines.add_file_form',
    'uses' => 'DisciplinesController@addFileForm'
]);
Route::post('/admin/disciplines/add_file/{locale}/{discipline_id}', [
    'as' => 'admin.disciplines.add_file',
    'uses' => 'DisciplinesController@addFile'
]);