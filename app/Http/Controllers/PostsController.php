<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        //$posts = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {   

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
/*
        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');

        $post->save();
*/
        Post::create([
            'title' => request('title','required'),
            'body' => request('body', 'required')
        ]);

        return redirect('/posts/create');
    }
}
