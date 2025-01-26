@extends('master')
@section('content')
<!-- #header -->
		
		<!-- start banner Area -->
		<section class="about-banner relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white text-left">
							About Us				
						</h1>	
						<p class="text-white link-nav text-left"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about"> About Us</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start home-about Area -->
		<section class="home-about-area section-gap">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 home-about-left">
						<h1>About Our Story</h1>
						<p>
							We sat down at a table of a local restaurant, sipping through our cold coffee, when the idea just clicked. Look at the quirk of this situation.
The idea to help small restaurants came from a small restaurant! Such co-incidences are bound to create a fascinating idea, like Food Delivery.
The last sip of the cold coffee was over and the idea was almost etched in our hearts.
With the sweetness of coffee on our taste buds, we thanked our stars and reinforced the idea to start food delivery-
an web app that helps small businesses survive the tide of competition, like a pro!
						</p>
						<a href="cuisine" class="primary-btn">view full menu</a>
					</div>
					<div class="col-lg-6 home-about-right">
						<img class="img-fluid" src="img/about-img.jpg" alt="">
					</div>
				</div>
			</div>	
		</section>
		<!-- End home-about Area -->	

		<!-- Start services Area -->
		<!-- End services Area -->

		<!-- Start review Area -->
		<section class="review-area section-gap">
			<div class="container">
				<div class="row">
					<div class="active-review-carusel">
					@if($datas->count())
					@foreach($datas as $row)
						<div class="single-review">
						<style> img#a{border-radius:50%;}</style>									
							<img id="a" src="{{ url('/img/uploaded/'.$row->u_img) }}"  alt="Avatar" width="50" height="60">
						</style>
							<h4>{{$row->name}}</h4>
							<div class="star">{{$row->f_subject}}</div>	
							<p>{{$row->f_msg}}</p>
						</div>
						@endforeach
						@endif											
					</div>
				</div>
			</div>	
		</section>
		<!-- End review Area -->				

		<!-- start footer Area -->
@endsection