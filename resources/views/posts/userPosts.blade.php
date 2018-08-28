@extends ('layouts.app')

@section ('pageName')
    My posts
@endsection



@section ('content')

<div class="container">
    <div class="col-sm-offset-1 col-sm-8"> 
    @foreach ($userPosts as $post)
        @if (auth()->id() == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit"> {{$post->title}}</a>
            <br><br>
        @endif
    @endforeach  
    </div>
</div>  
@endsection