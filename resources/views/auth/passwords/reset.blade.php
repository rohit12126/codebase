@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Reset Password</h3>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                            <div class="input-group-prepend">
                                <input type="email" required="" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div></div>
                            <div class="form-group">
                            <div class="input-group-prepend">
                                <input  type="password" placeholder="password" required="" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div></div>

                            <div class="form-group">
                            <div class="input-group-prepend">
                                <input  type="password" required=""placeholder="comfirm password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div></div>
                        


                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block">Send Password Reset Link </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
@endsection
