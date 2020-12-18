@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pt-3 pb-2">
                <img src="{{URL::asset('/images/emptycard.png')}}" alt="">
                <div class="text-center mt-5">
                    <h2><b>Cart is empty</b></h2>
                    <h5>Looks like you have no items in your shopping cart.</h5>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-10">
                <div class="row mt-3 mb-3">
                    <div class="col-sm-6">
                        <a href="{{ url('/') }}" class="btn btn-sm btn-fill-out w-100 mb-3 mb-sm-0">Home</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ url('product/') }}" class="btn btn-sm btn-fill-out w-100">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        