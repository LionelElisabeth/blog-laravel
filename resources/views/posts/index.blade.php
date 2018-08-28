

@extends ('layouts.app')

@section ('pageName')
    Post list
@endsection


@section ('content')
      
@include('layouts.sidebarContent')
                 
<div class="container">
    <div class="col-sm-offset-1 col-sm-8">            
        @foreach($posts as $post)
            @include('posts.post')
            <hr>
            <br><br>

        @endforeach
    </div>
</div>
@endsection