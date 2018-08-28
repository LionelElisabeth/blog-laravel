@extends ('layouts.app')

@section ('pageName')
    Post editing
@endsection



@section ('content')
<div class="container">
    <div class="col-sm-offset-1 col-sm-8">  
        <div class="panel panel-default">
            <div class="panel-heading">
                Correcting a post
            </div>

            <div class="panel-body">

            <form method="POST" action='/mypost/{{$post->id}}'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value='{{$post->title}}' type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea input rows=10 id="body" name="body"  class="form-control" required >{{$post->body}}</textarea>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>

            </form>
            <form action="{{ url('/posts/delete/'.$post->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" style="float:right">
                        <i class="fa fa-btn fa-trash"></i>Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection