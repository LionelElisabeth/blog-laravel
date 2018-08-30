<div class="blog-post">

    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
        {{$post->title}}</a>
    </h2>
    
    <p class="blog-post-meta">
    <p class="text-muted"> 
        by {{$post->user->name}}
        {{  $post-> created_at->toFormattedDateString() }}
    </p>
    </p>

    <?php 
    $text = $post-> body;
    $end = 450;
    $finalChar = " ";
    if (strlen($post->body)>$end)
    {   
        $finalChar = substr($post->body,$end,1);
  
        while($finalChar != ".")
        {
            $end++;
            $finalChar = substr($post->body,$end,1);
        }

        $text = substr($post->body,0,$end+1);

        if ($end > 450 && $end+1 != strlen($post->body))
        {   $text = $text . " ...";}
    }
    ?>

    {{$text}}

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
                        $colors="#616161";
                        $seeCommentsButton=false;
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

        @if ($seeCommentsButton == true)
            <div>
                <a href="/posts/{{$post->id}}">
                    <button type="button" class="btn btn-default">
                    
                    @if ($counter == 1)
                        Come and make a comment.
                    @else
                        See all the comment.
                    @endif
                    
                    </button>
                </a>  
            </div>
        @endif
    @endif
</div> 