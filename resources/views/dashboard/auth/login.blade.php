@extends('dashboard.authBase')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card-group">
                <div class="card p-4">
                    <a href="{{ url('/') }}" class="d-block m-auto p-0 pr-xl-2 head-logo">
                        Custom Closet
                    </a>
                    <div class="card-body">
                        <h1 class="text-center text-uppercase login-form-title">Admin Login</h1>
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input class="form-control" type="email" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ @$_POST['email'] }}" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @if ($errors->any())
                            <div class="text-danger">{{ implode('', $errors->all(':message')) }}</div>
                            @endif
                            <div class="row justify-content-center">
                                <div class="col-6 text-center">
                                    <button class="btn btn-primary px-4 d-inline-block" type="submit">{{ __('Login') }}</button>
                                </div>
                        </form>
                        {{-- <div class="col-6 text-right">
                        <a href="{{ route('password.request') }}" class="btn btn-link px-0" type="button">{{ __('Forgot Your Password?') }}</a>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  @if (Route::has('password.request'))
                    <a href="{{ route('register') }}" class="btn btn-primary active mt-3" type="button">{{ __('Register') }}</a>
        @endif
    </div>
</div>
</div> --}}
</div>
</div>
</div>
</div>
<style>
    body {
        background-image: url({{ asset('images/admin-login-bg.jpg') }});
        background-size: cover;
        background-position: center;
        position: relative;
    }
    body::before{
        content: "";
        position:absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background-color:rgba(0,0,0,.2)
    }
</style>

@endsection

@section('javascript')

@endsection
