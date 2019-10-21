@extends('layout')

@section('content')

<main>
    
    <div id="wrapper"> 
              <h2>Recently Released</h2>  
          <div class="autoplay"> 

          @foreach($videos as $video)
            <div>
                <a style="color:#fff;" 
                href="/video/{{ $video['video_id'] }}">
                <img src="/images/{{ $video['image'] }}.jpg?>" 
                alt="{{ $video['title'] }}"/>
                <p style="width:192px">{{ $video['title'] }} </p>
                </a> 
            </div>

          @endforeach       
   
    </div>      

    </div>
    </main>

@endsection('content')