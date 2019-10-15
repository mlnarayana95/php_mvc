<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
  <title>Funflix</title>
  <link rel="icon" href="images/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="images/android-chrome-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="images/android-chrome-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png" />
  <link rel="stylesheet" href="styles/desktop.css" />
  <link rel="stylesheet" href="styles/mobile.css" />
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
</head>
<body>
  <div id="container">
    <header>
      <span id="logo">
        <img id="landing_logo" src="images/logo.png" alt="logo">
      </span>
      <nav id="navlist">
        <a id="menu-toggle" href="#navlist"><img src="images/menu-white.png" width="50" height="34" alt="menu toggle" /></a> <!-- starts navigation -->
        <ul>
          <li class="current"><a href="/">HOME</a></li>
          <li><a href="/tvshows">TV SHOWS</a></li>
          <li><a href="/movies">MOVIES</a></li>
          <li><a href="/my_profile">MY PROFILE</a></li>
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