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
                    <img src="@if( !  @empty($product->options['configureDetails']['configurationId']))https://uploads.roomle.com/configurations/{{$product->options['configureDetails']['configurationId']}}/perspectiveImage.png @else{{ url('') }}/upload/product/{{@$product->options->image}}@endif" alt="product1" class="cart-for-mobile-img">
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                        <div class="d-flex justify-content-between">
                            <div class="text-left cart-product-description">
                                <h5 class="mb-3">{{$product->name}}</h5>
                                
                                @if( ! @empty($product->options['configureDetails']['partList']))
                                
                                </br><div id="card" data-configId="{{'m'.$product->options['configureDetails']['configurationId']}}">
                                <span id="dots"></span>
                                <span id="more">
                                @foreach($product->options['configureDetails']['partList']['parameters'] as $config)
                                    @if(isset($config['label']))
                                    <span class="short"><strong>{{$config['label']}}</strong> : {{ucfirst(str_replace("cdm:","",$config['value']))}}</span></br>
                                    @endif
                                @endforeach
                                </span>
                                <a href="javascript:void(0)"onclick="myFunction('{{'m'.$product->options['configureDetails']['configurationId']}}')" id="myBtn" >configured details </a>
                                </div>
                                @endif
                                <p>
                                    <span><strong>Unit Price :</strong></span>
                                    <span>
                                        ${{number_format($product->price,2)}}
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
                                        <input type="button" value="-" id ="msub{{$product->id}}" class="sub{{$product->id}} minus remove-from-cart" productId="{{$product->id}}" rowId="{{$product->rowId}}" conf_id="{{$product->options['configureDetails']['configurationId'] ?? ''}}" article_nu="{{$product->options['configureDetails']['partList']['articleNr'] ?? '' }}" price="{{$product->price}}" @if($product->qty == 1) style="cursor: -webkit-not-allowed; cursor: not-allowed;" @endif >

                                        <input type="number" min="0" step="1" name="quantity" pattern="/^[1-9]\d*$/" value="{{$product->qty}}" title="Qty" class="qty mqty{{$product->rowId}}" id="mqty{{$product->rowId}}" size="4" productId="{{$product->id}}" datavalue="" rowId="{{$product->rowId}}" conf_id="{{$product->options['configureDetails']['configurationId'] ?? ''}}" article_nu="{{$product->options['configureDetails']['partList']['articleNr'] ?? '' }}" price="{{$product->price}}">

                                        <input type="button" value="+" id ="add{{$product->id}}" class="plus add-to-cart" productId="{{$product->id}}" rowId="{{$product->rowId}}" conf_id="{{$product->options['configureDetails']['configurationId'] ?? ''}}" article_nu="{{$product->options['configureDetails']['partList']['articleNr'] ?? '' }}" price="{{$product->price}}">
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0">
                                <strong>Total : </strong>
                                <span class="mtotal{{$product->rowId}}">${{number_format($product->price * $product->qty, 2)}}</span>
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
                    <img src="@if( !  @empty($product->options['configureDetails']['configurationId']))https://uploads.roomle.com/configurations/{{$product->options['configureDetails']['configurationId']}}/perspectiveImage.png @else{{ url('') }}/upload/product/{{@$product->options->image}}@endif" alt="product1" class="img-fluid">
                    </div>
                </td>
                <td class="text-center">{{$product->name}} 
                    @if( ! @empty($product->options['configureDetails']['partList']))
                    </br><div id="card" data-configId="{{$product->options['configureDetails']['configurationId']}}">
                    
                    <span id="dots"></span>
                    <span id="more">
                    @foreach($product->options['configureDetails']['partList']['parameters'] as $config)
                        @if(isset($config['label']))
                        <span class="short"><strong>{{$config['label']}}</strong> : {{ucfirst(str_replace("cdm:","",$config['value']))}}</span></br>
                        @endif
                    @endforeach
                    </span>
                    <a href="javascript:void(0)"onclick="myFunction('{{$product->options['configureDetails']['configurationId']}}')" id="myBtn" >configured details </a><i id="c-arrow{{$product->options['configureDetails']['configurationId']}}" class="linearicons-arrow-down"></i>
                    </div>
                    @endif
                </td>
                <td class="text-center">${{number_format($product->price,2)}}</td>
                <td class="text-center">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" id ="sub{{$product->rowId}}" class="sub{{$product->rowId}} minus remove-from-cart" productId="{{$product->id}}" rowId="{{$product->rowId}}" conf_id="{{$product->options['configureDetails']['configurationId'] ?? ''}}" article_nu="{{$product->options['configureDetails']['partList']['articleNr'] ?? '' }}" price="{{$product->price}}" @if($product->qty == 1) style="cursor: -webkit-not-allowed; cursor: not-allowed;" @endif>

                            <input type="number" min="0" step="1" name="quantity" pattern="/^[1-9]\d*$/" value="{{$product->qty}}" title="Qty" datavalue="" class="qty qty{{$product->rowId}}" id ="qty{{$product->rowId}}" size="4" productId="{{$product->id}}"  rowId="{{$product->rowId}}" conf_id="{{$product->options['configureDetails']['configurationId'] ?? ''}}" article_nu="{{$product->options['configureDetails']['partList']['articleNr'] ?? '' }}" price="{{$product->price}}">

                            <input type="button" value="+" id ="add{{$product->id}}" class="plus add-to-cart" productId="{{$product->id}}" rowId="{{$product->rowId}}" conf_id="{{$product->options['configureDetails']['configurationId'] ?? ''}}" article_nu="{{$product->options['configureDetails']['partList']['articleNr'] ?? '' }}" price="{{$product->price}}">
                        </div>
                    </div>
                </td>
                <td class="text-center cart-total-w">
                    <label class="total{{$product->rowId}}">${{number_format($product->price * $product->qty, 2)}}</label>
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
                <span><label id="subQty" class="mb-0" >${{$cartSubTotal}}</label></span>
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
                    <span class="grand_total">${{$cartSubTotal}}</span> 
                </span>
            </div>
            <div class="pt-3">
                <a href="{{url('/product')}}" class="btn btn-outline-secondary rounded cart-btn-secondary mb-1">Continue Shopping</a>
                <a href="{{url('/checkout/address?cart')}}" class="btn btn-fill-out proceed-btn position-relative cart-btn-checkout align-top">Proceed to checkout <i class="linearicons-chevron-right"></i></a>            
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP -->
@endsection

