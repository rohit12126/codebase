@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
    <section class="products-category section">
        <div class="container">
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
            <div class="products-list-row">
                @if($products->isEmpty()) 
                    <div class="col-md-12 col-12 text-center">
                        <h3>No Product available.</h3>
                    </div>
                @else
                    @foreach ($products as $key => $product)
                        <div class="products-list-col">
                            <div class="products-list-product">
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="">
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="">
                                @endif
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="">
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="">
                                @endif
                                    <div class="product-list-inner">
                                        <div class="product-list-container"><img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="..."></div>
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
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class=""><div class="products-list-title"><h2>{{ucfirst(strtolower($product->catergory->name)).' '.$product->name}}</h2></div></a>
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class=""><div class="products-list-title"><h2>{{$product->name}}</h2></div></a>
                                @endif
                                
                                <div class="products-list-price">${{$product->sale_price}}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="section"> 
    <div class="container-fluid">
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
        autoplay: true,
        arrows: true,
        speed: 1000,
        autoplaySpeed: 5000,
        centerMode: true,
        dots: false,
        centerPadding: '15%',
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
@endsection
