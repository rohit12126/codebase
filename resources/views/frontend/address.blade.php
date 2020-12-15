@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        @if ($isTemp !=0)
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="toggle_info">
                        <!-- <span><i class="linearicons-user"></i>Returning customer? <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login">Click here to login</a></span> -->
                        <p class="p-relative mb-3">
                            Returning Customer? <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login" id="loginModal">Login here</a> for a better experience.
                        </p>
                        <p class="p-relative mb-3">
                            Don't have an Account yet? <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login">Join us .</a>
                        </p>
                        <p class="p-relative mb-3">
                            I want to continue as guest.
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <!-- <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div> -->
        <form method="post" action="{{route('address.save')}}" id="checkoutForm">
        @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_s1">
                                <h4>Billing Details</h4>
                            </div>
                            @if ($isTemp !=1)
                            <div class="address-billing-wrapper">
                                <div class="custom-card-block mb-3">
                                    <div class="custom-card-body">
                                        <div class="row align-items-center">
                                            @foreach ($billingAddresses as $address)
                                            <div class="col-md-12 mb-3">
                                                <div class="card">                        
                                                    <div class="custome-radio">
                                                        <input class="form-check-input" type="radio" name="billing_address" value="{{$address->id}}" id="{{$address->id}}">
                                                        <label class="form-check-label label_info" for="{{$address->id}}"></label>
                                                    </div>
                                                    <div class="card-body">
                                                    <h5 class="card-title">{{$address->name}}</h5>
                                                    <h6 class="card-subtitle mb-2 text-muted">{{$address->mobile}}</h6>
                                                    <p class="card-text">{{$address->address}}</p>
                                                    <p class="card-text">{{$address->city.", ".$address->state.", ".$address->country }} ({{$address->zipcode}})</p> 
                                                    {{-- <div class="d-flex justify-content-end align-items-center">
                                                        <a href="#" class="card-link"><i class="linearicons-pencil5"></i> Edit</a>
                                                        <a href="#" class="card-link"><i class="linearicons-trash2"></i> Delete</a>
                                                    </div>                         --}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <a class="btn btn-sm btn-danger" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                    + Add New
                                </a>
                            </div>
                            @endif

                            <div class="shipping-form collapse @if ($isTemp !=0) in show @endif" id="collapseExample2">
                                <div class="pt-3 pb-3">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control bill" name="bill_name" id="bill_name" value="" placeholder="Name *">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control bill" required="" type="text" name="bill_phone" id="bill_phone" value="" placeholder="Phone *">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control bill" required="" type="email" name="bill_email" id="bill_email" value="" placeholder="Email *">
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
                            @if ($isTemp !=1)
                            <div class="address-billing-wrapper">
                                <div class="custom-card-block mb-4">
                                    <div class="custom-card-body">
                                        <div class="row align-items-center">
                                            @foreach ($shippingAddresses as $address)
                                            <div class="col-md-12 mb-3">
                                                <div class="card">                        
                                                    <div class="custome-radio">
                                                        <input class="form-check-input" type="radio" name="shipping_address" value="{{$address->id}}" id="{{$address->id}}">
                                                        <label class="form-check-label label_info" for="{{$address->id}}"></label>
                                                    </div>
                                                    <div class="card-body">
                                                    <h5 class="card-title">{{$address->name}}</h5>
                                                    <h6 class="card-subtitle mb-2 text-muted">{{$address->mobile}}</h6>
                                                    <p class="card-text">{{$address->address}}</p>
                                                    <p class="card-text">{{$address->city.", ".$address->state.", ".$address->country }} ({{$address->zipcode}})</p> 
                                                    {{-- <div class="d-flex justify-content-end align-items-center">
                                                        <a href="#" class="card-link"><i class="linearicons-pencil5"></i> Edit</a>
                                                        <a href="#" class="card-link"><i class="linearicons-trash2"></i> Delete</a>
                                                    </div> --}}                        
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <a class="btn btn-sm btn-danger" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                    + Add New
                                </a>
                            </div>
                            @endif
                            <div class="shipping-form collapse @if ($isTemp !=0) in show @endif" id="collapseExample3">
                                <div class="pt-3 pb-3">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control ship" id="ship_name" name="ship_name" value="" placeholder="Name *">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control ship" required="" type="text" id="ship_phone" name="ship_phone" value="" placeholder="Phone *">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control ship" required="" type="email" name="ship_email" id="ship_email" value="" placeholder="Email *">
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
                                @foreach ($productList as $product)
                                <tr>
                                    <td>{{$product->name}} <span class="product-qty">x {{$product->qty}}</span></td>
                                    <td>$ {{number_format($product->price * $product->qty, 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal">$ {{number_format($cartSubTotal, 2)}}</td>
                                </tr>
                                {{-- <tr>
                                    <th>Shipping</th>
                                    <td class="shipping_price">$ {{"10.00"}}</td>
                                </tr> --}}
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal">$ {{number_format($cartSubTotal+10, 2)}}</td>
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
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="paypal" checked=''>
                                <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                <p data-method="paypal" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-fill-out btn-block">Place Order</button>
                    <!-- <a href="#" class="btn btn-fill-out btn-block"></a> -->
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
@endsection
@section('scripts')


<script>
$(document).ready(function() {
    /* on load function check for bill and ship is checked than remove require */
    
    if ($('input:radio[name="shipping_address"]').is(':checked')) {
        $(".ship").removeAttr("required");
    }

    if ($('input:radio[name="billing_address"]').is(':checked')) {
        $(".bill").removeAttr("required");
    }


    /*Same as Bill address functionality*/
    $("#filladdress").on("click", function(){
        if (this.checked) {
            $(".ship").removeAttr("required");
            
            $("#ship_name").val($("#bill_name").val());
            $("#ship_phone").val($("#bill_phone").val());
            $("#ship_address").val($("#bill_address").val());
            $("#ship_city").val($("#bill_city").val());  
            $("#ship_state").val($("#bill_state").val());  
            $("#ship_zipcode").val($("#bill_zipcode").val());                         
        } else {
            $("#ship_name").val('');
            $("#ship_phone").val('');
            $("#ship_address").val('');
            $("#ship_city").val('');
            $("#ship_state").val('');
            $("#ship_zipcode").val('');           
        }
    });

    /*
     * Bill Address:- Remove require from form in
     * case of value selected from address list
    */
    $('input:radio[name="shipping_address"]').change(
    function(){
        if ($(this).is(':checked')) {
            $(".ship").removeAttr("required");
        }
    });

    /*
     * Ship Address:- Remove require from form in
     * case of value selected from address list
    */
    $('input:radio[name="billing_address"]').change(
    function(){
        if ($(this).is(':checked')) {
            $(".bill").removeAttr("required");
        }
    });
    
    jQuery("#checkoutForm").validate({
        rules: {
            email: {
                required: function() { 
                  return !$('input:radio[name="shipping_address"]').is(':checked'); 
                },
                email: true
            }
        },
        messages: {
            email: "Please enter a valid email address"
        },
        submitHandler: function(form) {
            form.submit(); 
        }
    });


    //$(window).on('load',function(){
        // $('#myModal').modal('show');
        //$('#exampleModal').modal('show');
    //});
});
</script>
@endsection