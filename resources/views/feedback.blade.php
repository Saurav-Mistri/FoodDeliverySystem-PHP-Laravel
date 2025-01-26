@extends('master')
@section('content')
<!-- #header -->
		  
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-between">
						<div class="about-content col-lg-12">
							<h1 class="text-white text-left">
								Feedback				
							</h1>	
							<p class="text-white link-nav text-left"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Feedback </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="comment-form">
										<h4>Leave a Comment</h4>
										<form action="{{ url('feedback') }}" method="POST">
											@csrf
											<div class="form-group">
												<input type="text" class="form-control" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
											</div>
											<div class="form-group">
												<input type="hidden" class="form-control" name="u_id" value="{{ auth()->user()->id }}" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
											</div>
											<div class="form-group">
												<textarea class="form-control mb-10" rows="5" name="msg" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
											</div>
											<button type="submit" class="primary-btn text-uppercase">Post Comment</button>	
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End post-content Area -->
			
			<!-- start footer Area -->		
			@endsection