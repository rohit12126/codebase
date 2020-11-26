@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="order_review">
                <div class="heading_s1">
                    <h4>Your Orders</h4>
                </div>
                <div class="table-responsive order_table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productList as $product)
                                <tr>
                                    <td>{{$product->name}} <span class="product-qty">x {{$product->qty}}</span></td>
                                    <td>₹ {{$product->price *$product->qty}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SubTotal</th>
                                <td class="product-subtotal">₹ {{$cartSubTotal}}</td>
                            </tr>
                            <tr>
                                <th>Shipping</th>
                                <td>Free Shipping</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td class="product-subtotal">₹ {{$cartSubTotal}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
               
                <div class="payment_method">
                    <div class="heading_s1">
                        <h4>Payment</h4>
                    </div>
                    <div class="payment_option">
                        </div>
                </div>
                <a class="btn btn-fill-out" href="{{route('addmoney.paywithpaypal')}}">Paypal</a> <a class="btn btn-fill-out" href="{{route('stripe')}}">Stripe</a>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
@endsection