<div class="blog-post">

    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
        {{$post->title}}</a>
    </h2>
    
    <p class="blog-post-meta">
    by {{$post->user->name}}
    {{  $post-> created_at->toFormattedDateString() }}
    </p>
    {{$post-> body}}
    
    <br>
    <br>
    @if (!count($post->comments) == 0)
    
            <strong>Comments :</strong>

            <?php $counter=1;
            $colors="yellow-text";
            $seeCommentsButton=true; ?>

            @foreach($post->comments as $comment)
                
                @if ($counter <= 3)
                    <br>
                    &nbsp
                    <?php
                    
                    switch($counter){
                        case 1 : 
                            $colors="#9e9e9e";
                            break;
                        case 2 : 
                            $colors="#bdbdbd";
                            break;
                        case 3 : 
                            $colors="#e0e0e0";
                            break;
                        
                        case 4 :
                            $seeCommentsButton=false;
                            break;  
                    }

                    $counter++;
                    ?>

                    &nbsp
                    
                    <font color="$colors">{{$comment->body}}</font>

                @endif
            @endforeach

            @if ($seeCommentsButton)
                <div>
                    <a href="/posts/{{$post->id}}">
                        <button type="button" class="btn btn-default">See all the comment.</button>
                    </a>  
                </div>
            @endif
    @endif

</div> 