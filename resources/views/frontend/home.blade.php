@extends('layouts.front')
@section('content')


<!-- START SECTION SHOP -->
    <!-- <section class="home-slider-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption-up d-none d-md-block">
                    <h1>First slide label</h1>
                    <h4>Nulla vitae elit libero, a pharetra augue mollis interdum.</h4>
                </div>
                <div class="slider-inner-block">
                    <img src="{{URL::asset('/images/first-slide.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption-down d-none d-md-block">
                    <a href="{{ url('product/') }}" class="btn btn-fill-out">see the sofas</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-up d-none d-md-block">
                    <h1>First slide label</h1>
                    <h4>Nulla vitae elit libero, a pharetra augue mollis interdum.</h4>
                </div>
                <div class="slider-inner-block">
                    <img src="{{URL::asset('/images/second-slide.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption-down d-none d-md-block">
                    <a href="{{ url('product/') }}" class="btn btn-fill-out">see the sofas</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-up d-none d-md-block">
                    <h1>First slide label</h1>
                    <h4>Nulla vitae elit libero, a pharetra augue mollis interdum.</h4>
                </div>
                <div class="slider-inner-block">
                    <img src="{{URL::asset('/images/third-slide.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption-down d-none d-md-block">
                    <a href="{{ url('product/') }}" class="btn btn-fill-out">see the sofas</a>
                </div>
            </div>
          </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="linearicons-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="linearicons-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section> -->
    <div class="main-page-video">
        <iframe src="https://player.vimeo.com/video/358365319?autoplay=1&loop=1&title=0&byline=0&portrait=0&controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        <div class="video-banner-content">
            <div>
                <h1>Closet door shopping made easy</h1>
                <h2>Create custom closet doors that fits your style</h2>
            </div>
        </div>
        <div class="video-banner-btns">
            <a href="https://ecom.c247.website/product" class="btn btn-fill-out">Learn more</a>
            <a href="https://ecom.c247.website/product" class="btn btn-fill-out">shop now</a>
        </div>
    </div>
    <section class="home-steps home-page-section">
        <div class="home-step-shape"></div>
        <div class="container">
            <div class="row">
              <div class="col-md-7 pr-5">
                <h3>Finding the perfect closet doors to meet <br>your needs is only a few steps away.</h3>
              </div>
              <div class="col-md-5">
                
              </div>
            </div>
        </div>
    </section>
    <section class="home-swip-section home-page-section">
        <div class="container">
            <h2 class="home-step-heading">
                <span class="step-serial">Step 1:</span> Bifold Or Sliding Doors?
            </h2>
            <p class="home-step-para">
            Both bifold and sliding doors offer great benefits over the traditional hinged or full swinging door. They are handy whenever space is limited but also when a style update is needed.
            Custom Door &amp; Mirror has a variety of designs making it easy to find exactly what you are looking for. 
            </p>
            <div class="row mt-4">
                <div class="col-md-6 col-sm-12 home-swip-column pr-5">
                    <div id="page" class="wrapper-upper">
                        <div class="wrapper wrapperFirst">
                            <div class="before">
                                <div id="hotspotImg" class="responsive-hotspot-wrap">
                                    <img src="{{URL::asset('/images/home/door-closets-close.jpg')}}" class="hotspot-image"  alt="" >
                                    <div class="hot-spot" x="162" y="180" >
                                        <div class="circle" ></div>
                                        <div class="tooltip">
                                            <div class="text-row">
                                            <p>Because they are hinged, bifold doors take up very little floor space when opened, making them practical in small areas. These doors open outward toward the edge of the closet or opening, allowing access to as much as 90 percent of the closet's width when opened fully 
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-spot" x="502" y="205">
                                        <div class="circle"></div>
                                        <div class="tooltip tooltip-custom-left">
                                            <div class="text-row">
                                            <p>Keep in mind when the bifolds are fully open they take up about 5'/2" off the wall. So if you have a 4 panel opening you will use up 11</p>
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
                <div class="col-md-6 col-sm-12 home-swip-column pl-5">
                    <div id="page1" class="wrapper-upper">
                        <div class="wrapper wrapperSecond">
                            <div class="before">
                                <div id="hotspotImg" class="responsive-hotspot-wrap">
                                    <img src="{{URL::asset('/images/home/Hero_1.jpg')}}" class="hotspot-image"  alt="" >
                                    <div class="hot-spot" x="162" y="250" >
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
                                    <div class="hot-spot" x="502" y="205">
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
                <div class="col-md-6">
                    <div class="row home-steps-card">
                        <div class="col-6 pl-0">
                            <img src="{{URL::asset('/images/Hero_Sliding_image_02-min.jpg')}}" alt="">
                        </div>
                        <div class="col-6">
                            <div class="d-flex h-100 align-items-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ea officiis dolorum enim ad! Optio fuga earum placeat mollitia deleniti itaque deserunt corrupti neque odit, quas, nihil adipisci distinctio delectus! 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row home-steps-card">                        
                        <div class="col-6">
                            <div class="d-flex h-100 align-items-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ea officiis dolorum enim ad! Optio fuga earum placeat mollitia deleniti itaque deserunt corrupti neque odit, quas, nihil adipisci distinctio delectus! 
                            </div>
                        </div>
                        <div class="col-6 pr-0">
                            <img src="{{URL::asset('/images/Hero_Sliding_image_02-min.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-page-section home-option-step">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 pl-0 pr-5">
                    <img src="{{URL::asset('/images/Hero_Sliding_image_01.jpg')}}" alt="">
                    <div class="option-step-content">
                        <h3>Let's custom your own <br> slide closet</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex id quos expedita neque non, sit nesciunt! At exercitationem alia, rem ipsam impedit?
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 text-right pr-0">
                    <img src="{{URL::asset('/images/bifolddoors.jpg')}}" alt="">
                    <div class="option-step-content d-flex justify-content-center align-items-center">
                        <div class="text-left">
                            <h3>Let's custom your door closet</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex id quos expedita neque non, sit nesciunt! At exercitationem alia, rem ipsam impedit?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-page-section home-measure-step pb-5">
        <div class="container">
            <div class="measure-heading d-flex">
                <img src="{{URL::asset('/images/measure-tape.png')}}" alt="" class="measure-tape-img">
                <div class="">
                    <h2 class="home-step-heading text-left">
                        Measure 
                    </h2>
                    <p class="home-step-para text-left">
                        Officia voluptates unde mollitia repellendus, similique reiciendis corrupti ab eius a deleniti deserunt.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 pr-5">
                    <div class="home-measure-container">
                        <div class="home-meausre-top">
                            <div class="border-top-bottom-half"><span></span></div> 
                            <div class="unit-area set-width-top-rectangle">20.00 in.</div> 
                            <div class="border-top-bottom-half"><span class="left-auto-right-zero"></span></div>
                        </div>
                        <div class="home-meausre-left">
                            <div class="border-left-right-half"><span></span></div> 
                            <div class="unit-area set-length-left-rectangle">50.00 in.</div> 
                            <div class="border-left-right-half"><span class="top-auto-bottom-zero"></span></div>
                        </div>
                        <img src="{{URL::asset('/images/measure.jpg')}}" alt="" class="">
                    </div>
                </div>
                <div class="col-md-6 text-left">
                    <div class="d-flex align-items-center h-100">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nihil facilis corrupti commodi architecto. Doloremque eveniet ut, molestias fugiat adipisci voluptatibus nobis sapiente est incidunt provident quae optio! Labore, odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi numquam, veritatis sequi facere recusandae itaque cum suscipit beatae nobis nesciunt dolore, iure, aspernatur doloribus quo enim illum fugiat. Aspernatur, inventore?
                        </p>
                    </div>
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
    <section class="home-page-section the-cdm">
        <h2>
            The CDM Difference
        </h2>
    </section>
    <section class="grid-tiems-section">
        <div class="grid-2020">
           <div class="grid-column-image-wrapper b-lazy b-loaded" style="background-image: url({{URL::asset('/images/home/sitzfeldt-kostenlose-lieferung_0.jpg')}});">
              <span class="text-wrapper">
                 <p><strong>Free Delivery.</strong><br>Free and fast premium two-man delivery, all the way to your living room. Even the returns are free!</p>
              </span>
           </div>
           <div class="grid-column-image-wrapper b-lazy b-loaded" style="background-image: url({{URL::asset('/images/home/sitzfeldt-100-tage_0.jpg')}});">
              <span class="text-wrapper">
                 <p><strong>100 day trial.</strong><br>100 days of risk-free sitting. If it’s not a perfect fit, we’ll pick it up for free and refund your money.</p>
              </span>
           </div>
           <div class="grid-column-image-wrapper b-lazy b-loaded" style="background-image: url({{URL::asset('/images/home/sitzfeldt-nachhaltig_0.jpg')}});">
              <span class="text-wrapper hasstars">
                 <p><strong>Excellent service.</strong><br>Actual people, no bots, ready to help via email, chat or phone, Mon-Fri. from 9am - 6pm.<br><a href="tel:{{$setting->contact ?? '+49 (0)30 60 988 588'}}">&#8203;{{$setting->contact ?? '+49 (0)30 60 988 588'}}</a></p>
              </span>
           </div>
           <div class="grid-column-image-wrapper b-lazy b-loaded" style="background-image: url({{URL::asset('/images/home/sitzfeldt-faire-preise_0.jpg')}});">
              <span class="text-wrapper">
                 <p><strong>Sustainability.&nbsp;</strong><br>Our Promise: Made in Europe, wood sustainably forested and leather certified with the environmental label Blauer Engel.</p>
              </span>
           </div>
           <div class="grid-column-image-wrapper b-lazy b-loaded" style="background-image: url({{URL::asset('/images/home/sitzfeldt-ausgezeichnetes_design_0.jpg')}});">
              <span class="text-wrapper">
                 <p><strong>Awarded Design.</strong><br>Our sofas do not only excite customers but also experts and design juries.</p>
              </span>
           </div>
           <div class="grid-column-image-wrapper b-lazy b-loaded" style="background-image: url({{URL::asset('/images/home/sitzfeldt-service_0.jpg')}});">
              <span class="text-wrapper">
                 <p><strong>Fair Prices.</strong><br>Cutting out the middleman means a unique value-for-money deal for our customers.</p>
              </span>
           </div>
        </div>
    </section>

    <div class="modal fade" id="hotSpotModal" tabindex="-1" aria-labelledby="hotSpotModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header position-realtive">
                <h4 class="text-center">Watch Bifold Installation video</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="415" src="https://www.youtube.com/embed/VelzyKeK6V8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>

@endsection
