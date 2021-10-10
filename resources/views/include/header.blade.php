<!DOCTYPE html>

<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medcare</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('public/website/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('public/website/css/searchbox.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('public/website/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('public/website/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('public/website/css/magnific-popup.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('public/website/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/website/css/owl.theme.default.min.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('public/website/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('public/website/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('public/website/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
</head>
	</head>
	<body>
		
	<div class="qbootstrap-loader"></div>
	
	<div id="page">
	<nav class="qbootstrap-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-4 col-md-push-4 text-center">
									<div id="qbootstrap-logo"><a href="index.html"><i class="icon-plus-outline"></i>Med<span>care</span></a></div>
								</div>
								<div class="col-md-4 col-md-pull-4">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">7378787379</a><br><a href="#">7972848865</a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">Medcare Wardha</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 text-center">
						<div class="menu-1">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="services.html">Services</a></li>
								<li class="btn-cta"><a href='{{url("department")}}'><span>UPLOAD PRESCRIPTION <i class="icon-calendar3"></i></span></a></li>
								<li class="has-dropdown">
									<a href="doctors.html">Doctors</a>
									<ul class="dropdown">
										<li><a href="doctors-single.html">Single Doctor</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a href="blog.html">Blog</a>
									<ul class="dropdown">
										<li><a href="blog-single.html">Single Blog</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li class="btn-cta"><a href='{{url("webregister")}}'><span>Register <i class="icon-calendar3"></i></span></a></li>
								<li class="btn-cta"><a href='{{url("weblogin")}}'><span>login <i class="icon-calendar3"></i></span></a></li>

<!-- 
							 <li class=" navbar-right">
  								<input type="text" placeholder="Search.." name="q"><button type="submit"><i class="fa fa-search"></i></button>
							</li>  -->
							<form action="/search" method="POST" role="search">
   							 {{ csrf_field() }}
    						<div class="input-group">
							 <li class=" navbar-right">
  								<input type="text" placeholder="Search.." name="q"><button type="submit"><i class="fa fa-search"></i></button>
							</li> 
    						</div>
							</form>
</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	@yield('content')
</div>
</body>
</html>