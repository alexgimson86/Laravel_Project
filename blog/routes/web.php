<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $tasks = DB::table('tasks')->latest()->get();

    return view('welcome', compact('tasks'));
});

Route::tasks('/tasks/{id}', function($id){
    $tasks = DB::table('tasks')->latest($id)->get();

    return view('task' {$id} );
});