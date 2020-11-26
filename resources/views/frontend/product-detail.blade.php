@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-8">
				<div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
						<div class="product-image">
                            <div class="product_img_box">
                                @if (isset($product[0]->images[0]->image))
                                <img id="product_img" src="{{ asset('upload/product/'.$product[0]->images[0]->image)}}" data-zoom-image="{{ asset('upload/product/'.$product[0]->images[0]->image)}}" alt="product_img1"><a href="#" class="product_img_zoom" title="Zoom">
                                        <span class="linearicons-zoom-in"></span>
                                    </a>
                                @else
                                    <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                @endif
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                            @if (isset($product[0]->images[0]->image))
                                @foreach ($product[0]->images as $image)
                                    <div class="item">
                                        <a href="#" class="product_gallery_item " data-image="{{ asset('upload/product/'.$image->image)}}" data-zoom-image="{{ asset('upload/product/'.$image->image)}}">
                                            <img src="{{ asset('upload/product/'.$image->image)}}" alt="product_small_img1"></a>
                                    </div>
                                @endforeach
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">₹ {{$product[0]->name}}</a></h4>
                                <div class="product_price">
                                    <span class="price">₹ {{$product[0]->purchase_price}}</span>
                                    <del>₹ {{$product[0]->sale_price}}</del>
                                    <div class="on_sale">
                                        @php
                                            $discount = $product[0]->sale_price - $product[0]->purchase_price;
                                        @endphp
                                        <span>₹ {{$discount}} Off</span>
                                    </div>
                                </div>
                                <div class="pr_desc">
                                    <p>{{$product[0]->description}}</p>
                                </div>
                            </div>
                            <hr><div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        @php
                                            $qty = 0;
                                            if (!empty($cart)) {
                                                $qty = $cart->qty;
                                            }
                                        @endphp
                                        <input type="button" value="-" class="minus remove-from-cart">

                                        <input type="text" name="quantity" value="{{$qty}}" title="Qty" class="qty" >
                                        
                                        <input type="button" value="+" class="plus add-to-cart">
                                    </div>
                                </div>
                                <input type="hidden" class="product-id" value="{{$product[0]->id}}">
                                <div class="cart_btn">
                                    <button class="btn btn-fill-out btn-addtocart add-to-cart" type="button">
                                    <i class="icon-basket-loaded"></i> Add to cart</button>
                                </div>
                            </div>
                            <hr>
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix">
                            @if(isset($product[1]))
                            @foreach($product[1] as $reviews)
                            <li>
                                <div class="comment_block">
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%">
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <p class="customer_meta">
                                        <span class="review_author">Rated {{$reviews->rating}} Out of 5</span>
                                        <span class="comment-date">{{date("F j, y", strtotime($reviews->created_at))}}</span>
                                    </p>
                                    <div class="description">
                                        <p>{{$reviews->body}}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </div>
                    </div>
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
            var productId = $(".product-id").val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/add-cart') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    alert("Item successfully added to the cart.");
                    location.reload(true);
                }
            });
        });
        /* Remove from cart functionality */
        jQuery('.remove-from-cart').click(function(e) {
            var productId = $(".product-id").val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/remove-from-cart') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    alert("Item successfully removed from the cart.");
                    location.reload(true);
                }
            });
        });

        /* Update cart functionality */

        $(".qty").blur(function(e) {
            var productId = $(".product-id").val();
            var qty = $(this).val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/update-cart') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId,
                    qty : qty
                },
                success: function(result){
                    alert("Item quantity updated successfully.");
                    location.reload(true);
                }
            });
        });
    });
</script>
@endsection