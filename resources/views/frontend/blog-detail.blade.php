@extends('layouts.front')

@section('content')
<!-- START SECTION Blog -->
<div class="section blog-view">
    <div class="blog-view-inner container-fluid">
        <div class="row justify-content-center m-0">
            <div class="col-lg-2 mb-2 mb-lg-0">
                <div class="blog-sticky">
                    <a href="{{ url('blog/') }}" class="blog-back-btn">
                        <span class="linearicons-arrow-left"></span> back
                    </a>
                    <a class="blog-back-btn blog-share-btn" data-toggle="collapse" href="#shareIcons" role="button" aria-expanded="false" aria-controls="shareIcons">
                        <span class="linearicons-share"></span> share
                    </a>
                    <div class="collapse" id="shareIcons">
                        <a target="_blank" class="blog-back-btn d-block fb-icon" role="button" data-sharer="facebook" data-title="This is share from Custom Door and Mirror blog to twitter" data-hashtags="hashtag comma separated" data-url="blog-view.php" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&t=" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&t=', 
                            'newwindow', 
                            'width=600,height=550'); 
                            return false;">
                            <img src="{{URL::asset('/images/facebook.svg')}}" alt="">
                            Facebook
                        </a>
                            <a target="_blank" class="blog-back-btn d-block twitter-icon" role="button" data-sharer="twitter" data-title="This is share from Custom Door and Mirror blog to twitter" data-hashtags="hashtag comma separated" data-url="blog-view.php" href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url()->current()}}" onclick="window.open('https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url()->current()}}', 
                                'newwindow', 
                                'width=600,height=550'); 
                            return false;">
                            <img src="{{URL::asset('/images/twitter.svg')}}" alt="">
                            Twitter
                        </a>  
                        <!-- <a class="blog-back-btn d-block linkedin-icon" role="button" data-sharer="linkedin" data-url="">
                            <img src="img/icon/linkedin.svg" alt="">
                            Linkedin
                        </a> -->
                        <a target="_blank" class="blog-back-btn d-block pinterest-icon" role="button" data-sharer="pinterest" data-url="" href="http://pinterest.com/pin/create/link/?url=${{url()->current()}}&amp;description={{$blog->title}}" onclick="window.open('http://pinterest.com/pin/create/link/?url=${{url()->current()}}&amp;description={{$blog->title}}', 
                            'newwindow', 
                            'width=600,height=550'); 
                            return false;">
                            <img src="{{URL::asset('/images/pinterest.svg')}}" alt="">
                            pinterest
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mb-5 mb-lg-0 pr-3 bg-white">
                <article class="blog-view-card mb-4">
                    {{-- <h1 class="blog-view-title text-capitalize"> 
                        {{$blog->title}}
                    </h1> --}}
                    <h1 class="blog-view-title text-capitalize pt-3">{{$blog->title}}</h2>
                    <p>
                        {!! $blog->description !!}
                    </p>
                </article>
                <!-- <div class="blog-post-arrows">
                    <div class="blog-post-switcher">
                        <a class="blog-post-switcher-button mr-3" href="">
                            <i class="linearicons-arrow-left"></i>
                        </a>
                        <span class="blog-post-number">
                            <strong>1</strong> / 6
                        </span>
                        <a class="blog-post-switcher-button ml-3" href="">
                            <i class="linearicons-arrow-right"></i>
                        </a>
                    </div>
                </div> -->
            </div>
            <div class="blog-sidebar col-lg-3 col-md-6 col-sm-8 col-11">
                <div class="blog-sidebar-item">
                    <h3 class="blog-sidebar-title">Recent Blogs</h3>
                    @foreach($recent as $blog)
                    <div class="blog-col">
                        <a href="{{ url('blog/detail/').'/'.$blog->slug }}">
                            <article class="blog-list-card">
                                <p class="blog-list-title">
                                {{$blog->title}}
                                </p>
                                @if (isset($blog->image))
                                <img id="product_img" src="{{ asset('upload/blog/'.$blog->image)}}" data-zoom-image="{{ asset('upload/blog/'.$blog->image)}}" alt="product_img1">
                                @else
                                    <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                @endif
                                <div class="blog-foot">
                                    <div class="blog-read-time">
                                        <svg id="Untitled-Page%201" viewBox="0 0 20 20" style="background-color:#ffffff00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" width="20px" height="20px">
                                        <g id="Layer%201">
                                        <path id="Ellipse" d="M 1 10 C 1 5.0293 5.0295 1 10 1 C 14.9705 1 19 5.0293 19 10 C 19 14.9707 14.9705 19 10 19 C 5.0295 19 1 14.9707 1 10 Z" stroke="#b9b9b9" stroke-width="2" fill="none"></path>
                                        <path id="Line" d="M 10 10 L 10 6 " stroke="#b9b9b9" stroke-width="2" fill="none"></path>
                                        <path id="Line2" d="M 10.5 9.5 L 5.5 13.5 " stroke="#b9b9b9" stroke-width="2" fill="none"></path>
                                        </g>
                                        </svg>
                                        <p>{{$blog->catergory->name}}</p>
                                    </div>
                                    <a href="{{ url('blog/detail/').'/'.$blog->slug }}">
                                        <span class="blog-view-button">View</span>
                                    </a>
                                </div>
                            </article>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- ============================blog sidebar's code======================================== -->

<!-- END SECTION Blog -->
@endsection
