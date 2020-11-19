@extends('layouts.front')
@section('content')
<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Login</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                            <div class="input-group-prepend">
                                <input type="text" required="" class="form-control" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}"></div></div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" placeholder="{{ __('Password') }}" name="password"></div>
                            <div class="login_footer form-group">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <ul class="btn-login list_none text-center"><li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul><div class="form-note text-center">Don't Have an Account? 
                        @if (Route::has('password.request'))
                          <a href="{{ route('register') }}">
                        @endif
                  Sign up now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
@endsection

@section('javascript')

@endsection