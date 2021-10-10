<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/weblogin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/weblogin/css/style.css')}}">
</head>
<body  style="background-image: url('{{asset('public/website/images/Emergency-Medicine.jpg')}}'); width: 100%;" >
<div class="container">
	<div class="col-md-12">
		<div class="register-div">
		 <h2 class="register-heading">Register Here</h2>
			<form class="form-group" action="{{route('webregister.submit')}}" method="post">
               @csrf
                    <div class="col-sm-6 col-xs-12 ">
                        <input type="text" name="fname" placeholder="First Name" class="form-control input1" value="{{ old('fname') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="text" name="lname"  placeholder="Last Name " class="form-control input2" value="{{ old('lname') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12 ">
                        <input type="text" name="mobile_no" placeholder="Mobile No" class="form-control input3" value="{{ old('mobile_no') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="email" name="email" placeholder="Email" class="form-control input4" value="{{ old('email') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="password" name="password" placeholder="Password" class="form-control input5" value="{{old('password') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="password" name="c_password" placeholder="Confirm Password " class="form-control input6" value="{{ old('c_password') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12 ">
                        <input type="text" name="city" placeholder="City" class="form-control input7" value="{{ old('city') }}"/>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <input type="text" name="state" placeholder="State" class="form-control input8" value="{{ old('state') }}">
                    </div>
                    <a href="">
                    <button type="submit" class="btn btn-primary btn-register">Register</button></a>
                    <button type="button" class="btn btn-primary btn-reset">Reset</button>
                    
                </form>
		</div>
	</div>
</div>
</body>
</html>