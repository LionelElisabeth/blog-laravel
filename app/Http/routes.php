<?php
use App\Task;
use Illuminate\Http\Request;


Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function(){
    return redirect('/login');
    });

        ////////////////////////////////////////////////// POSTS
    
    Route::get('/posts', 'PostsController@index');
    
    Route::get('/posts/create', 'PostsController@create'); 
    
    Route::get('/posts/{post}', 'PostsController@show'); 
    
    Route::post('/posts','PostsController@store');

    Route::get('/mypost', 'PostsController@mypost');
    
    Route::get('/posts/{post}/edit', 'PostsController@edit');

    Route::patch('/mypost/{post}','PostsController@update');

    Route::delete('/posts/delete/{post}','PostsController@delete');
    
    Route::post('/posts/{post}/comments','CommentsController@store');
    
    
    Route::get('/test', function(){
        return view('test');
    });
});
