@extends('include.header')

@section('content')
<style type="text/css">
	.slide{margin-top: 100px;}
	.input-type{border-color: #ffff;background-color: #ffff; }

</style>
	<aside id="qbootstrap-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url('{{asset('public/website/images/prescription.png')}}');">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 slider-text">
			   				<div class="slide">
		   						<div class="row form-group">
									<div class="col-md-12">
										<h1 style=" color: #ffff; text-align: center;"><strong>Mobile Number Verification</strong></h1>
								    </div>
								</div>
								<div class="col-md-12">
									<div class="otp-section-div">
		  	        					<form class="form-group" action="{{route('number.submit')}}" method="post">
		  	        					@csrf
		  	        						<div class="row form-group">
			  	        						<div class="col-md-3"></div>
			  	        						<div class="col-md-6">
	      											<input type="text" name="number" class="form-control input-type text-center" placeholder="Please enter your mobile number" style="font-size: 18px;" required>
	      										</div>
	      										<div class="col-md-3"></div>
      										</div>
      										<div class="row form-group">
	      										<div class="col-md-4"></div>
	      										<div class="col-md-4 text-center" >
			              							<button class="btn btn-primary btn-otp" type="submit">Proceed</button>
			              						</div>
	      											
			              						<div class="col-md-4"></div>
			              					</div>
		           				    	</form>
									</div>
								</div>
		   					</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>			

	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 qbootstrap-widget">
					<h3>About</h3>
					<p>For millions of people, Medcare is the trusted and familiar home where they know they’ll find a healing touch. It connects them with everything they need to take good care of themselves and their family - assessing health issues, finding the right doctor, booking diagnostic tests, obtaining medicines, storing health records or learning new ways to live healthier.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Links</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Department</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Shop</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Our Services</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Heart Surgery</a></li>
						<li><a href="#">Surgical Treatment</a></li>
						<li><a href="#">General Treatment</a></li>
						<li><a href="#">Medical Treatment</a></li>
						<li><a href="#">Help Desk</a></li>
					</ul>
				</div>

				<div class="col-md-5 col-sm-4 col-xs-12 qbootstrap-widget">
					<h3>Let's Talk</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy; 2018 Medcare International Private Limited. All Rights Reserved.</small> 
                    <small class="block">Designed by <a href="https:https://www.surjuse.com/" target="_blank">shubham surjuse</a> Avaiable on <a href="https://www.surjuse.com" class="">7378787379</a></small>
                </p>
			</div>
		</div>
	</footer>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('public/website/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('public/website/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('public/website/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('public/website/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('public/website/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('public/website/js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('public/website/js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('public/website/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('public/website/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('public/website/js/magnific-popup-options.js')}}"></script>
	<!-- Sticky Kit -->
	<script src="{{asset('public/website/js/sticky-kit.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('public/website/js/main.js')}}"></script>
@endsection

		  	        	
		              
				
									
								
							
			   					

								


<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
								    <div class="row form-group">
								    	<div class="col-md-6">
							 				<input type="text" name="fileToUpload" id="fileToUpload" class="text-center" ">
							 			</div>
							 			
							 			<div class="col-md-6">
						 					<input type="submit" value="Proceed" class="btn-primary btn-lg">
						 				</div>
									</div> -->
								<!-- </form> -->