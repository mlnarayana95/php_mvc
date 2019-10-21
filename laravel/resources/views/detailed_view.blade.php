@extends('layout')


@section('style')

	<style>
		#add_list{
			display: none;
		}

		body{

			background: #141414;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.45);
		}
	
		#container{		
		}

		.box{
			color: #fff;
			font-family: Arial,sans-serif;
			background-color: rgba(40, 40,40, 0.3);
			padding: 20px;
			margin-bottom: 45px;
		}

		ul{
			padding: 2px;
		}



		select{
			display: block;
			padding: 2px;
			font-size: 1rem;
			font-weight: 400;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			border-radius: .25rem;
		}

		#list_name{
		    display: block;
			padding: 2px;
			font-size: 1rem;
			font-weight: 400;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			border-radius: .25rem;
		}

		.btn {
    border-radius: 6px;
    background: #c32625;
    color: #fff;
    font-weight: bold;
    border: 1px solid #5f5353;
    width: 116px;
    padding: 5px;
    word-wrap: break-word;
    height: 43px;
    margin-left: 1px;
}

		footer{
			bottom: 0;
			position: fixed;
		}

		a{
			color:#c32625;
		}

	</style>
@endsection('style')

@section('content')	
	<div id="wrapper">
			<div class="box">
				<div>
		  			<h1 style="display: inline;">{{ $heading }}</h1>
		  			<p style="color:#da2c2b;font-weight:bold;display: inline;
		  			    padding: 15px"><strong>({{ $video['rating']}} / 10)
		  			    </strong></p>
			        <p>( {{ $video['video_type'] }} )</p>
		   			<a href="#">
			  			<img src="/images/{{ $video->image}}.jpg " 
			  			alt="{{ $video['title'] }}"/>
		  			</a> 
			  	<ul style="">
					<li style="display:block;padding:0px "><strong>Language:</strong> {{ $video['language'] }}</li>
					<li style="display:block;padding:0px "><strong>Synopsis:</strong> {{ $video['synopsis'] }} </li>
					<li style="display:block;padding:0px"><strong>Plot:</strong> {{ $video['plot'] }}</li>
					<li style="display:block;padding:0px"><strong>Length:</strong> {{ $video['length'] }} mins</li>
					<li style="display:block;padding:0px"><strong>Director:</strong> {{ $video['director'] }} </li>
					@if($video['video_type'] == 'TVSHOW')
					<li  style="display:block;padding:0px"><strong>Number of Seasons:</strong> {{ $video['num_of_season'] }} </li>				
					@endif
			  	</ul>
			
			</div>

		</div>	
</div>
	<div style="bottom:100px;position:fixed;padding: 10px">
		
	</div>
	@endsection('content')