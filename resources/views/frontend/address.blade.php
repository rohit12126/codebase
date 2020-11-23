@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        @if ($isTemp !=0)
            <div class="row">
                <div class="col-lg-6">
                    <div class="toggle_info">
                        <span><i class="fas fa-user"></i>Returning customer? <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                    </div>
                    <div class="panel-collapse collapse login_form" id="loginform">
                        <div class="panel-body">
                            <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" placeholder="{{ __('Password') }}" name="password">
                                </div>
                                @error('password')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                                <div class="login_footer form-group">
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                                </div>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <div class="form-note text-center">Don't Have an Account? 
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('register') }}"> Sign up now</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <form method="post" action="{{url('/')}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>Billing Details</h4>
                    </div>
                    @foreach ($billingAddresses as $address)
                        <div class="form-group">
                            <input type="radio" name="billing_address" value="{{$address->id}}">
                            <label for="">
                            {{$address->name}}<br/>
                            {{$address->mobile}}<br/>
                            {{$address->address}}<br/>
                            {{$address->city.", ".$address->state.", ".$address->country }}<br/>
                            {{$address->zipcode}}<br/>
                            </label>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <input type="text" required="" class="form-control" name="bill_name" placeholder="Name *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="bill_phone" placeholder="Phone *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="bill_address" required="" placeholder="Address *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="bill_city" placeholder="City / Town *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="bill_state" placeholder="State / County *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="bill_zipcode" placeholder="Postcode / ZIP *">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>Shipping Details</h4>
                    </div>
                    @foreach ($shippingAddresses as $address)
                        <div class="form-group">
                            <input type="radio" name="shipping_address" value="{{$address->id}}">
                            <label for="">
                            {{$address->name}}<br/>
                            {{$address->mobile}}<br/>
                            {{$address->address}}<br/>
                            {{$address->city.", ".$address->city.", ".$address->city }}<br/>
                            {{$address->zipcode}}<br/>
                            </label>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <input type="text" required="" class="form-control" name="ship_name" placeholder="Name *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="ship_phone" placeholder="Phone *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ship_address" required="" placeholder="Address *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="ship_city" placeholder="City / Town *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="ship_state" placeholder="State / County *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required="" type="text" name="ship_zipcode" placeholder="Postcode / ZIP *">
                    </div>
                </div>
                <a href="#" class="btn btn-fill-out btn-block">Continue</a>
            </div>
        </form>  
    </div>
</div>
<!-- END SECTION SHOP -->
@endsection