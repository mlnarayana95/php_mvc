<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/apple-touch-icon.png"/>
  <link rel="icon" sizes="57x57" href="images/android-chrome-57x57.png" />
  <link rel="icon" sizes="72x72" href="images/android-chrome-72x72.png" />
  <link rel="icon" sizes="114x114" href="images/apple-icon-114x114.png" />
  <link rel="icon" sizes="144x144" href="images/apple-icon-144x144.png" />
  <link rel="stylesheet" href="/styles/desktop.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title></title>

  @yield('style')
</head>
<body>

  <header style="display: inline-block;">
      <p  style="display: inline-block;float: left;">
        <a href="admin.php"><span id="logo">
          <img id="landing_logo" src="../images/logo.png" alt="logo">
        </span></a>
      </p>

    @guest
         <div id="header_button">
          <a class="btn1" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
          <a class="btn1" href="{{ route('register') }}">{{ __('Register') }}</a>
           </div>
        @endif
        @else
        <nav>
          <a id="menu-toggle" href="#navlist"><img src="../images/menu-white.png" alt="menu toggle" /></a> <!-- starts navigation -->
          <ul>
            <li class="navigation"><a href="home.php">HOME</a></li>
            <li class="navigation"><a href="vidcollection.php">VIDEO COLLECTION</a></li>
            <li class="navigation"><a href="users.php">USERS</a></li>
            <li class="navigation"><a href="genre.php">GENRE</a></li>
            <li class="navigation"><a href="viewlist.php">VIEW LIST</a></li>
          </ul>

          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                </form>
            </div>
        </li>

      </nav> 
     @endguest
  </header>
  <div id="container">
  @yield('content')
    <footer> <!-- footer section starts -->
      <p>Copyright &copy; 2019 - Funflix Services Inc. All rights reserved.</p>
    </footer> <!-- footer section ends -->
  </div>
</body>
</html> 
