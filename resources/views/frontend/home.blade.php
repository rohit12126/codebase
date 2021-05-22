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
            <h2 class="home-step-heading mb-4">
               How to get started
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <article class="start-steps-card">
                        <img src="{{URL::asset('/images/home/step-one.jpg')}}" alt="">
                        <div><span class="start-steps-number"><b title="Step first">1</b></span></div>
                        <h4 class="home-step-heading mb-4">Choose your door type</h4>
                        <p class="home-step-para">
                        Custom Door & Mirror has a variety of designs making it easy to find exactly what you are looking for.
                        </p>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="start-steps-card">
                        <img src="{{URL::asset('/images/home/step-two.jpg')}}" alt="">
                        <div><span class="start-steps-number"><b title="Step first">2</b></span></div>
                        <h4 class="home-step-heading mb-4">Choose style and options</h4>
                        <p class="home-step-para">
                        From style and color to width, height, panel count and more Custom Door and Mirror allows you to customize your closet doors to fit your style.
                        </p>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="start-steps-card">
                        <img src="{{URL::asset('/images/home/step-three.jpg')}}" alt="">
                        <div><span class="start-steps-number"><b title="Step first">3</b></span></div>
                        <h4 class="home-step-heading mb-4">Measure your door and fit</h4>
                        <p class="home-step-para">
                        All of our custom closet doors are <br> "True to Fit" which means we do all the calculations for you so that you get the proper fit.
                        </p>
                    </article>
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
                                            <p>Lifetime Warranty on all Hardware 
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-second">
                                        <div class="circle"></div>
                                        <div class="tooltip">
                                            <p>Track & Trim to match most decor (Chrome, White, or Matching)</p>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-third">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Custom sizes and configurations available to fit any size opening 
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-fourth">
                                        <div class="circle" ></div>
                                        <div class="tooltip tip-upside">
                                            <div class="text-row">
                                            <p>Fully adjustable for perfect fit on “not-so-perfect openings”
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-fifth">
                                        <div class="circle" ></div>
                                        <div class="tooltip tip-upside">
                                            <div class="text-row">
                                            <p>Optional Saddle and multiple installation methods to fit ALL applications
                                            </p>
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
                                            <p>Lifetime Warranty on all Hardware</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-second">
                                        <div class="circle"></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Track & Trim to match most decor (Chrome, White, or Matching)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-third">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Custom sizes and configurations available to fit any size opening</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-fourth">
                                        <div class="circle"></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Solid-backed and Impact Resistant (Mirror Doors)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-fifth">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Optional “Triple-Track” available</p>
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
    <section class="home-page-section home-measure-step">
        <div class="container">
            <h2 class="home-step-heading">
                <span class="step-serial">Step 3:</span> Measure and fit 
            </h2>
            <p class="home-step-para">
                All of our custom closet doors are "True to Fit" which means we do all the calculations for you so that you get the proper fit.
            </p>
            <div class="measure-step-video">
            <iframe width="100%" height="486" src="https://www.youtube.com/embed/videoseries?list=PLTR8e6AHZK3vVaSyVrVkUxkRvM3H1u5c3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
