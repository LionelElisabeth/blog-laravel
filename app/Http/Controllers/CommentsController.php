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

        $post->addComment(Request('body'));

        return back(); 
    }
}
