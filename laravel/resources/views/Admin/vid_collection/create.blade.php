@extends('admin.admin_layout')

@section('style')
   <style>
    
    body{
      background: none;
    }  

    #wrapper{

        color: #000;
        width: 100%;
        margin: 0 auto; /* to centers the div */
        margin-top:40px;
    }

       #landing_logo{
      height:45px;
      margin-left: 10px;
      margin-top: 15px;
    }


    .errors{
         background: #141414;
    color: #f00;
    font-weight: 700;
    padding: 10px;
    margin: 1px auto;
    border: 3px solid #000;
    position: relative;
    z-index: 1; }

    #container{
      padding: 20px;
    }

    label{
      font-weight: 500;
    }

    h1{
      font-family: Tahoma, sans-serif;
      color: #000;
    }
     
    a{
       color: #000;
    }
     
  </style>

@endsection('style')

@section('content')

    @include('partials.errors')

    <h2>Add a new video</h2>
    <div id="wrapper">
    <form action="/admin/vid_collection" method="POST">
      @csrf()

    <div class="form-group">
      <label for="title">TITLE</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old( 'title ') }}" >
    </div>

    <div class="form-group">
      <label for="video_type">VIDEO TYPE</label>
      <select class="form-control" id="video_type"  name="video_type">
            <option value="MOVIES">MOVIES</option> 
            <option value="TVSHOW" selected="selected">TV SHOW</option> 
      </select>
    </div>

    <div class="form-group">
      <label for="language">LANGUAGE</label>
      <select class="form-control" id="language" name="language">

        @foreach($language_list as $item)
            <option value=" {{ $item }}">{{$item}} </option>
        @endforeach

      </select>
    </div>

    <div class="form-group">
      <label for="rating">RATING</label>
      <input type="text" class="form-control" id="rating" name="rating" value="{{ old( 'rating ') }}" >
    </div>

    <div class="form-group">
      <label for="synopsis">SYNOPSIS</label>
      <textarea class="form-control" id="synopsis" name="synopsis" rows="3">{{ old( 'synopsis ') }}</textarea>
    </div>

    <div class="form-group">
      <label for="plot">DESCRIPTION</label>
      <textarea class="form-control" id="plot" name="plot" rows="3">{{ old( 'plot ') }}</textarea>
    </div>

    <div class="form-group">
      <label for="num_of_season">NUMBER OF SEASONS</label>
      <input type="text" class="form-control" id="num_of_season" name="num_of_season" value="{{ old( 'num_of_season ') }}" >
    </div>
    
    <div class="form-group">
      <label for="release_date">RELEASE DATE</label>
      <input type="text" class="form-control" id="release_date" name="release_date" value="{{ old( 'release_date ') }}">
    </div>

    <div class="form-group">
      <label for="image">IMAGE (NAME OF FILE)</label>
      <input type="text" class="form-control" id="image" name="image" value="{{ old( 'image ') }}">
    </div>

    <div class="form-group">
      <label for="length">LENGTH IN MINUTES</label>
      <input type="text" class="form-control" id="length" name="length" value="{{ old( 'length ') }}">
    </div>

    <div class="form-group">
      <label for="director">DIRECTOR</label>
      <input type="text" class="form-control" id="director" name="director" value="{{ old( 'director ') }}">
    </div>

    <div class="form-group">
      <button style=" background:#e50914" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </div>

  </form>

  </div>

@endsection('content')
