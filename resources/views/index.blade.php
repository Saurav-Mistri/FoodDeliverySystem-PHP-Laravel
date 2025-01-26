@extends('master')
@section('content')
<!-- #header -->
			<!-- start banner Area -->
			<section class="banner-area">		
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h6 class="text-white">Wide Options of Choice</h6>
							<h1 class="text-white">DRS Delivery</h1>
							<p class="text-white">
								We deliver fast and safe at your door step. Happy to have you as a special customer.
							</p>
							<a href="usercuisine" class="primary-btn text-uppercase">Check Our Menu</a>
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
							<a href="usercuisine" class="primary-btn">view full menu</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>	
			<!-- End home-about Area -->			

			<!-- Start menu-area Area -->
            <section class="menu-area section-gap" id="menu">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Foods we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>	

					<ul class="filter-wrap filters col-lg-12 no-padding">
						@if($cuisins->count()>0)
						@foreach($cuisins as $row)
								<li data-filter=".breakfast">{{$row->name}}</li>	
							@endforeach      
						@endif
					</ul> 
                </div>
            </section>
            <!-- End menu-area Area -->			

			<!-- Start reservation Area -->
			<!-- End reservation Area -->
			
			<!-- Start gallery-area Area -->
            <!-- End gallery-area Area -->			

			<!-- Start review Area -->
			<section class="review-area section-gap">
				<br>
				<div class="container">
					<div class="row">
						<div class="active-review-carusel">
							@if($feedbacks->count()>0)
							@foreach($feedbacks as $row)
							<div class="single-review">
							<style> img#a{border-radius:50%;}</style>									
										<img id="a" src="{{ url('/img/uploaded/'.$row->u_img) }}"  alt="Avatar" width="50" height="60">
								<h4>{{$row->name}}</h4>
								<div>{{$row->f_subject}}
								</div>	
								<p>{{$row->f_msg}}</p>
							</div>
							@endforeach
							@endif														
						</div>
					</div>
				</div>	
			</section>
			<br>
			<!-- End review Area -->					

			<!-- Start blog Area -->
			<!-- End blog Area -->							

			<!-- start footer Area -->		
@endsection