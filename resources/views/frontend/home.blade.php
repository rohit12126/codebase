@extends('layouts.front')
@section('content')
    <div class="main-page-video">
        <iframe src="https://player.vimeo.com/video/513525765?autoplay=1&loop=1&title=0&byline=0&portrait=0&controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        <div class="video-banner-content">
            <div>
                <h1>Closet door shopping made easy</h1>
                <h2>Create custom closet doors that fits your style</h2>
            </div>
        </div>
        <div class="video-banner-btns">
            <a href="#stepsStart" class="btn btn-fill-out mr-1 mr-lg-3">Learn more</a>
            <a href="{{ url('product/') }}" class="btn btn-fill-out">shop now</a>
        </div>
    </div>
    <section class="home-steps home-page-section">
        <div class="container">
            <h3>Finding the perfect closet doors to meet your needs is only a few steps away.</h3>
        </div>
    </section>
    <section class="home-swip-section home-page-section" id="stepsStart">
        <div class="container">
            <h2 class="home-step-heading">
                <span class="step-serial">Step 1:</span> Bifold Or Sliding Doors?
            </h2>
            <p class="home-step-para">
            Both bifold and sliding doors offer great benefits over the traditional hinged or full swinging door. They are handy whenever space is limited but also when a style update is needed.
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
    <section class="home-page-section home-swipe-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row home-steps-card mr-lg-3">
                        <div class="col-sm-8 pl-0">
                            <img class="six-panel-img" src="{{URL::asset('/images/home/6 Panel Bifold Open.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex h-100 align-items-center pb-3 pt-3">
                                <p class="mb-0">
                                    <strong>Our bifolds range from 2 to 8 panels.</strong>
                                    When choosing the option of 6 to 8 panels note that the middle door(s) will open in the center of the closet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ml-lg-3">
                        <div class="row home-steps-card pt-3 pb-3">                        
                            <div class="col-12">
                                <p class="mb-3">
                                    <strong>Our sliders range from 3 to 6 panels.</strong>
                                    When choosing the option of 3 or 4 panels you can select a "triple    track" to allow for a larger opening into you closet.
                                </p>
                            </div>
                            <div class="col-6 text-center">
                                <img class="" src="{{URL::asset('/images/home/Hero_2-2nd.jpg')}}" alt="">
                                <p class="mb-0 mt-1">
                                    3 Panel Slider "Double Track"
                                </p>
                            </div>
                            <div class="col-6 text-center">
                                <img class="" src="{{URL::asset('/images/home/2 Track Mirror Slider Open.jpg')}}" alt="">
                                <p class="mb-0 mt-1">
                                    3 Panel Slider "Triple Track"
                                </p>
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
                From style and color to width, height, panel count and more Custom Door and Mirror allows you to customize your closet doors to fit your style. Click on the "Hotspots" &#128308; below to discover some of the many option available.   
            </p>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing slider-routed">
                        <img src="{{URL::asset('/images/products/Slider-Routed.png')}}" alt="">
                        <h5 class="style-option-product-title">Slider Routed</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#slider-routed-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="slider-routed-modal" tabindex="-1" aria-labelledby="slider-routed-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          Routed doors are available in 11 different patterns 
                                      </h6>
                                    <img src="{{URL::asset('/images/home/Panel styles.png')}}" alt="">
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing bifold-mirror">
                        <img src="{{URL::asset('/images/products/Bifold-Mirror.png')}}" alt="">
                        <h5 class="style-option-product-title">Bifold Mirror</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#bifold-mirror-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="bifold-mirror-modal" tabindex="-1" aria-labelledby="bifold-mirror-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h6>
                                        Mirror doors are available with Polished or Beveled edges 
                                    </h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/Polished edge.png')}}" alt="">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/Beveled edge.png')}}" alt="">
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing slider-mir">
                        <img src="{{URL::asset('/images/products/Slider-Mir-Mel.png')}}" alt="">
                        <h5 class="style-option-product-title">Slider Mir-Mel</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#slider-mir-mel"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="slider-mir-mel" tabindex="-1" aria-labelledby="slider-mir-mel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          For Mir-Mel doors choose between the following colors 
                                      </h6>
                                    <img src="{{URL::asset('/images/home/Door colors.png')}}" alt="">
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing bifold-flush">
                        <img src="{{URL::asset('/images/products/Bifold-Flush.png')}}" alt="">
                        <h5 class="style-option-product-title">Bifold Flush</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#bifold-flush-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="bifold-flush-modal" tabindex="-1" aria-labelledby="bifold-flush-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          For Flush doors choose between the following colors 
                                      </h6>
                                    <img src="{{URL::asset('/images/home/Door colors.png')}}" alt="">
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing slider-framed">
                        <img src="{{URL::asset('/images/products/Slider-Framed.png')}}" alt="">
                        <h5 class="style-option-product-title">Slider Framed</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#slider-framed-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="slider-framed-modal" tabindex="-1" aria-labelledby="slider-framed-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          Choose from 2 to 4 panels on Sliders with optional "Triple Track" on 3 and 4 panel sliders 
                                      </h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/Side-Angle-Double-Track.png')}}" alt="">
                                            <h6>Double Track</h6>
                                        </div>
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/Side-Angle-Triple-Track.png')}}" alt="">
                                            <h6>Triple Track</h6>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing bifold-routed">
                        <img src="{{URL::asset('/images/products/Bifold-Routed.png')}}" alt="">
                        <h5 class="style-option-product-title">Bifold Routed</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#bifold-routed-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="bifold-routed-modal" tabindex="-1" aria-labelledby="bifold-routed-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          Bifol doors are available with or without saddle. Choose to extend the length of the door if you want to close the gap between the door and the floor or add a jamb bracket
                                      </h6>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/no-saddle.jpg')}}" alt="">
                                            <h6>No Saddle</h6>
                                        </div>
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/with-saddle.jpg')}}" alt="">
                                            <h6>With Saddle</h6>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing slider-mirror">
                        <img src="{{URL::asset('/images/products/Slider-Mirror.png')}}" alt="">
                        <h5 class="style-option-product-title">Slider Mirror</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#slider-mirror-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="slider-mirror-modal" tabindex="-1" aria-labelledby="slider-mirror-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          Our frameless style mirror adds a touch of high-end luxury and modern appeal (frame is behind the solid backed mirror panel)
                                      </h6>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing bifold-mir">
                        <img src="{{URL::asset('/images/products/Bifold-Mir-Mel.png')}}" alt="">
                        <h5 class="style-option-product-title">bifold Mir-Mel</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#bifold-mir-mel"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="bifold-mir-mel" tabindex="-1" aria-labelledby="bifold-mir-mel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h6>
                                          Choose your Bifold Handle style 
                                      </h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/Standard handle.png')}}" alt="">
                                            <h6>Standard </h6>
                                        </div>
                                        <div class="col-6">
                                            <img src="{{URL::asset('/images/home/Premium handle.png')}}" alt="">
                                            <h6>Premium </h6>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-listing slider-flush">
                        <img src="{{URL::asset('/images/products/Slider-Flush.png')}}" alt="">
                        <h5 class="style-option-product-title">Slider Flush</h5>
                        <div class="hot-spot">
                            <a href="#" type="button" data-toggle="modal" data-target="#slider-flush-modal"><div class="circle" ></div></a>
                        </div>
                        <div class="modal fade" id="slider-flush-modal" tabindex="-1" aria-labelledby="slider-flush-modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                      <h4>
                                          Choose your track trim colour 
                                      </h4>
                                      <h5>(some options depend on door Choice)</h5>
                                    <img src="{{URL::asset('/images/home/Door colors.png')}}" alt="">
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
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
                All of our custom closet doors are "True to Fit" which means we do all the calculations for you so that you get the proper fit. Whether you want your doors to go wall to wall or floor to ceiling, just measure the opening you want to fit and select those exact measurements in our configurator.
            </p>
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="mr-lg-2">
                        <h4 class="mb-3">Measure your opening</h4>
                        <img class="img-thumbnail" src="{{URL::asset('/images/home/measure.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="mb-3">Select your custom width and height* (to the 1/4 inch)</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-thumbnail" src="{{URL::asset('/images/home/Width Choice.png')}}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-thumbnail" src="{{URL::asset('/images/home/Height Choice.png')}}" alt="">
                        </div>
                    </div>
                    <h5 class="mt-4">*additional charge for cutting doors to non standard widths and heights*</h5>
                </div>                
                <div class="col-12">
                    <a href="{{ url('product/') }}" class="btn btn-fill-out">Build My Door</a>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="home-products-section" id="stt">
        <h1 class="pt-5 mb-5 heading_s3 text-center">Our Products</h1>
        <div class="pd-block-wrap">
        @if($products->isEmpty()) 
            <div class="col-md-12 col-12 text-center">
                <h3>No Product available.</h3>
            </div>
        @else
        @foreach ($products as $key => $product)
            <div class="pd-block">

                <div class="pd-inner">
                @if($product->is_accessory == 0)
                    <a href="{{ url('product/configure/').'/'.$product->slug }}">
                    @else
                    <a href="{{ url('product/detail/').'/'.$product->slug }}">
                    @endif
                    <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  
                    @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg 
                    @endif " class="d-block w-100" alt="...">
                    </a>
                    @if($product->is_accessory == 0)
                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="btn btn-fill-out"><i class="linearicons-hammer-wrench"></i> Configure</a>
                    @else
                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="btn btn-fill-out"><i class="linearicons-eye"></i> Details</a>
                    @endif
                </div>
            </div>
        @endforeach
        @endif
        </div>
    </section> -->
    <section class="cdm-grid-section">
        <div class="home-page-section cdm-difference">
            <h2>
                The CDM Difference
            </h2>
        </div>
        <div class="cdm-container">
            <div class="cdm-grid tile-first">
                <div class="w-100">
                    <div class="cdm-grid-upper">
                        <img src="{{URL::asset('/images/home/custom-closet.gif')}}" class="cdm-grid-gif">
                    </div>
                    <div class="cdm-grid-content">
                        Solid backing makes our door the strongest and most impact resistant door on the market
                    </div>
                </div>
            </div>
            <div class="cdm-grid tile-second">
                <img src="{{URL::asset('/images/home/Back-Mirror-Slider.png')}}" alt="">
            </div>
            <div class="cdm-grid tile-third">
                <div class="cdm-grid-content manged-grid-content">
                    Our sliding mirror closet doors are &#51;/&#52;&#34; PlyCorr (a densely corrugated cardboard that performs like wood without the added weight)
                </div>
            </div>
            <div class="cdm-grid tile-second bg-white">
                <img src="{{URL::asset('/images/home/Back-of-6-Panel-Bifold.png')}}" alt="">
            </div>
            <div class="cdm-grid tile-third bg-white">
                <div class="cdm-grid-content manged-grid-content color-grey">
                    CDM hardware allows for both vertical and horizontal adjustments to obtain a proper fit in the opening
                </div>
            </div>
            <div class="cdm-grid tile-first">
                <div class="w-100">
                    <div class="cdm-grid-upper">
                        <video autoplay loop muted>
                            <source src="{{URL::asset('/images/home/Solid Backed Mirror Slider Door.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="cdm-grid-content">
                        Our Trueclose, patented hinges help the door close and stay closed. With our liftime warranty, enjoy years of flawless and ultra-smooth use.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
