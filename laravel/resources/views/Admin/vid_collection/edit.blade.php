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

    <h2>Edit a new record</h2>
    <div id="wrapper">
    <form action="/admin/vid_collection/{{$vid->video_id}}" method="POST">
      @csrf()
      @method('PUT')
    <div class="form-group">
      <input type="text" class="form-control" id="video_id" name="video_id" value="{{$vid->video_id}}" hidden>
    </div>

    <div class="form-group">
      <label for="title">TITLE</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old( 'title ',$vid->title) }}" >
    </div>

    <div class="form-group">
      <label for="video_type">VIDEO TYPE</label>
      <select class="form-control" id="video_type"  name="video_type">
          @if ($vid->video_type == 'TVSHOW'): ?>
            <option value="MOVIES">MOVIES</option> 
            <option value="TVSHOW" selected="selected">TV SHOW</option> 
          @elseif($vid->video_type == 'MOVIES')
            <option value="MOVIES" selected="selected">MOVIES</option> 
            <option value="TVSHOW" >TVSHOW</option> 
          @endif
      </select>
    </div>

    <div class="form-group">
      <label for="language">LANGUAGE</label>
      <select class="form-control" id="language" name="language">

        @foreach($language_list as $item)
        @if(strtolower($item) == $vid->language)
            <option value=" {{ $item }}" selected ="selected">{{$item}} </option>
          @else
            <option value="{{ $item }} ">{{  $item }}</option>        
        @endif
        @endforeach

      </select>
    </div>

    <div class="form-group">
      <label for="rating">RATING</label>
      <input type="text" class="form-control" id="rating" name="rating" value="{{ old( 'rating ',$vid->rating) }}" >
    </div>

    <div class="form-group">
      <label for="synopsis">SYNOPSIS</label>
      <textarea class="form-control" id="synopsis" name="synopsis" rows="3">{{ old( 'synopsis ',$vid->synopsis) }}</textarea>
    </div>

    <div class="form-group">
      <label for="plot">DESCRIPTION</label>
      <textarea class="form-control" id="plot" name="plot" rows="3">{{ old( 'plot ',$vid->plot) }}</textarea>
    </div>

    <?php if ($vid['video_type'] == 'TVSHOW'): ?>
    <div class="form-group">
      <label for="num_of_season">NUMBER OF SEASONS</label>
      <input type="text" class="form-control" id="num_of_season" name="num_of_season" value="{{ old( 'num_of_season ',$vid->num_of_season) }}" >
    </div>
    <?php endif ?>
    
    <div class="form-group">
      <label for="release_date">RELEASE DATE</label>
      <input type="text" class="form-control" id="release_date" name="release_date" value="{{ old( 'release_date ',$vid->release_date) }}">
    </div>

    <div class="form-group">
      <label for="image">IMAGE (NAME OF FILE)</label>
      <input type="text" class="form-control" id="image" name="image" value="{{ old( 'image ',$vid->image) }}">
    </div>

    <div class="form-group">
      <label for="length">LENGTH IN MINUTES</label>
      <input type="text" class="form-control" id="length" name="length" value="{{ old( 'length ',$vid->length) }}">
    </div>

    <div class="form-group">
      <label for="director">DIRECTOR</label>
      <input type="text" class="form-control" id="director" name="director" value="{{ old( 'director ',$vid->director) }}">
    </div>

    <div class="form-group">
      <button style=" background:#e50914" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </div>

  </form>

  </div>

@endsection('content')
