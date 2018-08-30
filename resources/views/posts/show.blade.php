@extends ('layouts.app')

@section ('pageName')
    {{$post->title}}
@endsection


@section ('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-8">   

            <h1>  {{$post->title}} </h1>

            {{$post->body}}

            <br><br>

            <p class="blog-post-meta">
                by <strong>{{$post->user->name}} </strong> the {{  $post-> created_at->toFormattedDateString() }}
            </p>

            <hr>

            <div class="comments">
                <ul class="list-group">
                    
                    @foreach ($post->comments as $comment)
                        <li class="list-group-item">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }}: &nbsp;
                            </strong>
                            <font color="#6d4c41"> by &nbsp;{{$comment->user->name}} </font> &nbsp;&nbsp;
                            {{$comment->body}}
                        </li>
                    @endforeach

                    @if (count($post->comments) == 0)
                        <li class="list-group-item">
                            <p class="text-info">Be the first to add a comment!</p>
                        </li>
                    @endif

                </ul>
            </div>

            @if (auth()->id() != null) 
                <div class="card">
                    <div class="card-block">

                        <form method="POST" action="/posts/{{$post->id}}/comments">
                        {{csrf_field()  }}

                            <div class="form-group">
                                <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>

                        </form>

                    </div>   
                </div>

            @else
                <div>
                    <a href="/register">
                        <button type="button" class="btn btn-default">Register to add a comment.</button>
                    </a>  
                </div>
            @endif
            
        </div>
    </div>
@endsection