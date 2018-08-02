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
    'uses' => 'ProjectsController@eduProjects'
]);
Route::get('/pages/edu_projects/{slug}', [
    'as' => 'edu_projects.show',
    'uses' => 'ProjectsController@showEduProject'
]);

Route::get('/pages/discipline_modules', [
    'as' => 'disciplines',
    'uses' => 'DisciplinesController@disciplines'
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

/* ********** admin pages ********** */

Route::get('/admin/pages/{slug}/edit', [
    'as' => 'admin.pages.edit_form',
    'uses' => 'PagesController@editForm'
]);
Route::post('/admin/pages/{slug}/edit', [
    'as' => 'admin.pages.edit',
    'uses' => 'PagesController@edit'
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
    'uses' => 'ProjectsController@allProjects'
]);

Route::get('/admin/projects/{slug}/edit', [
    'as' => 'admin.projects.edit_translation_form',
    'uses' => 'ProjectsController@editProjectTranslationForm'
]);
Route::post('/admin/projects/{slug}/edit', [
    'as' => 'admin.projects.edit_translation',
    'uses' => 'ProjectsController@editProjectTranslation'
]);

Route::get('/admin/projects/create/{locale}/{project_id}', [
    'as' => 'admin.projects.create_translation_form',
    'uses' => 'ProjectsController@createProjectTranslationForm'
]);
Route::post('/admin/projects/create/{locale}/{project_id}', [
    'as' => 'admin.projects.create_translation',
    'uses' => 'ProjectsController@createProjectTranslation'
]);

Route::get('/admin/projects/edit/{id}', [
    'as' => 'admin.projects.edit_form',
    'uses' => 'ProjectsController@editProjectForm'
]);
Route::post('/admin/projects/edit/{id}', [
    'as' => 'admin.projects.edit',
    'uses' => 'ProjectsController@editProject'
]);

Route::get('/admin/projects/create/{locale}', [
    'as' => 'admin.projects.create_form',
    'uses' => 'ProjectsController@createProjectForm'
]);
Route::post('/admin/projects/create/{locale}', [
    'as' => 'admin.projects.create',
    'uses' => 'ProjectsController@createProject'
]);

Route::get('/admin/projects/{id}/delete', [
    'as' => 'admin.projects.delete',
    'uses' => 'ProjectsController@deleteProject'
]);

/* ********** admin disciplines ********** */

Route::get('/admin/disciplines/{locale}', [
    'as' => 'admin.disciplines',
    'uses' => 'PagesController@allDisciplines'
]);