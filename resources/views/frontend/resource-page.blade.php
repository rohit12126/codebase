@extends('layouts.front')

@section('content')
<section class="section resources">
        <div class="container">
            <h1 class="pt-3 mb-5 heading_s3 text-center">Resources</h1>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/general-info-about-cdm-bifolds.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">General info about CDM bifolds</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/general-info-about-cdm-sliders.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">General Info about CDM sliders</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/bifold-door-installation-instructions.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Bifold door installation instructions</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('installation/') }}" class="resources-card" >
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/video.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/video-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View Video</div>
                        <span class="resources-title">
                            Watch Installation Videos
                        </span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/sliding-door-installation-instructions.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Sliding door installation instructions</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/how-to-install-bifold-aligners.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">How to install bifold aligners</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/bifold-components.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Bifold components</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/slider-components.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Slider components</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/what-is-difference-between-bevel-and-polished-edge.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">What is difference between bevel and polished edge</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/use-and-care.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Use and Care</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/warranty.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Warranty</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/floor-and-floor-plate-options.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Floor and floor plate options</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/how-to-install-a-jamb-bracket.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">How to install a jamb bracket</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/how-to-paint-cdm-doors.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">How to paint CDM doors</span>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="resources-card" target="_blank" href="{{URL::asset('assets/resources/fold-bifolds-flat-to-wall.pdf')}}">
                        <div class="resources-icon">
                            <img src="{{URL::asset('/images/icon/pdf.svg')}}" alt="">
                            <img src="{{URL::asset('/images/icon/pdf-white.svg')}}" class="white-svg">
                        </div>
                        <div class="resources-indicator">View PDF</div>
                        <span class="resources-title">Fold bifolds flat to wall</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
