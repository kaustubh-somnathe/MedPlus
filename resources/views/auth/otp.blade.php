<!DOCTYPE html>
<html>
<head>
	<title>OTP</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/weblogin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/weblogin/css/style.css')}}">
</head>
<body style="background-image: url('{{asset('public/website/images/Emergency-Medicine.jpg')}}'); width: 100%;" >
<div class="container">
	<div class="col-md-12">
		<div class="otp-section-div">
			<h2 class="otp-heading">OTP for Verify</h2>
  	        <form class="form-group" action="{{route('otpverify.submit')}}" method="post">
  	        	@csrf
  	        	<input type="hidden" name="id" value="{{$data['id']}}">
              <input type="text" name="otp" class="form-control input-type" placeholder="Please enter your verification code" required="">
              <button class="btn btn-primary btn-otp" type="submit">Verify</button>
            </form>
              
		</div>
	</div>
</div>
</body>
</html>