@extends('master')
@section('content')
<!-- #header -->
	  
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white text-left">
								Contact Us				
							</h1>	
							<p class="text-white link-nav text-left"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Ahmedabad, Gujarat</h5>
									<p>
										605, River-Side Park, Nr APMC Cross Road
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>091-8140-883-574 <br>
										091-9106-167-028</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>drssystem@gmail.com</h5>
									<p>Send us email to contact us!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-5">
						@include('formerror')
						<form action="{{ url('contact-us') }}" method="POST">
											@csrf
											<div class="form-group">
												<input type="text" class="form-control" name="c_name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" name="c_email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
											</div>
											<div class="form-group">
												<input class="form-control mb-10" rows="5" name="c_subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required="" type="text">
											</div>
											<div class="form-group">
												<textarea class="form-control mb-10" rows="5" name="c_msg" placeholder="Enter your messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
											</div>
											<button type="submit" class="primary-btn text-uppercase">Submit</button>	
										</form>
						
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<!-- start footer Area -->		
@endsection