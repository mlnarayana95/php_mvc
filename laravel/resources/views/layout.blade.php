<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
  <title>{{ $title }} </title>
  <link rel="icon" href="images/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="/images/android-chrome-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/images/android-chrome-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png" />
  <link rel="stylesheet" href="/styles/desktop.css" />
  <link rel="stylesheet" href="/styles/mobile.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
  integrity="sha256-HmfY28yh9v2U4HfIXC+0D6HCdWyZI42qjaiCFEJgpo0="
  crossorigin="anonymous"></script>
  <script src="/js/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/js/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/js/slick/slick-theme.css"/>
 <script>
 
  $(document).ready(function(){
  $('.autoplay').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

});

</script>
  <style>
    
  body{
    background: radial-gradient(#212121 , #000);
    background-size: cover;
    background-attachment: fixed;
    opacity: 0.9;
    margin: 0 auto;
    font-family: Tahoma, sans-serif; /* google fonts with fallback */  
    }
    
    #wrapper{
      text-align: left;
    }
        
    footer{
      width: 100%;
      position: fixed;
      bottom: 0;
      left: 0;
    }
      
    footer p{
      text-align: center;
      } 
    
    .vids{
      max-width: 100%;
    }


  </style>


  @yield('style')
</head>
<body>
  <div id="container">
    <header>
      <span id="logo">
        <img id="landing_logo" src="/images/logo.png" alt="logo">
      </span>
      <nav id="navlist">
        <a id="menu-toggle" href="#navlist"><img src="/images/menu-white.png" width="50" height="34" alt="menu toggle" /></a> <!-- starts navigation -->
        <ul>
          <li class="@if($slug=='home') current @endif"><a href="/">HOME</a></li>
          <li class="@if($slug=='tvshows') current @endif"><a href="/tvshows">TV SHOWS</a></li>
          <li class="@if($slug=='movies') current @endif"><a href="/movies">MOVIES</a></li>
          <li class="@if($slug=='myprofile') current @endif"><a href="/myprofile">MY PROFILE</a></li>
        </ul>
      </nav> 
      <div id="header_button">
        <a href="/login" class="btn1">Sign Out</a>
      </div>
    </header>
    
  @yield('content')
    <footer> <!-- footer section starts -->
      <p>Copyright &copy; 2019 - Funflix Services Inc. All rights reserved.</p>
    </footer> <!-- footer section ends -->
  </div>
</body>
</html>