@extends ('layouts.app')

@section ('pageName')
    Create your post
@endsection


@section ('content')

<div class="container">
    <div class="col-sm-offset-1 col-sm-8">  
        <div class="panel panel-default">

            <div class="panel-heading">
                Creating a post
            </div>

            <div class="panel-body">

            <form method="POST" action='/posts'>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>


                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea input id="body" rows=12 name="body"  class="form-control" required ></textarea>
                </div>


                <button type="submit" class="btn btn-default">Submit</button>
    
            </form>
            </div>
        </div>
    </div>
</div>

<?php ?>
@endsection