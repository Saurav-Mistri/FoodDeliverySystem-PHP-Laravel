@extends('master')
@section('content')
@if( auth()->check() )
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<!--Main content-->

<!-- #header -->
			
			<!-- start banner Area -->
			<section class="relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white text-left">
								Edit Profile
							</h1>	
							<p class="text-white link-nav  text-left"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="profile">Edit Profile</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start Sample Area -->

			<!-- End Sample Area -->
			<!-- Start Button -->
			<section class="button-area">
				<div class="container border-top-generic">
				
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Edit Profile</h3>
								@include('formerror')
								<form action="{{url('/update-profile'.$users->id)}}" method="POST" enctype="multipart/form-data">
								@csrf
								{{ method_field('PUT') }}
									<div class="col-12 col-md-9 mt-10 ">	
										<style> img{border-radius:10%;}</style>		
											<div class="icon"></div>
											<img src="{{ url('/img/uploaded/'.$users->u_img) }}" width="30%"/><br><br>
									</div>
									<div class="input-group mt-10">
										<input type="file" name="u_img" value="{{ auth()->user()->u_img }}" placeholder="Select Image" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Image'" class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  												<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
											</svg>
										</div>
										<input type="text" name="name" value="{{ auth()->user()->name }}" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input">
									</div>

									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-user"></i>
										</div>
										<input type="name" name="gender" value="{{ $users->gender }}" placeholder="gender" onfocus="this.placeholder = ''" onblur="this.placeholder = 'gender'" class="single-input form-control-static" readonly>
									</div>
									
									<div class="input-group-icon mt-10">
										<div class="icon">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  												<path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
											</svg>
										</div>
										<input type="email" name="email" value="{{ auth()->user()->email }}" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input form-control-static"readonly>
									</div>

									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
											<input type="text" name="address" value="{{ auth()->user()->address }}" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div>
					
									<div class="input-group-icon mt-10">
										<div class="icon">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  												<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
											</svg>
										</div>
										<input type="text" name="phn_no" value="{{ auth()->user()->phn_no }}" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required class="single-input">
									</div>

									<div class="mt-10 text-right">
										<input type="submit" class="primary-btn text-uppercase" value="Update Profile">	
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->

			<!-- start footer Area -->
<!--end Main content-->
@else
    <meta http-equiv='refresh' content='0; url=login'>
@endif
@endsection