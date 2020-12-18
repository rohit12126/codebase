@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-12 text-center pt-3 pb-2">
                <img src="{{URL::asset('/images/emptycard.png')}}" alt="">
                <div class="text-center mt-5">
                    <h2><b>Cart is empty</b></h2>
                    <h5>Looks like you have no items in your shopping cart.</h5>
                    <div class="mt-3 mb-3">
                        <a href="" class="btn btn-sm btn-fill-out">Home</a>
                        <a href="" class="btn btn-sm btn-fill-out">order detail</a>
                        <a href="" class="btn btn-sm btn-fill-out">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        