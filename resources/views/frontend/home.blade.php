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
                    <img src="https://lh3.googleusercontent.com/-4df0vdr5Yrg/X7uYSLQpdUI/AAAAAAAAOmk/EHR3k1dqf5MP_XUaO03eaJrbpXw-BXzCgCK8BGAsYHg/s0/2020-11-23.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption-down d-none d-md-block">
                    <a href="#stt" class="btn btn-outline-secondary">see the sofas</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-up d-none d-md-block">
                    <h1>First slide label</h1>
                    <h4>Nulla vitae elit libero, a pharetra augue mollis interdum.</h4>
                </div>
                <div class="slider-inner-block">
                    <img src="https://lh3.googleusercontent.com/-cagoug-4R40/X7uYTTggzoI/AAAAAAAAOms/ztG_A_wU0DQ_donL_Fodi4Z54uyTtl99wCK8BGAsYHg/s0/2020-11-23.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption-down d-none d-md-block">
                    <button class="btn btn-outline-secondary">see the sofas</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-up d-none d-md-block">
                    <h1>First slide label</h1>
                    <h4>Nulla vitae elit libero, a pharetra augue mollis interdum.</h4>
                </div>
                <div class="slider-inner-block">
                    <img src="https://lh3.googleusercontent.com/-UmMZt8z9qY8/X7uYSirXxYI/AAAAAAAAOmo/-xMw4Cm685Q6CjISh9fVsFQPJZFIw2dnQCK8BGAsYHg/s0/2020-11-23.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption-down d-none d-md-block">
                    <button class="btn btn-outline-secondary">see the sofas</button>
                </div>
            </div>
          </div>
        </div>
    </section>
    <h1 class="pt-5 pb-5 text-center">A Closet For Life</h1>
    <section class="home-swip-section p-relative d-flex justify-content-center">
        <div class="first-slide">
            <picture>
                <source type="image/webp" srcset="https://www.thefarmersdog.com/images/bowl-mixed-dd8a9c.webp">
                <source type="image/png" srcset="/images/bowl-ingredients-eb0c55.png">
                <img alt="Bowl of ingredients" class="inc454" >
            </picture>
        </div>
        <div class="second-slide">
            <picture>
                <source type="image/webp" srcset="https://www.thefarmersdog.com/images/bowl-ingredients-8dd243.webp">
                <source type="image/png" srcset="/images/bowl-mixed-08422a.png">
                <img alt="Bowl of The Farmer's Dog" class="Yq0BZd">
            </picture>
        </div>  
        <!-- <div class="mover"></div> -->
        <!-- <div id="page">
         <div class="wrapper">
            <div class="before">
               <img class="content-image" src="https://farm2.staticflickr.com/1638/26145024230_06acd55d1b_b.jpg" draggable="false"/>   
            </div>
            <div class="after">
               <img class="content-image" src="https://farm2.staticflickr.com/1663/25814974803_d4c55ff708_b.jpg" draggable="false"/>
            </div>
            <div class="scroller">
               <svg class="scroller__thumb" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><polygon points="0 50 37 68 37 32 0 50" style="fill:#fff"/><polygon points="100 50 64 32 64 68 100 50" style="fill:#fff"/></svg>
            </div>
         </div> -->
        </div>
    </section>
    <section class="home-products-section" id="stt">
        <div class="pd-block-wrap">
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-tom_1.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-air.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-panama_2.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-nimbus_2.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-view_1.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-nimbus_2.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-glanzstuck_0.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
            </div>
            <div class="pd-block">
                <div class="pd-inner">
                    <img src="{{URL::asset('/images/home/2-sitzer-sitzfeldt-set_2.jpg')}}" alt="...">
                    <a href="#" class="btn btn-outline-secondary">Configure</a>
                </div>
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
@endsection