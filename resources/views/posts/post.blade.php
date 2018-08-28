<div class="blog-post">

    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
        {{$post->title}}</a>
    </h2>
    
    <p class="blog-post-meta">
    <p class="text-muted"> by {{$post->user->name}}
    {{  $post-> created_at->toFormattedDateString() }}</p>
    </p>
    {{$post-> body}}
    
    <br>
    <br>
    @if (!count($post->comments) == 0)
    
            <strong>Comments :</strong>

            <?php $counter=1;
            $colors="yellow-text";
            $seeCommentsButton=false; ?>

            @foreach($post->comments as $comment)
                
                @if ($counter <= 3)
                    <br>
                    &nbsp
                    <?php
                    
                    switch($counter){
                        case 1 : 
                            $colors="#616161";
                            break;
                        case 2 : 
                            $colors="#757575";
                            break;
                        case 3 : 
                            $colors="#9e9e9e";
                            break;
                        
                        case 4 :
                            $seeCommentsButton=true;
                            break;  
                    }


                    $counter++;
                    ?>

                    &nbsp
                    
                    <font color="{{ $colors }}">{{$comment->body}}</font>

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