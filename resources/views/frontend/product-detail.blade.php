@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="section product-detail2">
    <div class="container-lx">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap">
                @foreach ($productData['product']->images as $image)
                    <div class="img-tile">
                        <div class="product-list-inner">
                            <a data-fancybox="gallery" href="{{ asset('upload/product/'.$image->image)}}">
                                <img src="{{ asset('upload/product/'.$image->image)}}" class="" alt="...">
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <h1 class="pdp-title">
                    {{$productData['product']->name}}
                    
                </h1>
                <h2 class="product2-category">{{$productData['product']->catergory->name}}</h2>
                <div class="rating-counter">
                        <span>
                           <div class="rating-points">{{ number_format($productData['averageRating'],1)}}
                               <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==" class="rating-star"></div>
                        </span>
                        <span class="rating-count-no"><span><span>{{$productData['reviewCount']}} Ratings&nbsp;</span><span class="rating-amp">&amp;</span><span>&nbsp;Reviews</span></span></span>
                    </div>
                <hr>
                <p class="pdp-discount-container">
                    <span class="pdp-price" tabindex="0"><strong>&#36;{{$productData['product']->sale_price}}</strong></span>
                    <!-- <span class="pdp-mrp"><s>&#36;4599</s></span>
                    <span class="pdp-discount">(50% OFF)</span> -->
                </p>
                <p class="pdp-selling-price">
                    <span class="pdp-vatInfo">inclusive of all taxes</span>
                </p>
                <p class="sku-number">
                    <strong>SKU No.</strong> <span>UGG-BB-PUR-07</span>
                </p>
                
                <div class="pt-3 pb-3 d-flex">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary add-to-cart">
                        <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                        <i class="linearicons-cart-plus"></i> Buy Now
                    </a>

                    <a href="javascript:void(0)" class="btn btn-outline-secondary add-to-cart">
                        <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                        <i class="linearicons-cart-plus"></i> Add to cart
                    </a>
                </div>
                <!-- <div class="pincode-checkServiceAbilityhalfCard">
                    <div class="pincode-deliveryContainer">
                       <h4>
                           Delivery Options 
                           <span class="linearicons-truck"></span>
                       </h4>
                       <form autocomplete="off"><input type="text" placeholder="Enter pincode" class="pincode-code" value="" name="pincode"><input type="submit" class="pincode-check pincode-button" value="Check"></form>
                       <p class="pincode-enterPincode">Please enter PIN code to check Delivery Availability</p>
                    </div>
                 </div> -->
                 <hr>
                 <div class="pincode-checkServiceAbilityhalfCard">
                    <div class="pincode-deliveryContainer">
                       <h4>
                           Product Details
                           <span class="linearicons-document"></span>
                       </h4>
                       <p class="pdp-product-description-content">
                           <!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias aliquid voluptates assumenda officiis, cum enim reprehenderit quo iure ut numquam accusamus quasi minus expedita quia. Esse consectetur fuga quos minima?
                            -->
                           {!!$productData['product']->description!!}
                       </p>
                    </div>
                    <hr/>
                    <div class="comments">
                    @empty($productData['reviewCount'])
                        <h5 class="product_tab_title"> {{$productData['reviewCount']}} Review For <span>{{$productData['product']->name}}</span></h5>
                    @endempty    
                        <ul class="list_none comment_list mt-4">
                          @foreach($productData['productReview'] as $review)
                            <li>
                            
                                <div class="comment_img">
                                    <!-- <img src="{{URL::asset('/images/about2.jpg')}}" alt="user2"> -->
                                </div>
                                <div class="comment_block">
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:60%"></div>
                                        </div>
                                    </div>
                                    <p class="customer_meta">
                                        <span class="review_author">{{$review->title}}</span>
                                        <span class="comment-date">{{ \Carbon\Carbon::parse($review->created_at)->format('d F Y')}}</span>
                                    </p>
                                    <div class="description">
                                        <p>{{$review->body}}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="product-detail-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-property.png')}}" alt="">
                        <span class="d-block">
                            <strong>100 Days Comfortably Test.</strong>
                        </span>
                        <span>
                            We pick up your closet for free.
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-stars.png')}}" alt="" class="pt-2">
                        <span class="d-block">
                            <strong>Excellent service.</strong>
                        </span>
                        <span>
                            We are also there for you after the purchase.
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-delivery.png')}}" alt="">
                        <span class="d-block">
                            <strong>Free premium delivery.</strong>
                        </span>
                        <span>
                            We pick up your closet for free.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="container pt-5 pb-5">
        <h3 class="pb-3 text-center">Related Products</h3>
        <section class="product-wallpaper-slider">
            <div>
                <a href="#"><img class="img-fluid" src="{{URL::asset('/images/home/2-sitzer-air.jpg')}}" alt="" /></a>
                <div class="products-list-title"><h2>4-Sitzer Die</h2></div>
                <div class="products-list-price">$ 10.00</div>
            </div>
            <div>
                <a href="#"><img class="img-fluid" src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-glanzstuck_0.jpg')}}" alt="" /></a>
                <div class="products-list-title"><h2>4-Sitzer Die</h2></div>
                <div class="products-list-price">$ 10.00</div>
            </div>
            <div>
                <a href="#"><img class="img-fluid" src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-nimbus_2.jpg')}}" alt="" /></a>
                <div class="products-list-title"><h2>4-Sitzer Die</h2></div>
                <div class="products-list-price">$ 10.00</div>                
            </div>
            <div>
                <a href="#"><img class="img-fluid" src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-panama_2.jpg')}}" alt="" /></a>
                <div class="products-list-title"><h2>4-Sitzer Die</h2></div>
                <div class="products-list-price">$ 10.00</div>                
            </div>
        </section> 
        <div class="text-center pt-5"><a href="{{ url('product/') }}" class="btn btn-fill-out col-4">View All</a></div>
    </div>

    <!--Alert-->
    <!--Alert-->
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
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    $('.cart-count').html(result.data.cartCount);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Product has been added to your cart successfully',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            container: 'custom-success-popup-container',
                            popup: 'custom-success-popup',
                        }
                    })
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
