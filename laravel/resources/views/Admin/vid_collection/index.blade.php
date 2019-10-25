@extends('admin.admin_layout')

@section('style')

   <style>

   
    body{
      background: none;
      padding: 0px;
      margin: 0px;
      -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
      -moz-animation: fadein 2s; /* Firefox < 16 */
      -ms-animation: fadein 2s; /* Internet Explorer */
      -o-animation: fadein 2s; /* Opera < 12.1 */
      animation: fadein 2s;
    }
      nav li a:hover,

      nav li a:active,
      nav li.current a{
        color: #c32121;
        text-shadow: 2px 2px #000;
        -webkit-transform: scale(1.3);
        -moz-transform: scale(1.3);
        -o-transform: scale(1.3);
        transform: scale(1.3);
        font-weight: bold;
        text-decoration: none;
      }

      a:hover{
        text-decoration: none;
        color:#000;
      }
      
    .form-control {
      display: block;
      width: 100%;
      height: calc(1.5em + .75rem + 2px);
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    #landing_logo{
      height:45px;
      margin-left: 10px;
      margin-top: 15px;
    }

    #user{
      width: 720px;
      margin: 50px auto;
      color: #000;
      text-align: center;
      border: 3px solid #666;
    }

     @keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
        }

      /* Firefox < 16 */
      @-moz-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
      }

      /* Safari, Chrome and Opera > 12.1 */
      @-webkit-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
      }

      /* Internet Explorer */
      @-ms-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
      }

      /* Opera < 12.1 */
      @-o-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
             }
    
    #wrapper{
        width: 100%;
        margin: 0 auto; /* to centers the div */
    }

    #container{
      padding: 10px;
    }
  
    h1{
      font-family: Tahoma, sans-serif;
      color: #000;
    }
     
    a{
       color: #000;
    }

    form
    {
      display: inline-block; 
    }  
  </style>
   


@endsection('style')

@section('content')
@include('partials.flash')

  <h2></h2>
  <a href="/admin/vid_collection/create" class="btn1" 
    style="height: 30px;
           padding: 4px;
           margin-left: 0;
           margin-bottom: 2px;
           line-height: 45px;
           border-radius: 3px;"> Add a new record</a>
  <table class="table table-bordered table-hover">
    <thead class="thead-light">
    <tr>
      <th>Video ID</th>
      <th>Title</th>
      <th>Video Type</th>
      <th>Language</th>
      <th>Rating</th>
      <th>Action</th> 
    </tr>
    </thead>
    @foreach($videos as $video)
      <tr>
      <td>{{ $video['video_id'] }} </td>
      <td>{{ $video['title'] }} </td>
      <td>{{ $video['video_type'] }} </td>
      <td>{{ strtoupper($video['language']) }} </td>
      <td>{{ $video['rating'] }} </td>
      <td><a class="btn btn-primary" href="/admin/vid_collection/{{ $video['video_id'] }}/edit ">Edit</a> <form action="/admin/vid_collection/{{ $video['video_id'] }}" method="post">
        @csrf 
        @method('DELETE')
        <button style="padding:9px 12px;" class="btn btn-danger">Delete</button></form></td>
      </tr>
    @endforeach

  </table>

@endsection('content')
