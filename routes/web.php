<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', function(){
   return redirect('/articles');
});
Route::get('/home', 'HomeController@index');

Route::resource('/articles','ArticleController');
Route::resource('/comment','CommentController');