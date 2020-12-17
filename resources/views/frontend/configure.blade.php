@extends('layouts.front')

@section('content')
<section class="product-detail-view">
        <div class="container">
            <span class="product-detail-back">
                <a href="{{route('product.list')}}" class="d-inline-block">&lt; Back to overview</a>
            </span>
            <div class="text-md-center">
                <h1 class="product-detail-heading">{{$productData['product']->name}}</h1>
            </div>
            <div class="product-detail-slider">
                @if($productData['product']->images[0]->image)
                    <div data-thumb="{{ asset('upload/product/'.$productData['product']->images[0]->image)}}">
                        <a data-fancybox="gallery" href="{{ asset('upload/product/'.$productData['product']->images[0]->image)}}">
                            <img src="{{ asset('upload/product/'.$productData['product']->images[0]->image)}}">
                        </a>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="product-sku-no">UGG-BB-PUR-072323</span>
                    <span class="product-sku">SKU (Stock Keeping Unit)</span>
                </div>
                <div class="col-md-6 text-md-right">
                    <span class="product-price">$ {{$productData['product']->sale_price}}</span>
                    <span class="product-price-tax">Incl. VAT</span>
                </div>
            </div>
            <div class="pt-4 pb-4 d-flex justify-content-center">
            <a href="javascript:void(0)" class="btn btn-fill-out buy-now">
                <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                <i class="linearicons-cart-plus"></i> Buy Now
            </a>
            <a href="javascript:void(0)" class="btn btn-fill-out add-to-cart">
                <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                <i class="linearicons-cart-plus"></i> Add to cart
            </a>
            <a href="#" class="btn btn-fill-out">
                Configure
            </a>
        </div>
    </section>

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
@if(!$productData['product']->productDescription->isEmpty())
    <section class="section light-bg">
        <div class="container">
            <h2 class="heading2 mt-3 mb-5 text-center">Product Details</h2>
            <div id="accordion">
                @foreach ($productData['product']->productDescription as $item)
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <a class="faq-card-link" data-toggle="collapse" href="#fq{{$item->id}}" aria-expanded="false">
                                {{$item->title}} 
                            </a>
                        </div>
                        <div id="fq{{$item->id}}" class="collapse" data-parent="#accordion">
                            <div class="faq-card-body">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if(!$productData['product']->images->isEmpty())
    <section class="configure-product-slider pl-0 pr-0 pt-5">
        <h1 class="pt-5 mb-5 heading_s3 text-center">Product Gallery</h1>
        <div class="configure-slider">
            @foreach ($productData['product']->images as $img)
                <div class="d-flex justify-content-center align-items-center p-2">
                    <img src="{{ asset('upload/product/'.$img->image)}}" alt="">
                </div>
            @endforeach
        </div>
    </section>
@endif
<section class="section">
    <div class="container">
        <div class="comments">
            <div class="text-center mb-3">
                <h3>Reviews &amp; Rating</h3>
            </div>
            <div class="rating-counter">
                <span>
                <div class="rating-points">{{ number_format($productData['averageRating'],1)}}
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==" class="rating-star"></div>
                </span>
                <span class="rating-count-no"><span><span>{{$productData['reviewCount']}} Ratings&nbsp;</span><span class="rating-amp">&amp;</span><span>&nbsp;Reviews</span></span></span>
            </div>
            @if(!$productData['productReview']->isEmpty())
                <ul class="list_none comment_list mt-4">
                    @foreach ($productData['productReview'] as $review)
                        <li>
                            <div class="comment_img">
                                <img src="{{URL::asset('/images/review-user.png')}}" alt="user1">
                            </div>
                            <div class="comment_block">
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:{{ $review->rating * 15}}%"></div>
                                    </div>
                                </div>
                                <p class="customer_meta">
                                    <span class="review_author">{{ucfirst( $review->user_name)}}</span>
                                    <span class="comment-date">{{ \Carbon\Carbon::parse($review->created_at)->format('F d, Y')}} </span>
                                </p>
                                <div class="description">
                                    <p>{{ $review->body}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $('.configure-slider').slick({
        autoplay: true,
        arrows: true,
        speed: 1000,
        autoplaySpeed: 1200,
        dots: false,
        centerPadding: '15%',
        infinite: true,
        slidesToShow: 3, 
        slidesToScroll: 1,
        lazyLoad: 'progressive'
    });

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
                    position: 'bottom-end',
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
</script>

@endsection
