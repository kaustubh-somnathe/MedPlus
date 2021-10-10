@extends('layouts.logintemp')
@section('content')
    <div class="logo text-center m-b-15">
        <p class="font-20 m-b-0"></p>
        <h3 class="m-t-0 text-uppercase">{{ config('app.name', 'MED CARE') }}</h3>
    </div>
    <div class="card">
        <div class="msg font-24">Sign in</div>
        <div class="body">
            <form id="sign_in" method="POST" action="{{ route('login') }}">
            @csrf
                <div class="input-group">
                    <span class="input-group-addon">
                        <!-- <i class="material-icons">person</i> -->
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Here" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <!-- <i class="material-icons">lock</i> -->
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 p-t-5">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">{{ __('Remember Me') }}</label>
                    </div>
                    <div class="col-xs-6 p-t-5">
                        <a href="{{ route('password.request') }}">Forgot Password?</a><!-- forgot-password.html -->
                    </div>
                </div>
                <div class="row m-b--20">
                    <div class="col-xs-12">
                        <button class="btn btn-block bg-fnt-blue waves-effect login-btn" type="submit">{{ __('Login') }}</button>
                        <!-- <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection