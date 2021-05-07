@extends('layouts.front')

@section('content')
<script src="{{asset('js/roomle/roomle-configurator-api.es.min.js')}}" ></script>
    <style>
        body{
            overflow-x: hidden;
        }
        .configure-specs{
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-100%);
            background-color: #F94E57;
            box-shadow: 0 0 5px rgb(0 0 0 / 11%);
            -moz-border-radius: 22px 0 0 22px;
            -webkit-border-radius: 2px 0 0 22px;
            border-radius: 22px 0 0 22px;
            padding: 7px 7px 7px 10px;
            height: 44px;
            line-height: 44px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .configure-specs b{
            font-size: 25px;
            color: #fff;
        }
        .configure-specs-wrap{
            background-color: #fff;
            position: fixed;
            top: 0;
            bottom: 0;
            right: -100%;
            width: 100%;
            max-width: 800px;
            height: 100vh;
            transition: all .7s cubic-bezier(.165,.84,.44,1),bottom 0s linear 0s;
            -moz-transition: all .7s cubic-bezier(.165,.84,.44,1),bottom 0s linear 0s;
            -webkit-transition: all .7s cubic-bezier(.165,.84,.44,1),bottom 0s linear 0s;
            z-index: 99;
            box-shadow: 0 0 5px rgb(0 0 0 / 11%);
        }
        .specs-wrap-active{
            right: 0;
        }
        .configure-specs-close{
            font-weight: bold;
            padding: 6px;
            background-color: #F94E57;
            color: #fff;
            cursor: pointer;
        }
        .specs-sidebar{
            border-left: 1px solid #ddd;
            height: 100%;
            width: 100%;
            overflow-y: auto;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            padding: 0;
        }
        .specs-mega-menu{
            list-style: none;
            height: 100%;
            overflow-y: auto;            
            border-left: 1px solid #ddd;
        }
        .specs-mega-menu li{
            width: 100%;
            min-width: 240px;
            border-top: 1px solid #ddd;
        }
        .specs-mega-menu li:last-child{
            border-bottom: 1px solid #ddd;
        }
        .specs-sidebar a{
            height: 44px;
            padding: 10px;
            padding-left: 36px;
            display: block;
            box-sizing: border-box;
            position: relative;
            color: #212529;
        }
        .specs-sidebar a:before{
            content: "\e61a";
            font-family: 'themify';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            padding: 4px;
            font-size: 0.625rem;
            background-color: #000;
            color: #fff;
            position: absolute;
            left: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
        }
        .specs-open a{
            color: #fff;
            background-color: #F94E57;
        }
        .specs-sidebar .specs-open a:before{
            color: #F94E57;
            background-color: #fff;
        }
        .specs-mega-sub{
            position: absolute;
            left: 0;
            top: 0;
            width: calc(100% - 240px);
            height: 100%;
            padding: 1rem;
            overflow-y: auto;
            display: none;
        }
        .specs-mega-menu::-webkit-scrollbar{width:0;}
        .specs-mega-sub::-webkit-scrollbar{width:2px;}
        .specs-mega-sub::-webkit-scrollbar-track{background:#eee}
        .specs-mega-sub::-webkit-scrollbar-thumb{background:#F94E57;border-radius:30px}
        .specs-mega-sub::-webkit-scrollbar-thumb:hover{background:#F94E57;}
        .specs-mega-menu li.specs-open .specs-mega-sub{
            display: block;
        }
    </style>
    <div class="configure-specs">
        <b class="ti-info-alt"></b>
    </div>
    <div class="configure-specs-wrap">
        <div class="specs-wrap-inner d-flex justify-content-end h-100">
            <div class="specs-sidebar">
                <ul class="specs-mega-menu">
                    <div class="text-right m-3">
                        <span class="ti-close configure-specs-close"></span>
                    </div>
                    <li class="specs-open">
                        <a href="#">Insert Type</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Bifold-Flush-cherry-4-panel,-cherry-trim.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Frame Type</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v2.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Track and channel</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Product Details</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Insert Type</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Frame Type</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Track and channel</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Product Details</a>
                        <div class="specs-mega-sub">
                            <img src="{{URL::asset('/images/slides/Slider-Framed,-3-panel,-2-track,-chrome-trim_v2.jpg')}}" alt="">
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad repellendus veniam accusantium eligendi quibusdam, architecto expedita quia optio amet nulla neque vel reprehenderit sunt esse, porro blanditiis impedit provident! Repellat.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="product-detail-view">
        <div class="main-wrapper">
            <h2 class="home-step-heading">
                Custom build your closet doors
            </h2>
            <p class="home-step-para mb-3">
                Design and configure the door that fits your style.
                Prices adjust in real time as you add options to create your perfect closet door.
            </p>
            <p></p>
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
                        {...options, buttons: {savedraft: false,requestproduct:false}},
                    );
                    configurator.ui.callbacks.onRequestProduct = (configurationId, image, partlist) => {
                        addToCart(configurationId, image, partlist);
                    };
                    document.getElementById('trigger-request').addEventListener('click', async () => {
                    await configurator.ui.triggerRequestProduct();
                    });
                   
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
            <div class="d-flex justify-content-center">
            <!-- <a href="javascript:void(0)" class="btn btn-fill-out buy-now">-->
                <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                <!--<i class="linearicons-cart"></i> Buy Now
            </a> -->
            <a href="javascript:void(0)" id="trigger-request" class="btn btn-fill-out">
                <i class="linearicons-cart-plus"></i> Add to cart
            </a>
            {{-- <a href="#" class="btn btn-fill-out">
                Configure
            </a> --}}
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
        <div class="container">
            <h1 class="pt-3 mb-5 heading_s3 text-center">Product Gallery</h1>
            <div class="product-wallpaper-slider">
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Bifold-Flush-cherry-4-panel,-cherry-trim.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Bifold-Flush-White-2-panel,-white-trim,-saddle.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_V2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Slider-Framed,-3-panel,-2-track,-chrome-trim_v2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""></div>
                <div class="product-slideshow"><img src="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""></div>
            </div>
            <div class="content-section">
                <div class="product-wallpaper-thumb">
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Bifold-Flush-cherry-4-panel,-cherry-trim.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Bifold-Flush-White-2-panel,-white-trim,-saddle.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_V2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Slider-Framed,-3-panel,-2-track,-chrome-trim_v2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""></div>
                    <div class="slideshow-thumb"><img src="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
        <!-- <div class="configure-slider product-wallpaper-slider">
            @foreach ($productData['product']->images as $img)
                <div class="">
                    <img src="{{ asset('upload/product/'.$img->image)}}" alt="">
                </div>
            @endforeach
        </div> -->
    </section>
@endif
    <input type="hidden" id="configureId" val="">
    <section class="section">
        <div class="container">
            <div class="comments">
                <div class="text-center mb-3">
                        <h3>Reviews &amp; Rating</h3>
                    </div>
                @if ($productData['reviewCount'] > 0)
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
                        <div class="rating-input uncheck-effect mb-2"> 
                            <input type="radio" name="rating" checked>
                            <label for="5">☆</label> 
                            <input type="radio" name="rating">
                            <label for="4">☆</label> 
                            <input type="radio" name="rating">
                            <label for="3">☆</label> 
                            <input type="radio" name="rating">
                            <label for="2">☆</label> 
                            <input type="radio" name="rating">
                            <label for="1">☆</label>
                        </div>
                        <a href="#" class="btn btn-fill-out btn-sm">Be the first to rate this product.</a>
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
    <section class="product-detail-features section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-property.png')}}" alt="">
                        <span class="d-block">
                            At CDM every product reviews the care and attention of hand craftmanship.
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
                            Flat rate shipping anywhere in <br>the continental U.S.
                        </span>
                    </div>
                </div>
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
<script>
    $('.product-wallpaper-slider').slick({
        autoplay: false,
        arrows: true,
        speed: 1000,
        centerMode: true,
        dots: false,
        infinite: true,
        slidesToShow: 1, 
        slidesToScroll: 1,
        asNavFor: '.product-wallpaper-thumb',
        lazyLoad: 'progressive'
    });
    $('.product-wallpaper-thumb').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.product-wallpaper-slider',
    dots: false,
    centerMode: true,
    focusOnSelect: true
    });
</script>

<script>
    $('.configure-specs').on("click", function(){
        $('.configure-specs-wrap').toggleClass('specs-wrap-active')
    });
    $('.configure-specs-close').on("click", function(){
        $('.configure-specs-wrap').toggleClass('specs-wrap-active')
    });
</script>
<script>
$(document).ready(function(){
    $(".specs-mega-menu a").click(function(e){
        e.preventDefault();
    });
    $(".specs-mega-menu li").hover(            
        function(){ 
            $('.specs-mega-menu li').removeClass('specs-open');
            $(this).addClass('specs-open');
        },
        function(){ 
            $(this).removeClass('specs-open');
            $('.specs-mega-menu li:nth-child(2)').addClass('specs-open');
        }
    );
});
</script>
@endsection
