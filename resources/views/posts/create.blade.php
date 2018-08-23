@extends ('layouts.app')

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
                    <textarea input id="body" name="body"  class="form-control" required ></textarea>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
    
            </form>
            </div>
        </div>
    </div>
</div>

<?php /* Don't work (VIDEO12 2min56)
 @if (count($error))
 <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
*/?>
@endsection