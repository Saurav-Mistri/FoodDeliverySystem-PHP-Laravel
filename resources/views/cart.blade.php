@extends('master')
@section('content')
			<!-- start banner Area -->
			<section class="relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white text-left">
								Cart
							</h1>	
              <p class="text-white link-nav text-left"><a href="index">Home </a>  
              <span class="lnr lnr-arrow-right"></span>  <a href="cart"> Cart</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
          <div class="section-top-border">
          <form action="{{ url('/view-cart'.$dishes->id) }}" method="POST" enctype="multipart/form-data">
						<h3 class="mb-30">Table</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">ID</div>
									<div class="country">Image</div>
                  <div class="visit">Dish</div>
                  <div class="visit">Cuisine</div>
									<div class="percentage">Total</div>
								</div>
								<div class="table-row">
									<div class="serial">{{dishes->id}}</div>
									<div class="country"> <img src="img/elements/f1.jpg" alt="flag">Canada</div>
                  <div class="visit">645032</div>
                  <div class="visit">645032</div>
									<div class="percentage text-center">
									</div>
								</div>
							</div>
            </div>
          </form>
          </div>
        </div>
      </div>

@endsection
