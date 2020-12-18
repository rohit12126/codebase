@extends('layouts.front')
@section('content')
<section class="section projects-wrap">
        <div class="container">
            <h1 class="text-center mb-5">Projects</h1>
            <div class="blog-row justify-content-center">
                <div class="blog-col">
                    <a href="https://www.straubconstruction.com/portfolio-item/science-city-at-union-station/" target="_blank">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project one
                            </div>
                                <img src="{{URL::asset('/images/projects/projects1.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div>   
                <div class="blog-col">
                    <a href="https://www.straubconstruction.com/portfolio-item/fort-leavenworth-transient-barracks/" target="_blank">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project two lorem ipsum
                            </div>
                            <img src="{{URL::asset('/images/projects/projects2.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div>
                <div class="blog-col">
                    <a href="https://www.straubconstruction.com/portfolio-item/one-city-cafe/" target="_blank">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project one
                            </div>
                            <img src="{{URL::asset('/images/projects/projects3.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div>   
                <div class="blog-col">
                    <a href="https://www.straubconstruction.com/portfolio-item/heartland-preparedness-center/" target="_blank">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project two lorem ipsum
                            </div>
                            <img src="{{URL::asset('/images/projects/projects2.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div> 
                <div class="blog-col">
                    <a href="https://www.straubconstruction.com/portfolio-item/lees-summit-fire-station/" target="_blank">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project one
                            </div>
                            <img src="{{URL::asset('/images/projects/projects3.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div>  
                <div class="blog-col">
                    <a href="https://www.straubconstruction.com/portfolio-item/science-city-at-union-station/" target="_blank">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project two lorem ipsum
                            </div>
                            <img src="{{URL::asset('/images/projects/projects1.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div>      
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
