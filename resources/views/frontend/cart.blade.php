@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="section">
    <div class="container">
        <table class="cart-box">
            <thead>
                <tr>
                    <th class=""><span class="d-none d-md-block">Product Image</span> <span class="d-block d-md-none">Products</span></th>
                    <th class="d-none d-md-table-cell">Product Name</th>
                    <th class="d-none d-md-table-cell">Unit Price</th>
                    <th class="d-none d-md-table-cell">Quantity</th>
                    <th class="d-none d-md-table-cell">Total</th>
                    <th class="d-none d-md-table-cell">Action</th>
                </tr>
            </thead>
            <tbody>
            @php
                $i=1;    
            @endphp
            @foreach ($products as $product)
            <tr id="row{{$product->rowId}}">
                <td>
                    <div class="pa-cart-img">
                        <img src="{{ url('') }}/upload/product/{{@$product->options->image}}" alt="product1" class="img-fluid">
                    </div>
                </td>
                <td>{{$product->name}}</td>
                <td>$ {{number_format($product->price,2)}}</td>
                <td>
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" id ="sub{{$product->id}}" class="minus remove-from-cart" productId="{{$product->id}}">
                            <input type="text" name="quantity" value="{{$product->qty}}" title="Qty" class="qty" id ="qty{{$product->id}}" size="4" productId="{{$product->id}}">
                            <input type="button" value="+" id ="add{{$product->id}}" class="plus add-to-cart" productId="{{$product->id}}">
                        </div>
                    </div>
                </td>
                <td>
                    <label class="total{{$product->id}}">$ {{number_format($product->price * $product->qty, 2)}}</label>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-secondary cart-btn item_remove" >
                        <input type="hidden" class="rowId" value="{{$product->rowId}}">
                        <i class="linearicons-trash2"></i>
                    </button>
                    <!-- <a href="">
                        <button type="button" class="btn btn-outline-secondary cart-btn"><i class="fa fa-eye"></i></button>
                    </a> -->
                </td>
            </tr>
            @php
                $i++;    
            @endphp
            @endforeach
            <tr>
                <td></td>
                <td colspan="4" class="cart-total text-left text-lg-right">
                    <span>Sub Total:</span>
                </td>
                <td class="cart-total-price">
                    <span><label id="subQty" >${{$cartSubTotal}}</label></span>
                </td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <div class="grand-total">
            <!-- <p>
                Apply Coupon Code Get 10% Discount :
                <span><input type="text" id="couponcode"></span>
                <a href="" data-toggle="modal" data-target="#modalLRForm" class="btn btn-outline-secondary">Apply</a>
            </p> -->
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
            <div class="cart-row">
                <span>Grand total :</span>
                <span id="grandtotal" >
                    <input type="hidden" name="grand_total" id="grand_total" value="{{$cartSubTotal}}">
                    <span class="grand_total">$ {{$cartSubTotal}}</span> 
                </span>
            </div>
            <div class="pt-3">
                <a href="{{url('/product')}}" class="btn btn-outline-secondary rounded">Continue Shopping</a>
                <a href="{{url('/checkout/address')}}" class="btn btn-fill-out proceed-btn position-relative">Proceed to checkout <i class="linearicons-chevron-right"></i></a>            
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
                    var  productTotal = result.data.productQty * result.data.productPrice;
                    $('.total'+productId).html('$'+ Number(productTotal).toFixed(2));
                    $('#qty'+productId).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);
                
                    $('#subQty').html(result.data.cartSubTotal);
                    $('.grand_total').html(result.data.cartSubTotal);
                    $('#grand_total').val(result.data.cartSubTotal);
                }
            });
        });
        /* Decrease product quantity functionality */
        jQuery('.remove-from-cart').click(function(e) {
            var productId = $( this ).attr('productId');
            
            if($('#qty'+productId).val() == 1)
            return false;

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
                    $('.total'+productId).html('$'+ Number(productTotal).toFixed(2));
                    $('#qty'+productId).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);

                    $('#subQty').html(result.data.cartSubTotal);
                    $('.grand_total').html(result.data.cartSubTotal);
                    $('#grand_total').val(result.data.cartSubTotal);
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
                success: function(result){
                    $('#subQty').html(result.data.cartSubTotal);
                    $("#row"+rowId).remove();
                    $('.grand_total').html(result.data.cartSubTotal);
                    $('#grand_total').val(result.data.cartSubTotal);
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
                    var  productTotal = result.data.productQty * result.data.productPrice;
                    $('.total'+productId).html('$'+ Number(productTotal).toFixed(2));
                    $(this).val(result.data.productQty);
                    $('.cart-count').html(result.data.cartCount);

                    $('#subQty').html(result.data.cartSubTotal);
                    $('.grand_total').html(result.data.cartSubTotal);
                    $('#grand_total').val(result.data.cartSubTotal);
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