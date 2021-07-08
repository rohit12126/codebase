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
    <div class="main-page-video d-flex align-items-center">
        <video class="video-autoplay" autoplay muted loop>
            <source src="{{URL::asset('/images/home/cdm-banner.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
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
                            Custom Door &amp; Mirror has a variety of designs making it easy to find exactly what you are looking for.
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
                            Our doors can be installed on any type of flooring check out the videos below to learn more
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
            Bifold and slider doors both offer their own unique advantages. Click on the RED hot spots below to learn more about which style is right for you.
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
                                            <p>Our Bifold doors use a patented cam-hinge system that is quiet, reliable, and has a lifetime warranty. CDM bifolds stay closed and don’t pop out slightly like lesser quality competitors.
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-second">
                                        <div class="circle"></div>
                                        <div class="tooltip">
                                            <p>CDM bifolds fold almost completely flat at the edge of your closet when opened allowing you to maximize accessible space. The CDM bifold only takes up 5-½” of your closet space when open. </p>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-third">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Bifold doors operate with a track at the top and pivot to the left or the right. This makes it possible to have no track on the floor. Sliders and some of our bifold competitors require a bottom track. Our bifolds do come with an optional oak saddle for the floor but it’s your choice if you want to use it or not based on your needs
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-fourth">
                                        <div class="circle" ></div>
                                        <div class="tooltip tip-upside">
                                            <div class="text-row">
                                            <p>CDM Bifolds are adjustable both vertically and horizontally so any imperfections in your opening; out-of-square, settled over time or uneven walls usually can be adjusted for.
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot left-sides-fifth">
                                        <div class="circle" ></div>
                                        <div class="tooltip tip-upside">
                                            <div class="text-row">
                                            <p>Bifolds are a good alternative to traditional doors in that they don’t stick out so far into the room. This makes them perfect for closets in tight spaces or hallways. Because they split in half as they open, they only project out into the room half the amount traditional swinging doors do.
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
                                            <p>Sliding doors allow access to half of your opening at any one time as they slide open. We also offer 3-panel, 3-track options that allow access to a full two thirds of your open at any time</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-second">
                                        <div class="circle"></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Both our Sliders and our Bifolds use heavy-duty extruded aluminum tracks. They are 2-sided and come in chrome, white or matching colors to fit almost any decor.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-third">
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Our mirror sliders are available in many different styles, including frameless or framed, beveled or polished. We offer non-mirror styles too so we can match a door seamlessly into your design choices. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-fourth">
                                        <div class="circle"></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Sliding Doors don't swing out, they operate on a track and like their name, they slide out for the way. Sliders are the perfect door for very tight hallways and closets where there is no space for a traditional door to swing into the room </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot right-sides-fifth">
                                        <div class="circle" ></div>
                                        <div class="tooltip tip-upside">
                                            <div class="text-row">
                                            <p>Our Sliding doors run on smooth, heavy duty ball-bearing rollers for a lifetime of reliable and quiet operation. They are adjustable so that any unevenness in your walls, floors, or opening can be accommodated for a perfect fitting door.</p>
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
                All of our custom closet doors are "True to Fit" which means we do all the calculations for you so that you get the proper fit. Our doors can be installed on any type of flooring check out the videos below to learn more.
            </p>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="specs-iframe-wrap">                            
                        <iframe class="specs-iframe-responsive" width="100%" height="320" src="https://player.vimeo.com/video/571741695?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="specs-iframe-wrap">                            
                        <iframe class="specs-iframe-responsive" width="100%" height="320" src="https://player.vimeo.com/video/571740752?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('product/') }}" class="btn btn-fill-out">Build My Door</a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
        jQuery(document).ready(function(){

            function touchScroller(className,wrapper) {
                let active = false;
                document.querySelector(className).addEventListener('mousedown',function(){
                    active = true;
                    document.querySelector(className).classList.add('scrolling');
                });
                document.body.addEventListener('mouseup',function(){
                    active = false;
                    document.querySelector(className).classList.remove('scrolling');
                });
                document.body.addEventListener('mouseleave',function(){
                    active = false;
                    document.querySelector(className).classList.remove('scrolling');
                }); 
                document.body.addEventListener('mousemove',function(e){
                    if (!active) return;
                    let x = e.pageX;
                    x -= document.querySelector(wrapper).getBoundingClientRect().left;
                    scrollIt(x);
                });
                function scrollIt(x){
                    let transform = Math.max(8,(Math.min(x,document.querySelector(wrapper).offsetWidth-20)));
                    document.querySelector(wrapper).querySelector('.after').style.width = transform+"px";
                    document.querySelector(className).style.left = transform+"px";
                }
                /* if (window.matchMedia("(max-width: 1200px)").matches) {
                    scrollIt(screen.width/2);
                } else {
                    scrollIt(600);
                } */
                scrollIt(document.querySelector(wrapper).offsetWidth/2);
                document.querySelector(className).addEventListener('touchstart',function(){
                    active = true;
                    document.querySelector(className).classList.add('scrolling');
                });
                document.body.addEventListener('touchend',function(){
                    active = false;
                    document.querySelector(className).classList.remove('scrolling');
                });
                document.body.addEventListener('touchcancel',function(){
                    active = false;
                    document.querySelector(className).classList.remove('scrolling');
                });
                document.body.addEventListener('touchmove',function(e){ 
                    if (!active) return;
                    let x = e.touches[0].pageX;
                    x -= document.querySelector(wrapper).getBoundingClientRect().left;
                    scrollIt(x); 
                });
            }
            window.addEventListener('load', (event) => {
                const classArray = [
                    {classname : '.scrollerFirst',wrap:'.wrapperFirst'},
                    {classname:'.scrollerSecond',wrap:'.wrapperSecond'}
                ]
                var i;
                for (i = 0; i < classArray.length; i++) {
                    touchScroller (classArray[i].classname,classArray[i].wrap);
                }
            });
        });
</script>
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
