    <!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/logo/logo.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>DRS Delivery System</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/jquery-ui.css">                
            <link rel="stylesheet" href="css/nice-select.css">                          
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">             
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>  
            <header id="header">
                <div class="header-top">
                    <div class="container">
                        <div class="row justify-content-center">
                              <div id="logo">
                                <a href="index.html"><img src="img/logo/logo.png" alt="" title="" width="100" /></a>
                              </div>
                        </div>                              
                    </div>
                </div>
                <div class="container main-menu">
                    <div class="row align-items-center justify-content-center d-flex">          
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                          <li><a href="index">Home</a></li>
                          <li><a href="about">About</a></li>
                          <li><a href="cuisine">Menu</a></li>
                          <li><a href="contact">Contact Us</a></li>
                          <li class="menu-has-children"><a href="">settings</a>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div>
                                <a href="profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a href="cart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>
                                </div>
                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></div>
                            </li>
                        @endguest
                    </ul>
                                </li>                                           
                            </ul>
                          </li>                                                                       
                         
                        </ul>
                      </nav><!-- #nav-menu-container -->                                  
                    </div>
                </div>
            </header>