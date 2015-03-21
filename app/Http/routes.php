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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::resource('poems', 'PoemController');

Route::resource('stories', 'StoryController');

Route::post('/poem/comment', 'CommentPoemController@store');

Route::post('/story/comment', 'CommentStoryController@store');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/poem/comment/{id}', 'AdminCommentController@deletePoemComment');
    Route::get('/admin/story/comment/{id}', 'AdminCommentController@deleteStoryComment');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
