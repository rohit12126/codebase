@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
    <!-- <section class="section text-center">
        <div class="content-section">
            <h1 class="mt-3 mb-5 heading1">questions &amp; answers</h1>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="#fcompany" class="btn btn-fill-out w-100">Company</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="#faq1" class="btn btn-fill-out w-100">faq1</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-fill-out w-100">faq2</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-fill-out w-100">faq3</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-fill-out w-100">faq4</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-fill-out w-100">faq5</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="#faq1">
        <div class="content-section">
            <h2 class="heading2 mt-3 mb-5 text-center">Faq 1</h2>
            <div id="accordion">
            @foreach($faq_list as $faq)
                <div class="faq-card">
                <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq{{$faq->id}}">
                    {{$faq->title}}
                </a>
                </div>
                <div id="fq{{$faq->id}}" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                    <p>{{$faq->body}}</p>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </section> -->

    <section class="section resources">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/general-info-about-cdm-bifolds.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">General info about CDM bifolds</span>
                        <span class="resources-desc">Both bifold and sliding doors offer great benefits over the traditional hinged or
                            full swinging door</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/general-info-about-cdm-sliders.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">General Info about CDM sliders</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/bifold-door-installation-instructions.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Bifold door installation instructions</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a data-fancybox class="resources-card" href="https://youtu.be/VelzyKeK6V8">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/video.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/video-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">
                            Watch Bifold Installation video
                        </span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/sliding-door-installation-instructions.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Sliding door installation instructions</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/how-to-install-bifold-aligners.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">How to install bifold aligners</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/bifold-components.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Bifold components</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/slider-components.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Slider components</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/what-is-difference-between-bevel-and-polished-edge.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">What is difference between bevel and polished edge</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/use-and-care.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Use and Care</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/warranty.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Warranty</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/floor-and-floor-plate-options.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Floor and floor plate options</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/how-to-install-a-jamb-bracket.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">How to install a jamb bracket</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/how-to-paint-cdm-doors.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">How to paint CDM doors</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/fold-bifolds-flat-to-wall.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <span class="resources-title">Fold bifolds flat to wall</span>
                        <span class="resources-desc">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
