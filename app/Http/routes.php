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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PostsController@index');


Route::resource('bbc', 'PostsController');
Route::get('bbc/category/{id}', 'PostsController@showCategory');
Route::resource('comment', 'CommentsController',['only' => ['store']]);