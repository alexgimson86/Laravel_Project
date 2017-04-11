<?php

//Route::get ('/tasks', 'TasksController@index');

Route::get ('/posts/create', 'PostController@create');

Route::get('/', 'PostController@index');