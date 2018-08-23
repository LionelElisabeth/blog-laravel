@extends ('layouts.app')

@section ('pageName')
{{$post->title}}
@endsection

@section ('content')
<div class="container">
    <div class="col-sm-offset-1 col-sm-8">     
        <h1> {{$post->title}}</h1>
        {{$post->body}}

        <hr>
        
        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-items">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>
        
        @include('common.errors')

        <div class="card">
            <div class="card-block">

                <form method="POST" action="/posts/{{$post->id}}/comments">
                {{csrf_field()  }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Add Comment</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection