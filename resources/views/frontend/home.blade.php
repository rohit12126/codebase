@extends('layouts.front')
@section('content')
    <div class="main-tagline-wrap">
        <h1 class="home-step-heading">
            Closet door shopping made easy
        </h1>
        <h4>
            Create custom closet doors that fit your style
        </h4>
    </div>
    <div class="main-page-video">
        <iframe src="https://player.vimeo.com/video/513525765?autoplay=1&loop=1&title=0&byline=0&portrait=0&controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>
    <section class="home-steps home-page-section">
        <div class="container">
            <h3>Finding the perfect closet doors to meet your needs is only a few steps away.</h3>
        </div>
    </section>
    <section class="home-page-section how-to-wrap">
        <div class="container">
            <h2 class="home-step-heading">
               How to get started
            </h2>
            <div class="row">
                <div class="col-lg-4 col-">

                </div>
            </div>
        </div>
    </section>
    <section class="home-swip-section home-page-section" id="stepsStart">
        <div class="container">
            <h2 class="home-step-heading">
                <span class="step-serial">Step 1:</span> Bifold Or Sliding Doors?
            </h2>
            <p class="home-step-para">
            Custom Door &amp; Mirror has a variety of designs making it easy to find exactly what you are looking for. 
            </p>
            <div class="row mt-4">
                <div class="col-lg-6 col-sm-12 home-swip-column pr-lg-5">
                    <div id="page" class="wrapper-upper">
                        <div class="wrapper wrapperFirst">
                            <div class="before">
                                <div id="hotspotImg" class="responsive-hotspot-wrap">
                                    <img src="{{URL::asset('/images/home/door-closets-close.jpg')}}" class="hotspot-image"  alt="" >
                                    <div class="hot-spot left-sides-first">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Because they are hinged, bifold doors take up very little floor space when opened, making them practical in small areas. These doors open outward toward the edge of the closet or opening, allowing access to as much as 90 percent of the closet's width when opened fully 
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-second">
                                        <!-- <a data-fancybox="gallery" href="{{URL::asset('/images/home/Bifold Insert Image1.jpg')}}" data-caption="Keep in mind when the bifolds are fully open they take up about 5 x 1/2' off the wall. So if you have a 4 panel opening you will use up 11"> -->
                                        <div class="circle"></div>
                                        <div class="tooltip tooltip-custom-left tape-img">
                                            <div class="d-flex">
                                                <img src="{{URL::asset('/images/home/Bifold Insert Image1.jpg')}}" alt="">
                                                <div class="text-row">
                                                <p>Keep in mind when the bifolds are fully open they take up about 5'/2" off the wall. So if you have a 4 panel opening you will use up 11</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="after">
                                <div id="secondhotspotImg" class="responsive-hotspot-wrap">
                                    <img src="{{URL::asset('/images/home/door-closets-open.jpg')}}" class="hotspot-image" alt="">
                                </div>
                            </div>
                            <div class="scroller scrollerFirst">
                                <svg class="scroller__thumb" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                    <polygon points="0 50 37 68 37 32 0 50" style="fill:#fff"/>
                                    <polygon points="100 50 64 32 64 68 100 50" style="fill:#fff"/>
                                </svg>
                                <span class="position-relative d-block">
                                <img src="{{URL::asset('/images/drag-anim.gif')}}" class="drag-indicator"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 home-swip-column pl-lg-5">
                    <div id="page1" class="wrapper-upper mt-3 mt-lg-0">
                        <div class="wrapper wrapperSecond">
                            <div class="before">
                                <div id="hotspotImg" class="responsive-hotspot-wrap">
                                    <img src="{{URL::asset('/images/home/Hero_1.jpg')}}" class="hotspot-image"  alt="" >
                                    <div class="hot-spot right-sides-first">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Sliding doors provide a very clean look and very easy to install.</p>
                                            <p>
                                                This type of closet door works best in closets with wide openings, such as across one whole wall of a bedroom.
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-second">
                                        <div class="circle"></div>
                                        <div class="tooltip tooltip-custom-left">
                                            <div class="text-row">
                                            <p>The heavier weight of our doors ensures the slide smoothly and easily past each other allowing access to half of the closet opening.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="after">
                                <div id="secondhotspotImg" class="responsive-hotspot-wrap">
                                    <img src="{{URL::asset('/images/home/Hero_2.jpg')}}" class="hotspot-image" alt="">                                    
                                </div>
                            </div>
                            <div class="scroller scrollerSecond">
                                <svg class="scroller__thumb" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                    <polygon points="0 50 37 68 37 32 0 50" style="fill:#fff"/>
                                    <polygon points="100 50 64 32 64 68 100 50" style="fill:#fff"/>
                                </svg>
                                <span class="position-relative d-block">
                                <img src="{{URL::asset('/images/drag-anim.gif')}}" class="drag-indicator"></span>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </section>
    <section class="home-page-section home-step-2">
        <div class="container products-listing-container">
            <h2 class="home-step-heading">
                <span class="step-serial">Step 2:</span> Choose Your Style and Options 
            </h2>
            <p class="home-step-para">
                From style and color to width, height, panel count and more Custom Door and Mirror allows you to customize your closet doors to fit your style. 
            </p>
            <div class="product-wallpaper-slider pt-3">
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Bifold-Flush-cherry-4-panel,-cherry-trim.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Bifold-Flush-White-2-panel,-white-trim,-saddle.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_V2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Slider-Framed,-3-panel,-2-track,-chrome-trim_v2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""/></div>
                <div class="product-slideshow"><img data-lazy="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""/></div>
            </div>
            <div class="content-section">
                <div class="product-wallpaper-thumb">
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-Flush-cherry-4-panel,-cherry-trim.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-Flush-White-2-panel,-white-trim,-saddle.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_V2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Framed,-3-panel,-2-track,-chrome-trim_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""/></div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-page-section home-measure-step">
        <div class="container">
            <h2 class="home-step-heading">
                <span class="step-serial">Step 3:</span> Measure and fit 
            </h2>
            <p class="home-step-para">
                All of our custom closet doors are "True to Fit" which means we do all the calculations for you so that you get the proper fit.
            </p>
            <div class="measure-step-video">
                <img class="img-thumbnail" src="{{URL::asset('/images/home/measure.jpg')}}" alt="">
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('product/') }}" class="btn btn-fill-out">Build My Door</a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    $('.product-wallpaper-slider').slick({
        lazyLoad: 'ondemand',
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
        lazyLoad: 'ondemand',
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
