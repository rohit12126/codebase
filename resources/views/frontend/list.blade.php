@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
    <section class="products-category section">
        <div class="container products-listing-container">
            <ul class="nav justify-content-center products-tab-ul mb-4 d-none d-md-flex">
                <li class="">
                    <a href="{{ route('product.list') }}" class="btn btn-outline-secondary @if(empty($catSlug)) active  @endif">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="">
                        {{-- route('product.list',['category_id' => $category->id]) --}}
                        <a class="btn btn-outline-secondary @if($category->slug == $catSlug) active  @endif" href="{{ url('product/').'/'.$category->slug }}"> {{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="product-category-collapse d-block d-md-none">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#categoryCollapse">Categories &nbsp; <i class="ion-android-menu"></i></button>
                <div id="categoryCollapse" class="collapse category-collapse">
                    <ul> 
                        <li>
                            <a href="{{ route('product.list') }}" class="dropdown-item nav-link nav_item @if(empty($catSlug)) active  @endif">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="">
                                {{-- route('product.list',['category_id' => $category->id]) --}}
                                <a class="dropdown-item nav-link nav_item @if($category->slug == $catSlug) active  @endif" href="{{ url('product/').'/'.$category->slug }}"> {{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                @if($products->isEmpty()) 
                    <div class="col-md-12 col-12 text-center">
                        <h3>No Product available.</h3>
                    </div>
                @else
                    @foreach ($products as $key => $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-listing">
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="">
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="">
                                @endif
                                    <div class="product-listing-inner">
                                        <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="...">
                                    </div>
                                </a>
                                @if($product->is_accessory == 0)
                                <a href="{{ url('product/configure/').'/'.$product->slug }}" class="btn btn-fill-out">
                                    <i class="linearicons-hammer-wrench"></i> Configure
                                </a>
                                @else
                                <a href="{{ url('product/detail/').'/'.$product->slug }}" class="btn btn-fill-out">
                                    <i class="linearicons-eye"></i> View Details
                                </a>
                                @endif
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="product-listing-desc">
                                        <div class="products-list-title"><h2>{{ucfirst(strtolower($product->catergory->name)).' '.$product->name}}</h2></div>
                                        <div class="products-list-price"><span class="starts-at">Starts at </span>${{$product->sale_price}}</div>
                                    </a>
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="product-listing-desc">
                                        <div class="products-list-title"><h2>{{$product->name}}</h2></div>
                                        <div class="products-list-price">${{$product->sale_price}}</div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="section configure-product-slider"> 
        <div class="container">
            <div class="product-wallpaper-slider my-1">
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/5_Bifold-Flush-cherry-4-panel,-cherry-trim_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Bifold Flush in Cherry</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/6_Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v3.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>8 Panel Bifold Flush in Espresso</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/7_Bifold-Flush-White-2_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>2 Panel Bifold Flush in White</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/10_Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_v3.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Slider Flush in Maple</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Bifold Mir-Mel</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>6 Panel Bifold Routed</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>3 Panel Slider Flush in Espresso</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>2 Panel Slider Mirror, Beveled</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>6 Panel Bifold Mirror</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Slider Mir-Mel</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>2 Panel Slider Routed</h3>
                    </div>
                </div>
            </div>
            <div class="content-section">
                <div class="product-wallpaper-thumb">
                    <div class="slideshow-thumb" title="4 Panel Bifold Flush in Cherry"><img data-lazy="{{URL::asset('/images/slides/5_Bifold-Flush-cherry-4-panel,-cherry-trim_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/6_Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v3.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/7_Bifold-Flush-White-2_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/10_Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_v3.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""/></div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-grid-detail">
        <div class="product-grid-container">
            <div class="product-grid-tile-first">
                <img src="{{URL::asset('/images/home/custom-closet.gif')}}" class="product-grid-video">
            </div>
            <div class="product-grid-tile-last">
                <div class="product-grid-tile-inner">
                    <h2>Solid backing makes our door the strongest and most impact resistant door on the market</h2>
                </div>
            </div>
        </div>
        <div class="product-grid-container">   
            <div class="product-grid-tile-last">
                <div class="product-grid-tile-inner">
                    <h2>Our patented TruClose™ hinges ensure that your doors close securely and stay closed</h2>
                </div>
            </div>   
            <div class="product-grid-tile-first">
                <video autoplay loop muted class="product-grid-video">
                    <source src="{{URL::asset('/images/home/Solid Backed Mirror Slider Door.mp4')}}" type="video/mp4">
                </video>
            </div>                         
        </div>                                  
    </section>
@endsection
@section('scripts')
<script>
    /* To Handle Browser Back From Payment page*/
    $(document).ready(function() {
        if (performance.navigation.type == 2) {
            location.reload(true);
        }
    });
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
    focusOnSelect: true,
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 575,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
            }
        ]
    });
    var widthGet = $(".slideshow-thumb").width();
    $(".slideshow-thumb").height(widthGet);
</script>
@endsection
