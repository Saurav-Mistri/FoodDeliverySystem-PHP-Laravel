@extends('master')
@section('content')
@if( auth()->check() )
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<!-- #header -->
		
		<!-- start banner Area -->
		<section class="about-banner relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white text-left">
							Dishes				
						</h1>	
						<p class="text-white link-nav text-left"><a href="index">Home </a>  
						<span class="lnr lnr-arrow-right"></span>  <a href="user-dishes">dishes</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->			

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
					@foreach($cuisine as $cuisine)
                    <li data-filter=".breakfast">{{ $cuisine->name }}</li>
                    @endforeach
                </ul>
                <div class="filters-content">
                    <div class="row grid">
						@foreach($dish as $row)
							<div class="col-md-5 all breakfast">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<style> img{border-radius:10%;}</style>									
												<img id="d_img" src="{{ url('/img/dishes/'.$row->d_img) }}" width="10%"/><br><br>
											<h4 id="d_name">{{$row->d_name}}</h4>
											<h4 class="price" id="price">₹&nbsp;{{$row->price}}</h4>
									</div>			
									<p id="d_discription">{{$row->d_discription}}</p>
									<div class="button-group-area mt-10 text-right">
										<a href="{{url('/usercuisine'.$row->d_id)}}" class="genric-btn primary-border">view</a>
										<a href="#" class="genric-btn primary-border">Add to Cart</a>
										
									</div>
								</div>
							</div>  
						@endforeach    
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End menu-area Area -->						

		<!-- Start reservation Area -->
		<!-- End reservation Area -->				

			<!-- start footer Area -->
			@else
    <meta http-equiv='refresh' content='0; url=login'>
@endif
@endsection