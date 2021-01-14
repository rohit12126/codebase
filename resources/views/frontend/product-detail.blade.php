@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->

    <section class="section product-detail2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap justify-content-center">
                        @if (!is_null($productData['product']->images))    
                            @if (count($productData['product']->images) > 1)
                                {{--  Multiple images case --}}
                                @foreach ($productData['product']->images as $image)
                                    <div class="img-tile">
                                        <div class="product-list-inner">
                                            {{-- {{ asset('upload/product/'.$image->image)}} --}}
                                            <a data-fancybox="gallery" href="{{ asset('upload/product/'.$image->image)}}">
                                                <img src="{{ asset('upload/product/'.$image->image)}}" class="" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                {{-- for Full Width --}}
                                <div class="img-tile">
                                    <div class="product-list-inner">
                                        {{-- {{ asset('upload/product/'.$productData['product']->images[0]->image)}} --}}
                                        <a data-fancybox="gallery" href="{{ asset('upload/product/'.$productData['product']->images[0]->image)}}">
                                            <img src="{{ asset('upload/product/'.$productData['product']->images[0]->image)}}" class="" alt="...">
                                        </a>
                                    </div>
                                </div>
                            @endif   
                        @endif
                    </div>
                </div>
                <div class="col-lg-5">
                    <h1 class="pdp-title">
                        {{$productData['product']->name}}
                    </h1>
                    <h2 class="product2-category"> @if(isset($productData['product']->catergory->name)) 
                        {{$productData['product']->catergory->name}}
                        @else {{ "-" }} @endif</h2>

                    @php
                        $avgRate = round($productData['averageRating']);
                        if($productData['reviewCount'] == 0)
                        $avgRate = 0;
                    @endphp
                    <div class="rating-img-icon">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $avgRate)
                                <img src="{{URL::asset('/images/star-fill.png')}}" alt="">
                            @else
                                <img src="{{URL::asset('/images/star.png')}}" alt="" style="cursor:initial;">
                            @endif
                        @endfor
                        <span class="rating-count-no ml-3"></span>
                        @if(!empty($productData['reviewCount']))
                            <span>{{$productData['reviewCount']}} Ratings&nbsp;</span>
                            <span class="rating-amp">&amp;</span>
                            <a href="{{ url('#comments') }}">
                                <span>&nbsp;Reviews</span>
                            </a>
                        @else
                            <p class="product_tab_title text-muted font-italic mb-0"> Be the first person to rate this product.</p>
                        @endif
                    </div>
                    <hr>
                    <p class="pdp-discount-container">
                        <span class="pdp-price 
                        cursor-none" tabindex="0">
                            <strong>$ {{$productData['product']->sale_price}}</strong>
                        </span> 
                    </p>
                        <!-- <span class="pdp-mrp"><s>&#36;4599</s></span>
                        <span class="pdp-discount">(50% OFF)</span> -->

                    <!-- <p class="pdp-selling-price">
                        <span class="pdp-vatInfo">inclusive of all taxes</span>
                    </p>-->
                    <p class="sku-number">
                        <strong>SKU No.</strong> <span>{{$productData['product']->sku}}</span>
                    </p>
                    
                    <div class="pt-3 pb-3 d-flex details-action-btn-wrapper">
                        <!-- <a href="javascript:void(0)" class="btn btn-fill-out buy-now">
                            <input type="hidden" class="product-id" value="{{--$productData['product']->id--}}">
                            <i class="linearicons-cart"></i> Buy Now
                        </a> -->

                        <a href="javascript:void(0)" class="btn btn-fill-out add-to-cart">
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
                    <!-- <hr> -->
                    <div class="pincode-checkServiceAbilityhalfCard">
                        <div class="pincode-deliveryContainer">
                        <h4>
                            Product Details
                            <span class="linearicons-document"></span>
                        </h4>
                        <p class="pdp-product-description-content"> 
                            {!!$productData['product']->description!!} 
                        </p>
                        </div>
                        <hr/>
                        <div class="comments" id=comments>

                            @if (!empty($productData['reviewCount']))
                                <h5 class="pb-3 text-uppercase">Customer reviews</h5>
                            @endif
                            <ul class="list_none comment_list mt-4">
                            @foreach($productData['productReview'] as $review)
                                
                                <li>
                                    <div class="comment_img">
                                        <img src="{{URL::asset('/images/review-user.png')}}" alt="">
                                    </div> 
                                    <div class="comment_block">
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                @php
                                                    $rate = $review->rating * 20;
                                                @endphp
                                                <div class="product_rate" style="width:{{$rate}}%"></div>
                                            </div>
                                        </div>
                                        <div class="customer_meta">
                                            <span class="review_author">{{$review->title}}</span>
                                            <span class="comment-date">{{ date("M j, Y", strtotime($review->created_at)) }} {{-- {{ \Carbon\Carbon::parse($review->created_at)->format('d F Y')}} --}}</span>
                                        </div>
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
    <hr/>
    <section class="p-5 related-product-wrapper">
        <div class="container">
            <h3 class="pb-3 text-center">Related Products</h3>
            <div class="related-slider">
                @foreach ($relatedProducts as $Rproduct)
                    <div class="blog-col">
                        <a href="{{ url('product/detail/').'/'.$Rproduct->slug }}"><img class="img-fluid" src="{{ asset('upload/product/'.$Rproduct->images[0]->image)}}" alt="" /></a>
                        <div class="products-list-title"><h2>{{$Rproduct->name}}</h2></div>
                        <div class="products-list-price">$ {{$Rproduct->sale_price}}</div>
                    </div>
                @endforeach
            </div> 
            <div class="text-center pt-5">
                <a href="{{ url('product/') }}" class="btn btn-fill-out btn-same-w">View All</a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function(){

        if (performance.navigation.type == 2) {
            location.reload(true);
        }
        
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
                success: function(result) {
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
        /* Buy Now Functionality */
        jQuery('.buy-now').click(function(e) {
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
                    window.location.href = "{{ route('address.get') }}";
                }
            });
        });
    });
</script>
<script>
    $(".product-detail-slider").slick({
        autoplay: false,
        dots: true,
        infinite: false,
        customPaging : function(slider, i) {
            var thumb = $(slider.$slides[i]).data('thumb');
            return '<a><img src="'+thumb+'"></a>';
        }
    });
    $('.related-slider').slick({
    autoplay: true,
    arrows: true,
    speed: 1000,
    autoplaySpeed: 5000,
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    lazyLoad: 'progressive',
    responsive: [
        {
        breakpoint: 1200,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        }
    ]
    });
</script>
<script>
    (function($) {
    $('a[href*=#]:not([href=#])').click(function() 
    {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) 
        {
        
        var target = $(this.hash),
        headerHeight = $(".primary-header").height() + 5; // Get fixed header height
                
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                
        if (target.length) 
        {
            $('html,body').animate({
            scrollTop: target.offset().top - 150
            }, 500);
            return false;
        }
        }
    });
    })(jQuery);
</script>
@endsection
