@extends ('layouts.app')

@section ('pageName')
    My posts
@endsection


@section ('content')

    <div class="container">
        <div class="col-sm-offset-1 col-sm-8"> 
            <a class="navbar-brand" href="{{ url('/posts/create')  }}"> Create a post</a>

            <br><br>
            <hr>
            
            @foreach ($userPosts as $post)
                
                @if (auth()->id() == $post->user_id)
                    <a href="/posts/{{ $post->id }}/edit"> {{$post->title}}</a>
                    <br><br>
                @endif
            
            @endforeach  
            <?php
            $numberPosts = DB::table('posts')
                             ->select(DB::raw('count(*)'))
                             ->where('user_id', auth()->id())
                             ->groupBy('id')
                             ->get();
            ?>

            @if (count($numberPosts) == 0)

                <h1>You still haven't made a post.</h1>

            @endif
            
        </div>
    </div> 
@endsection