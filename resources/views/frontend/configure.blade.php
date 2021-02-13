@extends('layouts.front')

@section('content')
<script src="{{asset('js/roomle/roomle-configurator-api.es.min.js')}}" ></script>
    <section class="product-detail-view">
        <div class="main-wrapper">
            <span class="product-detail-back">
                <a href="{{route('product.list')}}" class="d-inline-block">&lt; Back to overview</a>
            </span>
            {{-- <div class="text-md-center mt-3 mt-md-0">
                <h1 class="product-detail-heading">{{$productData['product']->name}}</h1>
            </div> --}}
            <div id="configurator-container"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pl-3 pb-3 pb-md-0">
                        <span class="product-sku-no">{{$productData['product']->name}}</span>
                        <!-- <span class="product-sku">SKU (Stock Keeping Unit)</span> -->
                    </div>
                </div>
                <div class="col-md-6 text-md-right">
                    <div class="pl-3 pl-md-0 pr-3">
                        {{--<span class="product-price">${{$productData['product']->sale_price}}</span>
                        <span class="product-price-tax">Incl. VAT</span>--}}
                    </div>
                </div>
            </div>
            <script type="module">
                import RoomleConfiguratorApi from '{{asset('js/roomle/roomle-configurator-api.es.min.js')}}';
                (async ()=> {
                    const options = {
                        id: '{{$productData['product']->configure_id ?? 'cdm:sr2_white' }}'
                    };
                    const configurator = await RoomleConfiguratorApi.create(
                        'demoConfigurator',
                        document.getElementById('configurator-container'),
                        options,
                    );
                    configurator.ui.callbacks.onRequestProduct = (configurationId, image, partlist) => {
                        addToCart(configurationId, image, partlist);
                    };

                    /*for price*/
                    const priceDataBase = {};
                    
                        configurator.ui.callbacks.onPartListUpdate = (partList) => {
                            const parts = partList.fullList;
                            jQuery.ajax({
                                url: "{{ url('/product/price') }}",
                                method: 'post',
                                dataType: "json",
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: {
                                    article_nu : parts[0].articleNr,
                                    parts : parts[0].parameters
                                },
                                
                                success: function(result){
                                    let priceSum = result;
                                    configurator.ui.setPrice('$',priceSum);
                                }
                            });
                        };
                    })();
            </script>
            <div class="pt-4 pb-4 d-flex justify-content-center">
            <!-- <a href="javascript:void(0)" class="btn btn-fill-out buy-now">-->
                <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                <!--<i class="linearicons-cart"></i> Buy Now
            </a> -->
            <!-- <a href="javascript:void(0)" class="btn btn-fill-out add-to-cart">
                <input type="hidden" class="product-id" value="{{--$productData['product']->id--}}">
                <i class="linearicons-cart-plus"></i> Add to cart
            </a> -->
            {{-- <a href="#" class="btn btn-fill-out">
                Configure
            </a> --}}
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
        <div class="configure-slider product-wallpaper-slider">
            @foreach ($productData['product']->images as $img)
                <div class="">
                    <img src="{{ asset('upload/product/'.$img->image)}}" alt="">
                </div>
            @endforeach
        </div>
    </section>
@endif
<input type="hidden" id="configureId" val="">
<section class="section">
    <div class="container">
        <div class="comments">
            @if ($productData['reviewCount'] > 0)
                <div class="text-center mb-3">
                    <h3>Reviews &amp; Rating</h3>
                </div>
                <div class="rating-counter">
                    <div class="rating-points">{{ number_format($productData['averageRating'],1)}}
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==" class="rating-star">
                    </div>
                    <span class="rating-count-no">
                            <span>{{$productData['reviewCount']}} Ratings&nbsp;</span>
                            <span class="rating-amp">&amp;</span>
                            <span>&nbsp;Reviews</span>
                    </span>
                </div>
            @else
                <div class="text-center mb-3">
                    <h5>Be the first to rate this product.</h5>
                </div>
            @endif

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
                                        <div class="product_rate" style="width:{{ $review->rating * 20}}%"></div>
                                    </div>
                                </div>
                                <p class="customer_meta">
                                    <span class="review_author">{{ucfirst( $review->user_name)}}</span>
                                    <span class="comment-date">{{ date("M j, Y", strtotime($review->created_at)) }} {{-- {{ \Carbon\Carbon::parse($review->created_at)->format('F d, Y')}} --}} </span>
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
        speed: 2000,
        autoplaySpeed: 1200,
        dots: false,
        centerPadding: '15%',
        infinite: true,
        slidesToShow: 3, 
        slidesToScroll: 1,
        lazyLoad: 'progressive'
    });

    /* Add to cart functionality */
    function addToCart(configurationId, image, partlist){
        
    var productId = $(".product-id").val();
    
    jQuery.ajax({
        url: "{{ url('/cart/add-cart') }}",
        method: 'post',
        dataType: "json",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            productId : productId,
            configurationId : configurationId,
            partList : partlist.fullList[0]
        },
        success: function(result){
            $('.cart-count').html(result.data.cartCount);
            
            if(result.status == false)
            {
                Swal.fire({
            title: 'Unable to Process Your Request for more details kindly &nbsp<a href="{{url('contact-us')}}?artrnr='+result.data+'" target=”_blank”>Contact us.</a>',
            icon: 'info',
            
            showCloseButton: true,
            showConfirmButton: false,
          
            customClass: {
                    container: 'custom-success-popup-container',
                    popup: 'custom-success-popup',
                }
            })
            }
            else
            Swal.fire({
                position: 'bottom-end',
                icon: 'success',
                title: result.message,
                showConfirmButton: false,
                timer: 1500,
                customClass: {
                    container: 'custom-success-popup-container',
                    popup: 'custom-success-popup',
                }
            })
        }
    });
}

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
    // function getPrice(article_nu){
    // jQuery.ajax({
    //     url: "{{ url('/product/price') }}",
    //     method: 'post',
    //     dataType: "json",
    //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //     data: {
    //         article_nu : article_nu
    //     },
    //     success: function(result){
    //         $('.cart-count').html(result.data.cartCount);
    //     }
    // });
    // }
</script>

@endsection
