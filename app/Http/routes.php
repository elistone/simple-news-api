<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('instructions');});

//setup resource route to controllers
Route::resource('category','CategoryController',['except' => ['create','edit']]);
Route::resource('news','NewsController',['only' => ['index','show']]);
Route::resource('category.news','CategoryNewsController',['except' => ['create','edit']]);