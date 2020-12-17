@extends('layouts.front')
@section('content')
<section class="section projects-wrap">
        <div class="container">
            <h1 class="text-center mb-5">Projects</h1>
            <div class="blog-row justify-content-center">
                <div class="blog-col">
                    <a href="">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project one
                            </div>
                            <div class="img-block">
                                <img src="{{URL::asset('/images/projects/projects1.jpg')}}" alt="" class="blog-img">
                            </div>
                            <div class="blog-foot">
                                <span class="blog-view-button">View</span>
                            </div>
                        </article>
                    </a>
                </div>   
                <div class="blog-col">
                    <a href="">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project two lorem ipsum
                            </div>
                            <img src="{{URL::asset('/images/projects/projects2.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <a href="">
                                    <span class="blog-view-button">View</span>
                                </a>
                            </div>
                        </article>
                    </a>
                </div>
                <div class="blog-col">
                    <a href="">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project one
                            </div>
                            <img src="{{URL::asset('/images/projects/projects3.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <a href="">
                                    <span class="blog-view-button">View</span>
                                </a>
                            </div>
                        </article>
                    </a>
                </div>   
                <div class="blog-col">
                    <a href="">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project two lorem ipsum
                            </div>
                            <img src="{{URL::asset('/images/projects/projects2.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <a href="">
                                    <span class="blog-view-button">View</span>
                                </a>
                            </div>
                        </article>
                    </a>
                </div> 
                <div class="blog-col">
                    <a href="">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project one
                            </div>
                            <img src="{{URL::asset('/images/projects/projects3.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <a href="">
                                    <span class="blog-view-button">View</span>
                                </a>
                            </div>
                        </article>
                    </a>
                </div>  
                <div class="blog-col">
                    <a href="">
                        <article class="blog-list-card">
                            <div class="blog-list-title">
                                Custom closet project two lorem ipsum
                            </div>
                            <img src="{{URL::asset('/images/projects/projects1.jpg')}}" alt="" class="blog-img">
                            <div class="blog-foot">
                                <a href="">
                                    <span class="blog-view-button">View</span>
                                </a>
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