@section('scripts')
<script>
        var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        });
        
    jQuery(document).ready(function(){

        function updateHtml(rowId,productTotal,qty,count,cartSubTotal)
        {
            $('.total'+rowId).html(formatter.format(productTotal));
            $('.mtotal'+rowId).html(formatter.format(productTotal));
            $('#qty'+rowId).val(qty);
            $('#qty'+rowId).attr('datavalue', qty);
            $('#mqty'+rowId).val(qty);
            $('.cart-count').html(count);
            if(qty > 1) {
                $('#sub'+rowId).prop('disabled', false); 
                $('.sub'+rowId).css("cursor", "pointer");
            } else {
                $('#sub'+rowId).prop('disabled', true); 
                $('#sub'+rowId).css("cssText", "cursor: not-allowed  !important;");
            }
            $('#subQty').html('$'+cartSubTotal);
            $('.grand_total').html('$'+cartSubTotal);
            $('#grand_total').val('$'+cartSubTotal);
        }
        
        /* Add to cart functionality */
        jQuery('.add-to-cart').click(function(e) {
            var productId = $( this ).attr('productId');
            var rowId = $(this).attr('rowId');
            var conf_id = $( this ).attr('conf_id');
            var price = $(this).attr('price')
            var article_nu = $(this).attr('article_nu');
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/add-cart') }}",
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId,
                    conf_id : conf_id,
                    price: price,
                    article_nu : article_nu
                },
                success: function(result){
                    
                    var icon = 'success';
                    if (result.status == false) {
                        icon = 'info';
                    } 
                    
                    var  productTotal = result.data.productQty * result.data.productPrice;
                    updateHtml(rowId,productTotal,result.data.productQty,result.data.cartCount,result.data.cartSubTotal);
                }
            });
        });
        /* Decrease product quantity functionality */
        jQuery('.remove-from-cart').click(function(e) {
            var productId = $( this ).attr('productId');
            var rowId = $(this).attr('rowId');
            var conf_id = $( this ).attr('conf_id');
            var price = $(this).attr('price');
            var article_nu = $(this).attr('article_nu');
            var qty = $('#datavalue').val();
            if($('.qty'+rowId).val() == 1){
                $('#sub'+rowId).css("cssText", "cursor: not-allowed  !important;");
                return false;
            }
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/remove-from-cart') }}",
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId,
                    article_nu : article_nu,
                    conf_id : conf_id,
                    price: price,
                    qty : qty
                },
                success: function(result){
                    var  productTotal = result.data.productQty * result.data.productPrice;
                    updateHtml(rowId,productTotal,result.data.productQty,result.data.cartCount,result.data.cartSubTotal);
                }
            });
        });

        /* Remove product from cart functionality */
        jQuery('.item_remove').click(function(e) {
            swal.fire({
            title: 'Are you sure you want to remove this item from the cart ?',
            showCancelButton: true,
            confirmButtonText: `Remove`,
            customClass: {
                        container: 'custom-success-popup-container',
                        popup: 'custom-success-popup',
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger',
                    }
            }).then((result) => {
            if (result.isConfirmed) {
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
                    $('.grand_total').html('$'+result.data.cartSubTotal);
                    $('#grand_total').val('$'+result.data.cartSubTotal);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", "error");
                }
                
            });
            }
        })
        });
        function isInt(n) {
            return n > 0 && n % 1 === 0;
        }
        /* Update cart functionality */
        $(".qty").blur(function(e) {
            var productId = $( this ).attr('productId');
            var rowId = $(this).attr('rowId');
            var conf_id = $( this ).attr('conf_id');
            var price = $(this).attr('price')
            var article_nu = $(this).attr('article_nu');
            var qty =  $('.qty'+rowId).val();
            if(qty == 0)
            {
            $(this).val(1);
            Swal.fire({
                    position: 'bottom-end',
                    icon: 'info',
                    title: 'Quantity can not be zero, you may remove item from cart.',
                    showConfirmButton: false,
                    timer: 2500,
                    customClass: {
                        container: 'custom-success-popup-container',
                        popup: 'custom-success-popup',
                    }
                });
            }
            else if(!isInt(qty))
            {
                $(this).val(Math.floor(qty))
                if(qty < 0)
                {
                    $(this).val(Math.abs(qty))
                }
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'info',
                    title: 'Enter a valid Quantity.',
                    showConfirmButton: false,
                    timer: 2500,
                    customClass: {
                        container: 'custom-success-popup-container',
                        popup: 'custom-success-popup',
                    }
                });
            }
            else{
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/update-cart') }}", 
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId,
                    qty : qty,
                    conf_id : conf_id,
                    price: price,
                    article_nu : article_nu
                },
                success: function(result) {
                    
                    var icon = 'info';

                    if (result.status == true) {
                        icon = 'success';
                        var  productTotal = result.data.productQty * result.data.productPrice;
                        updateHtml(rowId,productTotal,result.data.productQty,result.data.cartCount,result.data.cartSubTotal);
                    } else {
                        $('.qty'+rowId).val(result.data.productQty);
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
        }
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
