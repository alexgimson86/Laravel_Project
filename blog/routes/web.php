<?php

//Route::get ('/tasks', 'TasksController@index');
Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/login', 'UserController@logIn');