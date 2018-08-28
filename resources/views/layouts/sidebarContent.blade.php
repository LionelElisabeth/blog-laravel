    <div class="sidenav">
        <a href="/posts/create">Create a post &nbsp</a>  
    
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
    </div>