@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                	<table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ url('') }}/upload/product/{{@$product->options->image}}" alt="product1"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">{{$product->name}}</a></td>
                                    <td class="product-price" data-title="Price">$ {{$product->price}}</td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus remove-from-cart" productId="{{$product->id}}">
                                            
                                            <input type="text" name="quantity" value="{{$product->qty}}" title="Qty" class="qty" id ="qty{{$product->id}}" size="4" productId="{{$product->id}}">
                                            
                                            <input type="button" value="+" class="plus add-to-cart" productId="{{$product->id}}">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">$ {{ $product->price * $product->qty}}</td>
                                    <td class="product-remove" data-title="Remove">
                                        <a href="#" class="item_remove">
                                            <input type="hidden" class="rowId" value="{{$product->rowId}}">
                                            <i class="ti-close"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="border p-3 p-md-4">
                    <div class="heading_s1 mb-3">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">Cart Subtotal</td>
                                    <input type="hidden" name="grand_total" value="{{$cartSubTotal}}">
                                    <td class="cart_total_amount">$ {{$cartSubTotal}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Total</td>
                                    <td class="cart_total_amount"><strong>$ {{$cartSubTotal}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{url('/checkout/address')}}" class="btn btn-fill-out">Proceed To CheckOut</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    $('#qty'+productId).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);
                }
            });
        });
        /* Remove from cart functionality */
        jQuery('.remove-from-cart').click(function(e) {
            var productId = $( this ).attr('productId');
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
                    $('#qty'+productId).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);
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
                    $(this).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);
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