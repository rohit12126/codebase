@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section bg-light">
    <div class="container">
        <div class="login-card">
            <div class="padding_eight_all bg-white">
                <h1 class="pt-4 pb-4 mb-5 heading_s3 text-center">Reset Password</h1>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <input type="email" required="" placeholder="confirm your email"class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input  type="password" placeholder="password" required="" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input  type="password" required=""placeholder="comfirm password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-fill-out btn-block">Send Password Reset Link </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
@endsection
