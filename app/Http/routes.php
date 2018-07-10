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

Route::get('/', [
    'uses' => 'NavController@home',
    'as' => 'home'
]);

Route::get('/liked', [
    'uses' => 'NavController@liked',
    'as' => 'liked'
]);

Route::get('/disliked', [
    'uses' => 'NavController@disliked',
    'as' => 'disliked'
]);

Route::get('/store', [
    'uses' => 'PostController@createPost',
    'as' => 'store',
]);

Route::post('/like',[
    'uses'=>'LikeController@postLike',
    'as'=>'like',
]);

Route::post('/dislike',[
    'uses'=>'LikeController@postDislike',
    'as'=>'dislike',
]);