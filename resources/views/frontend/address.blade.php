@extends('layouts.front')
@section('content')
<style>
.placeholder-select select:required:invalid {
  color: gray;
}
.placeholder-select option[value=""][disabled] {
  display: none;
}
.placeholder-select option {
  color: black;
}
</style>
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
            <input type="hidden" name="isNewAddress" id="isNewAddress" @if(isset($billingAddresses)) value="0" @else value="1" @endif>
            <div class="row">
                <div class="col-md-6">
                    @if(isset($billingAddresses))
                        <div class="">
                            <div class="address-billing-wrapper">
                                <div class="heading_s1">
                                    <h4>Current Address</h4>
                                </div>
                                <div class="custom-card-block mb-4 mt-3">
                                    <div class="align-items-center">
                                        <div class="card-body">
                                            <input type="hidden" value="{{$billingAddresses->id}}" name="billing_address">
                                            <h5 class="card-title">{{$billingAddresses->name}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{$billingAddresses->mobile}}</h6>
                                            <p class="card-text">{{$billingAddresses->address}}</p>
                                            <p class="card-text">{{$billingAddresses->city.", ".$billingAddresses->state.", ".$billingAddresses->country }} ({{$billingAddresses->zipcode}})</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a class="btn btn-sm btn-fill-out" title="Add new address" data-toggle="collapse" href="#addressForm" role="button" aria-expanded="false" aria-controls="addressForm" id="addressCollapse">
                                + Update New
                            </a>
                        </div> 
                    @endif
                    {{-- Address Form--}}
                    <input type="hidden" id="holder" value="bill_state">
                    <div class="mt-4 address-form collapse @if(isset($billingAddresses)) in  @else show @endif" id="addressForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading_s1">
                                    <h4>Billing Details</h4>
                                </div>
                                {{-- @if ($isTemp !=1)
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
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <a href="#" class="card-link"><i class="linearicons-pencil5"></i> Edit</a>
                                                            <a href="#" class="card-link"><i class="linearicons-trash2"></i> Delete</a>
                                                        </div>                         
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <a class="btn btn-sm btn-fill-out" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                        + Add New
                                    </a>
                                </div>
                                @endif --}}
                                {{-- <div class="shipping-form collapse @if ($isTemp !=0) in show @endif" id="collapseExample2"> --}}
                                    <div class="pb-3">
                                        <div class="form-group">
                                            {{-- <input type="hidden" value="{{ $billingAddresses->id}}" name="billing_address" > --}}
                                            <input type="text" maxlength="150" required="" class="form-control bill" name="bill_name" id="bill_name" @if(!isset($billingAddresses)) value="{{ $userData->name ?? '' }}" @endif placeholder="Name *">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control bill" required="" type="text" name="bill_phone" id="bill_phone" @if(!isset($billingAddresses)) value="{{ $userData->mobile ?? '' }}" @endif placeholder="Mobile *">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control bill" maxlength="150" required="" type="email" name="bill_email" id="bill_email" @if(!isset($billingAddresses)) value="{{ $userData->email ?? '' }}" @endif placeholder="Email *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control bill" name="bill_address" id="bill_address" required="" value="" placeholder="Address *">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control bill" maxlength="150" required="" type="text" id="bill_city" name="bill_city" value="" placeholder="City / Town *">
                                        </div>
                                        <div class="form-group">
                                        <form action="" method="post" id="shippingd">
                                        <div class="custom_select">
                                            <select class="form-control bill bill_state placeholder-select" value="" id="bill_state" name="bill_state">
                                            
                                            <option disabled selected >Select state</option>
                                                @foreach($states as $state)
                                                <option value="{{$state->name}}" data-value="{{$state->zone_id}}">{{$state->name}}</option>
                                                @endforeach
                                               
                                            </select>
                                            </div>
                                        <form>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control bill" required="" type="text" id="bill_zipcode" name="bill_zipcode" value=""  placeholder="Postcode / ZIP *">
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            </div>
                            <div class="col-md-12">
                                <div class="heading_s1 p-relative">
                                    <h4>Shipping Details</h4>
                                    <div class="checkinputforsameinfo custome-checkbox">
                                        <input type="checkbox" id="filladdress" name="filladdress" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="form-check-input" checked />
                                        <label class="form-check-label label_info" for="filladdress">Same As Billing Address</label>
                                    </div>
                                </div>
                                <div class="collapse in" id="collapseExample">
                                {{--  @if ($isTemp !=1)
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
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <a href="#" class="card-link"><i class="linearicons-pencil5"></i> Edit</a>
                                                            <a href="#" class="card-link"><i class="linearicons-trash2"></i> Delete</a>
                                                        </div>                         
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <a class="btn btn-sm btn-fill-out" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                        + Add New
                                    </a>
                                </div>
                                @endif --}}
                                {{-- <div class="shipping-form collapse @if ($isTemp !=0) in show @endif" id="collapseExample3"> --}}
                                    <div class="pb-3">
                                        <div class="form-group">
                                            <input type="text" maxlength="150" required="" class="form-control ship" id="ship_name" name="ship_name" value="" placeholder="Name *">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control ship" required="" type="text" id="ship_phone" name="ship_phone" value="" placeholder="Mobile *">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control ship" maxlength="150" required="" type="email" name="ship_email" id="ship_email" value="" placeholder="Email *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control ship" name="ship_address" id="ship_address" required="" value="" placeholder="Address *">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control ship" maxlength="150" required="" type="text" id="ship_city" name="ship_city" value="" placeholder="City / Town *">
                                        </div>
                                        <div class="form-group">
                                        <form action="" method="post" id="shippingd">
                                        <div class="custom_select">
                                            <select class="form-control ship ship_state placeholder-select" value="" id="ship_state" name="ship_state">
                                            <option disabled selected >Select state</option>
                                                @foreach($states as $state)
                                                <option value="{{$state->name}}" data-value="{{$state->zone_id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        <form>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control ship" required="" type="text" id="ship_zipcode" name="ship_zipcode" value="" placeholder="Postcode / ZIP *">
                                        </div>
                                        
                                    </div>
                                {{-- </div> --}}
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
                {{-- Address Form --}}
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
                                        <td>${{number_format($product->price * $product->qty, 2)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sub Total</th>
                                        <td class="product-subtotal">${{number_format($cartSubTotal, 2)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td class="shipping_price">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class="product-subtotal" id="total">${{number_format($cartSubTotal, 2)}}</td>
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
                                    <label class="form-check-label" for="exampleRadios5">Pay via Paypal</label>
                                    <p data-method="paypal" class="payment-text">You can pay with your credit card if you don't have a PayPal account.</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="place_order" class="btn btn-fill-out btn-block">Place Order</button>
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
    getShippingOnOldAddress();

        $('#place_order').attr('disabled',true);

        $('#'+$("#holder").val()).focus(function() {
        getShippingPrice();
        });

        @if(isset($zone[0]))
        function getShippingOnOldAddress(){
            if({{ $zone[0] > 0 }}) {
            shippingajax({{$zone[0]}});
        }}
        @else
        function getShippingOnOldAddress(){
        getShippingPrice();
        }
        @endif

        function getShippingPrice() {
        $('#'+$("#holder").val()).on('change', function() {
            var zoneid = $('#'+$("#holder").val()).find(':selected').attr('data-value')
            shippingajax(zoneid);
        });
        }

        function shippingajax(zone) {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            var url = "{{route('shipping.price')}}";
            $.ajax({
            type: "POST",
            url: url,
            data: {zone_id :  zone},
            success: function(data) {
                if(data == 0){
                    $('.shipping_price').html("Currently Shipping Not Available !")
                    $('#place_order').attr('disabled',true);
                }
                else{
                $('.shipping_price').html('$ '+data)
                $('#place_order').attr('disabled', false);
                $('<input>', {
                    type: 'hidden',
                    id: 'shipping',
                    name: 'shipping',
                    value: data
                }).appendTo('#checkoutForm');
                var subtotal = +data + +{{$cartSubTotal}}
                $('#total').html('$ '+(subtotal.toLocaleString('en-US', {maximumFractionDigits:2})))
                }
            }
            });
        }
    

    /* To Handle Browser Back From Payment page*/
    if(performance.navigation.type == 2){
        location.reload(true);
    }
    /* To Handle Browser Back */
    $("#addressCollapse").click(function() {
        if (!$("#addressForm").hasClass('show')) {
            //open case 
            $(".ship").show(''); 
            $(".bill").show('');
            $("#addressCollapse").text('Close');
            $("#addressCollapse").attr('title', 'Continue with the current address.');
            $("#isNewAddress").val(1);
            getShippingPrice();
        } else {
            //close case
            $(".ship").val(''); 
            $(".bill").val('');
            $(".error").hide('');
            $("#addressCollapse").text('+ Add New');
            $("#isNewAddress").val(0);
            getShippingOnOldAddress();
        }
    });

    
    /* on load function check for bill and ship is checked than remove require */
    
   /*  if ($('input:radio[name="shipping_address"]').is(':checked')) {
        $(".ship").removeAttr("required");
    }

    if ($('input:radio[name="billing_address"]').is(':checked')) {
        $(".bill").removeAttr("required");
    } */


    /*Same as Bill address functionality*/
    $("#filladdress").on("click", function(){
        if (this.checked) {
            $(".ship").removeAttr("required"); 
            $("#ship_email").val($("#bill_email").val());
            $("#ship_name").val($("#bill_name").val());
            $("#ship_phone").val($("#bill_phone").val());
            $("#ship_address").val($("#bill_address").val());
            $("#ship_city").val($("#bill_city").val());  
            $("#ship_state").val($("#bill_state").val());  
            $("#ship_zipcode").val($("#bill_zipcode").val());
            $("#holder").val("bill_state");
            $('.shipping_price').html('$ 0.00')
            getShippingPrice();
        } else {
            $("#ship_name").val('');
            $("#ship_phone").val('');
            $("#ship_address").val('');
            $("#ship_city").val('');
            $("#ship_state").val('');
            $("#ship_zipcode").val('');
            $("#ship_email").val('');           
            $("#holder").val("ship_state");
            $('.shipping_price').html('$ 0.00')
            getShippingPrice(); 
        }
    });

    /*
     * Bill Address:- Remove require from form in
     * case of value selected from address list
    */
    /* $('input:radio[name="shipping_address"]').change(
    function(){
        if ($(this).is(':checked')) {
            $(".ship").removeAttr("required");
        }
    }); */

    /*
     * Ship Address:- Remove require from form in
     * case of value selected from address list
    */
    /* $('input:radio[name="billing_address"]').change(
    function(){
        if ($(this).is(':checked')) {
            $(".bill").removeAttr("required");
        }
    }); */
    
    jQuery.validator.addMethod("phonenu", function (value, element) {
        if ( /^\d{3}-?\d{3}-?\d{4}$/g.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Please enter a valid mobile number");

    jQuery.validator.addMethod("postcode", function (value, element) {
        if ( /^[a-zA-Z0-9]{5,6}$/g.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Please enter a valid postcode");

    
    jQuery("#checkoutForm").validate({
        rules: {
            ship_email: {
                /* required: function() { 
                  return !$('input:radio[name="shipping_address"]').is(':checked'); 
                }, */
                required: true,
                email: true
            },
            ship_phone: {
                /* required: function() { 
                  return !$('input:radio[name="shipping_address"]').is(':checked'); 
                }, */
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 14
                //phonenu: true
            },
            bill_email: {
                /* required: function() { 
                  return !$('input:radio[name="billing_address"]').is(':checked'); 
                }, */
                required: true,
                email: true
            },
            bill_phone: {
                /* required: function() { 
                  return !$('input:radio[name="billing_address"]').is(':checked'); 
                }, */
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 14
                //phonenu: true
            },
            bill_zipcode: {
                /* required: function() { 
                  return !$('input:radio[name="billing_address"]').is(':checked'); 
                }, */
                required: true,
                postcode: true
            },
            ship_zipcode: {
                /* required: function() { 
                  return !$('input:radio[name="billing_address"]').is(':checked'); 
                }, */
                required: true,
                postcode: true
            },
            ship_name: {
                required: true
            },
            ship_city: {
                required: true
            },
            ship_state: {
                required: true
            },
            bill_name: {
                required: true
            },
            bill_city: {
                required: true
            },
            bill_state: {
                required: true
            },
            bill_address: {
                required: true,
                minlength: 10,
                maxlength: 400
            },
            ship_address: {
                required: true,
                minlength: 10,
                maxlength: 400
            }
        },
        messages: {
            ship_email: "Please enter a valid email address",
            ship_phone: "Please enter a valid phone number",
            bill_phone: "Please enter a valid phone number",
            bill_email: "Please enter a valid email address",
            bill_zipcode: "Please enter a valid postcode",
            ship_zipcode: "Please enter a valid postcode",
            ship_name: "Please enter a valid name",
            ship_city: "Please enter a valid city",
            ship_state: "Please enter a valid state",
            ship_address: "Please enter a valid address",
            bill_name: "Please enter a valid name",
            bill_city: "Please enter a valid city",
            bill_state: "Please enter a valid state",
            bill_address: "Please enter a valid address",
        },
        submitHandler: function(form) {
            form.submit(); 
        }
    });
});
</script>
@endsection
