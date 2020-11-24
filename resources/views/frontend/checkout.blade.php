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
                    <h4>Your Orders</h4> {{$bill}}
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
                    <form method="post" action="{{route('submit.mode')}}">
                    @csrf
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_options" id="exampleRadios4" value="Stripe" data-url="http://127.0.0.1:8000/stripe/">
                                <label class="form-check-label" for="exampleRadios4">Stripe</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_options" id="exampleRadios5" value="Paypal" data-url="http://127.0.0.1:8000/paywithpaypal/">
                                <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                <input type="hidden" name="amount" value="{{$cartSubTotal}}">
                                <input type="hidden" name="bill" value="{{$bill}}">
                                <input type="hidden" name="ship" value="{{$ship}}">
                            </div>
                        </div>
                </div>
                <button type="submit" name="submit" class="btn btn-fill-out btn-block">Place Order</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
@endsection