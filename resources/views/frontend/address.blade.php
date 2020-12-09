@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        @if ($isTemp !=0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="toggle_info">
                        <!-- <span><i class="linearicons-user"></i>Returning customer? <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login">Click here to login</a></span> -->
                        <p class="p-relative mb-3">
                            <i class="linearicons-user"></i> Returning Customer? Login here for a better experience. <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login">Click here to login</a>
                        </p>
                        <p class="p-relative mb-3">
                            Don't have an Account yet? <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login">Join us here.</a>
                        </p>
                        <p class="p-relative mb-3">
                            I want to continue as guest.
                        </p>
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
        <form method="post" action="{{route('address.save')}}">
        @csrf
            @if ($isTemp !=1)
                <div class="address-billing-wrapper">
                    <div class="custom-card-block mb-4">
                        <div class="custom-card-header">
                            <h3>Billing List Detials</h3>
                        </div>
                        <div class="custom-card-body">
                            <div class="row align-items-center">
                                @foreach ($billingAddresses as $address)
                                <div class="col-md-4 mb-3">
                                    <div class="card">                        
                                        <div class="custome-radio">
                                            <input class="form-check-input" type="radio" name="billing_address" value="{{$address->id}}" id="{{$address->id}}">
                                            <label class="form-check-label label_info" for="{{$address->id}}"></label>
                                        </div>
                                        <div class="card-body">
                                        <h4 class="card-title">{{$address->name}}</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">{{$address->mobile}}</h6>
                                        <p class="card-text">{{$address->address}}</p>
                                        <p class="card-text">{{$address->city.", ".$address->state.", ".$address->country }} ({{$address->zipcode}})</p> 
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="card-link" data-toggle="modal" data-target="#exampleModal11">Edit</a>
                                            <a href="#" class="card-link">Delete</a>
                                        </div>                        
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            <div class="address-billing-wrapper">
                <div class="custom-card-block mb-4">
                    <div class="custom-card-header">
                        <h4>Shipping List Detials</h4>
                    </div>
                    <div class="custom-card-body">
                        <div class="row align-items-center">
                            @foreach ($shippingAddresses as $address)
                            <div class="col-md-4 mb-3">
                                <div class="card">                        
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="billing_address" value="{{$address->id}}" id="{{$address->id}}">
                                        <label class="form-check-label label_info" for="{{$address->id}}"></label>
                                    </div>
                                    <div class="card-body">
                                    <h4 class="card-title">{{$address->name}}</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$address->mobile}}</h6>
                                    <p class="card-text">{{$address->address}}</p>
                                    <p class="card-text">{{$address->city.", ".$address->state.", ".$address->country }} ({{$address->zipcode}})</p> 
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="card-link">Edit</a>
                                        <a href="#" class="card-link">Delete</a>
                                    </div>                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
</div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_s1">
                                <h4>Billing Details</h4>
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control bill" name="bill_name" id="bill_name" value="" placeholder="Name *">
                            </div>
                            <div class="form-group">
                                <input class="form-control bill" required="" type="text" name="bill_phone" id="bill_phone" value="" placeholder="Phone *">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control bill" name="bill_address" id="bill_address" required="" value="" placeholder="Address *">
                            </div>
                            <div class="form-group">
                                <input class="form-control bill" required="" type="text" id="bill_city" name="bill_city" placeholder="City / Town *">
                            </div>
                            <div class="form-group">
                                <input class="form-control bill" required="" type="text" id="bill_state" name="bill_state" placeholder="State / County *">
                            </div>
                            <div class="form-group">
                                <input class="form-control bill" required="" type="text" id="bill_zipcode" name="bill_zipcode" placeholder="Postcode / ZIP *">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="heading_s1 p-relative">
                                <h4>Shipping Details</h4>
                                <div class="checkinputforsameinfo custome-checkbox">
                                    <input type="checkbox" id="filladdress" name="filladdress" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="form-check-input"/>
                                    <label class="form-check-label label_info" for="filladdress">Same As Billing Address</label>
                                </div>
                            </div>
                            <div class="collapse in show" id="collapseExample">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control ship" id="ship_name" name="ship_name" value="" placeholder="Name *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control ship" required="" type="text" id="ship_phone" name="ship_phone" value="" placeholder="Phone *">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control ship" name="ship_address" id="ship_address" required="" value="" placeholder="Address *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control ship" required="" type="text" id="ship_city" name="ship_city" placeholder="City / Town *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control ship" required="" type="text" id="ship_state" name="ship_state" placeholder="State / County *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control ship" required="" type="text" id="ship_zipcode" name="ship_zipcode" placeholder="Postcode / ZIP *">
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>

                <div class="col-md-6">
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
                                <tr>
                                    <td>Blue Dress For Woman <span class="product-qty">x 2</span></td>
                                    <td>$90.00</td>
                                </tr>
                                <tr>
                                    <td>Lether Gray Tuxedo <span class="product-qty">x 1</span></td>
                                    <td>$55.00</td>
                                </tr>
                                <tr>
                                    <td>woman full sliv dress <span class="product-qty">x 3</span></td>
                                    <td>$204.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal">$349.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal">$349.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="heading_s1">
                            <h4>Payment</h4>
                        </div>
                        <div class="payment_option">
                            <!-- <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div> -->
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5" checked="">
                                <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-fill-out btn-block">Place Order</a>
                </div>
                </div>

                <!-- <div class="text-center col-md-12">
                <button type="submit" class="btn btn-fill-out col-md-4">Continue</a>
                </div> -->
            </div>
        </form>  
    </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Hello
        </div>
      </div>
    </div>
  </div>
<!-- END SECTION SHOP -->
<script>
$(document).ready(function(){
    $("#filladdress").on("click", function(){
         if (this.checked) { 
                $("#ship_name").val($("#bill_name").val());
                $("#ship_phone").val($("#bill_phone").val());
                $("#ship_address").val($("#bill_address").val());
                $("#ship_city").val($("#bill_city").val());  
                $("#ship_state").val($("#bill_state").val());  
                $("#ship_zipcode").val($("#bill_zipcode").val());                         
    }
    else {
        $("#ship_name").val('');
        $("#ship_phone").val('');
        $("#ship_address").val('');
        $("#ship_city").val('');
        $("#ship_state").val('');
        $("#ship_zipcode").val('');           
    }
    });
    $('input:radio[name="shipping_address"]').change(
    function(){
        if ($(this).is(':checked')) {
            $(".ship").removeAttr("required");
        }
    });
    $('input:radio[name="billing_address"]').change(
    function(){
        if ($(this).is(':checked')) {
            $(".bill").removeAttr("required");
        }
    });
});
</script>
@endsection