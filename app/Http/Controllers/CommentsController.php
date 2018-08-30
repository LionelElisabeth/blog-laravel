<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class commentsController extends Controller
{
    public function store (Post $post)
    {
        $this->validate(request(), ['body'=>'required|min:2']);
        /*
        $post->addComment(Request('body'));
        */
        $comment = new Comment;
        $comment->body = request('body');
        $comment->post_id = $post->id;
        $comment->user_id = auth()->id();
        $comment->save();

        session()->flash('message','Your comment has now been published');

        return back(); 
    }
}
