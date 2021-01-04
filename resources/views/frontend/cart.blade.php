@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="section">
    <div class="container">
        <div class="cart-for-mobile d-block d-lg-none">
            @php
                $i=1;    
            @endphp
            @foreach ($products as $product)
            <div class="row m-0 mb-4 contact_style3 pl-0 pr-0 row{{$product->rowId}}" id="row{{$product->rowId}}">
                <div class="col-md-5 col-lg-3 col-xl-3 cart-img-hr">
                    <img src="{{ url('') }}/upload/product/{{@$product->options->image}}" alt="product1" class="cart-for-mobile-img">
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                        <div class="d-flex justify-content-between">
                            <div class="text-left cart-product-description">
                                <h5 class="mb-3">{{$product->name}}</h5>
                                <p>
                                    <span><strong>Unit Price :</strong></span>
                                    <span class="total{{$product->id}}">
                                        $ {{number_format($product->price,2)}}
                                    </span>
                                </p>
                            </div>
                            <div>
                                <button type="button" class="btn btn-outline-secondary cart-btn item_remove ml-0">
                                    <input type="hidden" class="rowId" value="{{$product->rowId}}">
                                    <i class="linearicons-trash2 m-auto"></i>
                                </button>                                
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" id ="msub{{$product->id}}" class="sub{{$product->id}} minus remove-from-cart" productId="{{$product->id}}" @if($product->qty == 1) style="cursor: -webkit-not-allowed; cursor: not-allowed;" @endif>
                                        <input type="number" min="0" step="1" name="quantity" pattern="/^[1-9]\d*$/" value="{{$product->qty}}" title="Qty" class="qty qty{{$product->id}}" id ="" size="4" productId="{{$product->id}}">
                                        <input type="button" value="+" id ="add{{$product->id}}" class="plus add-to-cart" productId="{{$product->id}}">
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0">
                                <strong>Total :</strong>
                                <span class="total{{$product->id}}"> $ {{number_format($product->price * $product->qty, 2)}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $i++;    
            @endphp
            @endforeach
        </div>
        <table class="cart-box d-none d-lg-table">
            <thead>
                <tr class="mb-0">
                    <th class="text-center"><span class="d-none d-md-block">Product Image</span> <span class="d-block d-md-none">Products</span></th>
                    <th class="d-none d-lg-table-cell text-center">Product Name</th>
                    <th class="d-none d-lg-table-cell text-center">Unit Price</th>
                    <th class="d-none d-lg-table-cell text-center">Quantity</th>
                    <th class="d-none d-lg-table-cell text-center">Total</th>
                    <th class="d-none d-lg-table-cell text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @php
                $i=1;    
            @endphp
            @foreach ($products as $product)
            <tr id="row{{$product->rowId}}" class="row{{$product->rowId}}">
                <td class="text-center">
                    <div class="pa-cart-img">
                        <img src="{{ url('') }}/upload/product/{{@$product->options->image}}" alt="product1" class="img-fluid">
                    </div>
                </td>
                <td class="text-center">{{$product->name}}</td>
                <td class="text-center">$ {{number_format($product->price,2)}}</td>
                <td class="text-center">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" id ="sub{{$product->id}}" class="sub{{$product->id}} minus remove-from-cart" productId="{{$product->id}}" @if($product->qty == 1) style="cursor: -webkit-not-allowed; cursor: not-allowed;" @endif>
                            <input type="number" min="0" step="1" name="quantity" pattern="/^[1-9]\d*$/" value="{{$product->qty}}" title="Qty" class="qty qty{{$product->id}}" id ="" size="4" productId="{{$product->id}}">
                            <input type="button" value="+" id ="add{{$product->id}}" class="plus add-to-cart" productId="{{$product->id}}">
                        </div>
                    </div>
                </td>
                <td class="text-center cart-total-w">
                    <label class="total{{$product->id}}">$ {{number_format($product->price * $product->qty, 2)}}</label>
                </td>
                <td class="text-center action-btn-wrap"> 
                    <button type="button" class="btn btn-outline-secondary cart-btn item_remove" >
                        <input type="hidden" class="rowId" value="{{$product->rowId}}">
                        <i class="linearicons-trash2"></i>
                    </button>
                </td>
            </tr>
            @php
                $i++;    
            @endphp
            @endforeach
            </tbody>
        </table>
        <div class="grand-total">
            <div class="cart-row">
                <span>Sub Total:</span> 
                <span><label id="subQty" class="mb-0" >$ {{$cartSubTotal}}</label></span>
            </div>
            <!-- <div class="cart-row">
                Apply Coupon Code Get 10% Discount :
                <span><input type="text" id="couponcode"></span>
                <a href="" data-toggle="modal" data-target="#modalLRForm" class="btn btn-fill-out">Apply</a>
            </div> -->
            <!-- <div class="cart-row">
           {{--  <div class="cart-row">
                <span>Shipping charges :</span>
                <span id="shiptotal">$ 0.00</span>
            </div>
            <div class="cart-row">
                <span>Discount :</span>
                <span id="discount">$ 0.00</span>
            </div> --}}
           -->
            <div class="cart-row grand-total-row">
                <span>Grand Total :</span>
                <span id="grandtotal" class="p-0">
                    <input type="hidden" name="grand_total" id="grand_total" value="{{$cartSubTotal}}">
                    <span class="grand_total">$ {{$cartSubTotal}}</span> 
                </span>
            </div>
            <div class="pt-3">
                <a href="{{url('/product')}}" class="btn btn-outline-secondary rounded cart-btn-secondary mb-1">Continue Shopping</a>
                <a href="{{url('/checkout/address')}}" class="btn btn-fill-out proceed-btn position-relative cart-btn-checkout align-top">Proceed to checkout <i class="linearicons-chevron-right"></i></a>            
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP -->
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function(){
        /* Add to cart functionality */
        jQuery('.add-to-cart').click(function(e) {
            var productId = $( this ).attr('productId');
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/add-cart') }}",
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    
                    $('.cart-count').html(result.data.cartCount);
                    var icon = 'success';

                    if (result.status == false) {
                        icon = 'info';
                    } 

                    Swal.fire({
                        position: 'bottom-end',
                        icon: icon,
                        title: result.message,
                        showConfirmButton: false,
                        timer: 2500,
                        customClass: {
                            container: 'custom-success-popup-container',
                            popup: 'custom-success-popup',
                        }
                    });
                
                    var  productTotal = result.data.productQty * result.data.productPrice;
                    $('.total'+productId).html('$ '+ Number(productTotal).toFixed(2));
                    $('.qty'+productId).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);
                    if(result.data.productQty > 1) {
                        $('.sub'+productId).css("cursor", "pointer");
                    } else {
                        $('#sub'+productId).css("cssText", "cursor: not-allowed  !important;");
                    }
                    $('#subQty').html('$ '+result.data.cartSubTotal);
                    $('.grand_total').html('$ '+result.data.cartSubTotal);
                    $('#grand_total').val('$ '+result.data.cartSubTotal);
                }
            });
        });
        /* Decrease product quantity functionality */
        jQuery('.remove-from-cart').click(function(e) {
            var productId = $( this ).attr('productId');
            
            if($('.qty'+productId).val() == 1){
                $('#sub'+productId).css("cssText", "cursor: not-allowed  !important;");
            return false;
            }

            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/remove-from-cart') }}",
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    var  productTotal = result.data.productQty * result.data.productPrice;
                    $('.total'+productId).html('$ '+ Number(productTotal).toFixed(2));
                    $('.qty'+productId).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);
                    if(result.data.productQty > 1) {
                        $('#sub'+productId).css("cursor", "pointer");
                    } else {
                        $('#sub'+productId).css("cssText", "cursor: not-allowed  !important;");
                    }
                    $('#subQty').html('$ '+result.data.cartSubTotal);
                    $('.grand_total').html('$ '+result.data.cartSubTotal);
                    $('#grand_total').val('$ '+result.data.cartSubTotal);
                }
            });
        });

        /* Remove product from cart functionality */
        jQuery('.item_remove').click(function(e) {
            var rowId = $( this ).children('.rowId').val(); 
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/remove-product') }}",
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    rowId : rowId
                },
                success: function(result) {
                    if( result.data.cartCount == 0 ) {
                        location.reload(true);
                    }
                    $('#subQty').html('$ '+result.data.cartSubTotal);
                    $(".row"+rowId).remove();
                    $('.grand_total').html('$ '+result.data.cartSubTotal);
                    $('#grand_total').val('$ '+result.data.cartSubTotal);
                }
            });
        });

        /* Update cart functionality */
        $(".qty").blur(function(e) {
            var productId = $( this ).attr('productId');
            var qty = $(this).val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/update-cart') }}", 
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId,
                    qty : qty
                },
                success: function(result) {
                    
                    var icon = 'info';

                    if (result.status == true) {
                        console
                        icon = 'success';
                        var  productTotal = result.data.productQty * result.data.productPrice;
                        $('.total'+productId).html('$ '+ Number(productTotal).toFixed(2));
                        $(this).val(result.data.productQty);
                        $('.cart-count').html(result.data.cartCount);
                        if(result.data.productQty > 1) {
                            $('#sub'+productId).css("cursor", "pointer");
                        } else {
                            $('#sub'+productId).css("cssText", "cursor: not-allowed  !important;");
                        }
                        $('#subQty').html('$ '+result.data.cartSubTotal);
                        $('.grand_total').html('$ '+result.data.cartSubTotal);
                        $('#grand_total').val('$ '+result.data.cartSubTotal);
                    } else {
                        $('.qty'+productId).val(result.data.productQty);
                    }

                    Swal.fire({
                        position: 'bottom-end',
                        icon: icon,
                        title: result.message,
                        showConfirmButton: false,
                        timer: 2500,
                        customClass: {
                            container: 'custom-success-popup-container',
                            popup: 'custom-success-popup',
                        }
                    });
                }
            });
        });

        /* Add address functionality */
        jQuery('#addshipAddress').click(function(e) {
            var address = $( '#shipAddress' ).val();
            var user_id = $( '#user_id' ).val();
            var isTempUser = $( '#isTempUser' ).val();
            var type = 1;
            
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/api/address/add') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    address : address,
                    type : type,
                    user_id : user_id,
                    temp_user : isTempUser
                },
                success: function(result){
                    alert("Address successfully added to the list.");
                    location.reload(true);
                }
            });
        });

        jQuery('#addBillAddress').click(function(e) 
        {
            var address = $( '#billAddress' ).val();
            var user_id = $( '#user_id' ).val();
            var isTempUser = $( '#isTempUser' ).val();
            var type = 2;
            
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/api/address/add') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    address : address,
                    type : type,
                    user_id : user_id,
                    temp_user : isTempUser
                },
                success: function(result){
                    alert("Address successfully added to the list.");
                    location.reload(true);
                }
            });
        });
    });
</script>
@endsection
