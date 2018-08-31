    <div class="sidenav">
        <a href="/posts/create">Create a post &nbsp</a>  

        <?php $url = asset('img/boitata_v3.gif')?>
        <img src="{{$url}}" style="width:150px">
        <hr> 


        <h4>&nbsp&nbsp&nbsp Archives</h4>
        <ol class="list-unstyled">
                
            @foreach ($archives as $periode)
                <li>
                    <h6>
                        <a href="/posts/?date={{$periode['year']}}-{{$periode['month']}}-{{$periode['day']}}">
                            {{$periode['day'].'/'.$periode['month'].'/'.$periode['year']}}
                        </a> 
                    </h6>
                </li>
            @endforeach
        </ol>

        <a href="/posts/">
            Every post 
        </a>  
    </div>