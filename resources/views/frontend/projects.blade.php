@extends('layouts.front')
@section('content')
<section class="section projects-wrap">
        <div class="container">
            <h1 class="pt-3 pb-4 mb-5 heading_s3 text-center">Projects</h1>
            <div class="blog-row justify-content-center">
                <div class="blog-col">
                    <a href="{{ url('project/detail/') }}" target="_blank">
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
                    <a href="{{ url('project/detail/') }}" target="_blank">
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
                    <a href="{{ url('project/detail/') }}" target="_blank">
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
                    <a href="{{ url('project/detail/') }}" target="_blank">
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
                    <a href="{{ url('project/detail/') }}" target="_blank">
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
                    <a href="{{ url('project/detail/') }}" target="_blank">
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
