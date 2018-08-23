<?php
use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    //routes here


////////////////////////////////////////////////// POSTS

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create'); 

Route::get('/posts/{post}', 'PostsController@show'); 

Route::post('/posts','PostsController@store');


Route::post('/posts/{post}/comments','CommentsController@store');


Route::get('/test', function(){
    return view('test');
});

});