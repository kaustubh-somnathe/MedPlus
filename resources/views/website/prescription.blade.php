@extends('include.header')

@section('content')
<style type="text/css">
	.otp-section-div{background-color: #ffff;  margin-top: 70px; padding-bottom: 40px;}
	.otp-heading{color: black; padding-top: 5px; padding-bottom: 20px;  padding-top: 10px;}
	/*.otp-heading span{margin-left: 100px;}*/
	.detail{border-bottom: 2px solid rgba(0, 0, 0, 0.1); padding: 10px;}
	/*.fileupload{margin-left: 45px; margin-top: 20px;}*/
</style>


	<aside id="qbootstrap-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url('{{asset('public/website/images/prescription.png')}}');">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 slider-text">
							<div class="col-md-12">
  	        					<form class="form-group" action="{{route('order.submit')}}" method="post" enctype="multipart/form-data">
  	        					@csrf
  	        						<div class="col-md-12">
										<div class="otp-section-div">
											<div class="detail">
												<h3 class="otp-heading"><b>Customer Detail:</b></h3>
												<p>Name : &nbsp;{{$cust->fname.' '.$cust->lname}}<span style="padding-left: 50px;">Mobile : &nbsp;{{$cust->mobile_no}}</span><span style="padding-left: 50px;">City : &nbsp;{{$cust->city}}</span></p>
											</div>
								  	        
							  	            <input type="hidden" name="customer_id" value="{{$cust->id}}">
										    <div class="row form-group fileupload">
										    	<div class="col-md-2"></div>
										    	<div class="col-md-4">
									 				<input type="file" name="prescription_path" id="fileToUpload" class="text-center" style="padding-top: 45px; " >
									 			</div>
									 			
									 			<div class="col-md-4">
								 					<button class="btn btn-primary btn-otp" type="submit" style="margin-top: 40px;padding-left: 10px;">Upload Prescription</button></a>
								 				<div class="col-md-2"></div>
											</div>
										</div>
									</div>
           				    	</form>
							</div>
						</div>
   					</div>
	   			</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>			
									 				
								 				
<script>
var d = new Date();
var curr_date = d.getDate();
var curr_month = d.getMonth() + 1; //Months are zero based
var curr_year = d.getFullYear();
document.getElementById("demo").innerHTML= curr_date + "-" + curr_month + "-" + curr_year;
</script>							 					
								            

	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 qbootstrap-widget">
					<h3>About</h3>
					<p>For millions of people, Medcare is the trusted and familiar home where they know they???ll find a healing touch. It connects them with everything they need to take good care of themselves and their family - assessing health issues, finding the right doctor, booking diagnostic tests, obtaining medicines, storing health records or learning new ways to live healthier.</p>
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
									              
								              
			   				
		   						
									
			   		

		  	        	
		              
				
									
								
							
			   					

								


