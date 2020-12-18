@extends('layouts.front')
@section('content')


<!-- START SECTION SHOP -->
    <section class="home-slider-section">
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
                    <a href="#stt" class="btn btn-fill-out">see the sofas</a>
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
                    <button class="btn btn-fill-out">see the sofas</button>
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
                    <button class="btn btn-fill-out">see the sofas</button>
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
    </section>

    <section class="home-swip-section p-relative">
        <h1 class="pt-5 mb-5 heading_s3 text-center">A Closet For Life</h1>
        <div id="page">
         <div class="wrapper">
            <div class="before">
                <div id="hotspotImg" class="responsive-hotspot-wrap">
                    <img src="{{URL::asset('/images/home/bifolddoors.jpg')}}" class="hotspot-image"  alt="" width="1920" height="700">
                    <div class="hot-spot" x="300" y="43" >
                        <div class="circle" ></div>
                        <div class="tooltip">
                            <div class="img-row">
                                <img src="https://picsum.photos/170/128/?random" alt="Jurong Lake Gardens #1" width="170" height="128">
                            </div>
                            <div class="text-row">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="hot-spot" x="1171" y="224">
                        <div class="circle"></div>
                        <div class="tooltip">
                            <div class="img-row">
                                <img src="https://picsum.photos/170/128/?random" alt="High Speed Rail" width="170" height="128">
                            </div>
                            <div class="text-row">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="after">
            <div id="secondhotspotImg" class="responsive-hotspot-wrap">
                    <img src="{{URL::asset('/images/home/slidingdoors.jpg')}}" class="hotspot-image" alt="" width="1920" height="700">
                    <div class="hot-spot" x="300" y="43">
                        <div class="circle" data-toggle="modal" data-target="#hotSpotModal"></div>
                    </div>

                    <div class="hot-spot" x="550" y="360">
                        <div class="circle"></div>
                        <div class="tooltip">
                            <div class="img-row">
                                <img src="https://picsum.photos/170/128/?random" alt="High Speed Rail" width="170" height="128">
                            </div>
                            <div class="text-row">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroller">
               <svg class="scroller__thumb" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                <polygon points="0 50 37 68 37 32 0 50" style="fill:#fff"/><polygon points="100 50 64 32 64 68 100 50" style="fill:#fff"/>
               </svg>
            </div>
         </div>
        </div>


    </section>

    <section class="home-products-section" id="stt">
        <h1 class="pt-5 mb-5 heading_s3 text-center">Our Products</h1>
        <div class="pd-block-wrap">
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/1.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/2.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/3.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/4.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/5.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/6.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/7.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
            <div class="pd-block">
                <a href="">
                    <div class="pd-inner">
                        <img src="{{URL::asset('/images/home/8.png')}}" alt="...">
                        <a href="#" class="btn btn-fill-out">Configure</a>
                    </div>
                </a>
            </div>
        </div>
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
                 <p><strong>Excellent service.</strong><br>Actual people, no bots, ready to help via email, chat or phone, Mon-Fri. from 9am - 6pm.<br><a href="tel:&#8203;+493060988588">&#8203;+49 30 60 988 588</a></p>
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
                <iframe width="766" height="415" src="https://www.youtube.com/embed/VelzyKeK6V8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>

@endsection