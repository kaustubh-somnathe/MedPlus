<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/weblogin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/weblogin/css/style.css')}}">
</head>
<body  style="background-image: url('{{asset('public/website/images/Emergency-Medicine.jpg')}}'); width: 100%;" >
<div class="container">
  <div class="main-login-div" style="margin-top: 30px;">
  	 <form class="form-group" method="POST" action="{{ route('userlogin')}}" >
        <h2 class="form-login-in-heading">Login to your account</h2>
  	        <div class="input-type-section">
              <input type="email" name="email" class="form-control input-type1" placeholder="Mobile/Email" required="">
              <input type="password" name="password" class="form-control input-type2" placeholder="Password" required="">
              <button class="btn btn-primary " type="submit">Login in</button>
              <a href="#"  class="forgot-password">Forgot Password?</a>
            </div>
     </form>
  </div>	
</div>
        
</body>
</html>