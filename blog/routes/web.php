<?php



Route::post('/', 'UserController@submit');

Route::get('/posts/login', 'UserController@login');

Route::post('/posts/register', 'UserController@register');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/', 'PostController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');
