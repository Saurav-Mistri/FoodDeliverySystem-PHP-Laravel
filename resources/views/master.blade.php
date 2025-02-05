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
                        @guest
                            <li><a href="index">Home</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="usercuisine">Cuisine</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
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
                                            <a href="{{url('/profile'.Auth()->user()->id)}}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Profile <span class="caret"></span>
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
                                @else
                            <li><a href="index">Home</a></li>
                            <li><a href="about">About</a></li>
                            <li><a href="usercuisine">Cuisine</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
                            <li><a href="feedback">Feedback</a></li>
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
                                            <a href="{{url('/profile'.Auth()->user()->id)}}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Profile <span class="caret"></span>
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
                        @endguest
                    </ul>
                  </nav><!-- #nav-menu-container -->                                  
                </div>
            </div>
        </header>
<!-- #header -->

		<!-- start banner Area -->
            @yield('content')
		<!-- End post-content Area -->
		
        <!-- start footer Area -->		
        <footer class="footer-area">
			<div class="footer-widget-wrap">
				<div class="container">
					<div class="row section-gap">
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Opening Hours</h4>
								<ul class="hr-list">
									<li class="d-flex justify-content-between">
										<span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Saturday</span> <span>08.00 am - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Sunday</span> <span>08.00 am - 10.00 pm</span>
									</li>																				
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contact Us</h4>
								<p>
									605, River Side Park, nr APMC Cross Road, Ahmedabad, Gujarat - 380007
								</p>
								<p class="number">
									091-8140-883-574 <br>
									091-9106-167-028
								</p>
							</div>
						</div>						
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on align-items-center d-flex">
									      	<input class="form-control" name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>
									  </form>
								</div>
							</div>
						</div>						
					</div>					
				</div>					
			</div>
			<div class="footer-bottom-wrap">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
All rights reserved | This site is made <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://index.php" target="_blank">Rudra , Dishant and Saurav</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>           
                        </ul>
					</div>						
				</div>
			</div>
		</footer>
		<!-- End footer Area -->	

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
			<script src="js/jquery-ui.js"></script>					
			<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>						
		<script src="js/jquery.nice-select.min.js"></script>					
		<script src="js/owl.carousel.min.js"></script>			
        <script src="js/isotope.pkgd.min.js"></script>								
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
    <script>
            $(document).ready(function(){
                $('#error_alert').delay(5000).fadeOut();
            });

            function add() {
				var id = $('#add').val();
				var name = $('#d_name').text();
				var qty = $('#qty').val();
                var description = $('#d_discription').text();
                var price = $('#price').text();

                var data = { cart: [{ d_id: id, d_name: name, qty: qty, price: price, d_discription: description }]};
                var cartObject =  JSON.parse(localStorage.getItem("dish"));

                if (JSON.parse(localStorage.getItem("dish")) === null) {
                    localStorage.setItem("dish", JSON.stringify(data));
                }  else {
                    cartObject.cart.push(data.cart[0]);
                    localStorage.setItem("dish", JSON.stringify(cartObject));
                }
            }
        </script>

</html>