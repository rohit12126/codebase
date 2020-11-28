@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section blog-list-view">
    <div class="container">
    <div class="row justify-content-center">
        <div class="blog-list-content col-lg-9 mb-5 text-justify">
            <div class="row justify-content-center">
            @if($blogs->isEmpty()) 
            <div class="col-md-4 col-6">
                <h3>No Blog available.</h3>
            </div>
            @else
            @foreach ($blogs as $blog)
                <div class="col-md-6">
                    <article class="blog-card text-center">
                        <div class="blog-card-featured">
                            <a href="{{ route('blog.detail',['id' => $blog->id]) }}">
                                @if (isset($blog->image))
                                    <img src="{{ asset('upload/blog/'.$blog->image)}}" alt="product_img1">
                                @else
                                    <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                @endif
                            </a>
                        </div>
                        <h2 class="blog-card-title blog-list-title">
                        <a href="{{ route('blog.detail',['id' => $blog->id]) }}">{{$blog->title}}</a>
                        </h2>
                        <div class="blog-card-meta-info">
                            <span class="blog-card-post-date">November 23, 2020</span>
                            <span class="blog-card-post-author">by <span class="url fn"><a href="">admin</a></span></span>
                            <span class="blog-card-post-comments"><a href="" rel="comment">0 comments</a></span>
                        </div>
                        <div class="blog-post-content">
                            <p class="blog-post-para">
                            {{$blog->description}}
                            </p>
                        </div>
                        <div class="blog-more-tag">
                            <a href="blog-view.php" class="blog-more-btn">Continue Reading</a>
                        </div>
                    </article>
                </div>
            @endforeach
            @endif    
            </div>
        </div>
        <div class="blog-sidebar col-lg-3 col-md-6 col-sm-8 col-11 text-justify">
            <div class="blog-card blog-search">
                <form role="search" method="get" class="blog-search-form" action="">
                    <div class="blog-search-form">
                        <input type="search" class="form-control" placeholder="Search …" value="" name="s" title="Search for:" autocomplete="off">	
                        </div>
                </form>
            </div>
            <div class="blog-card blog-recent-post">
                <div class="blog-widget-title"><h3>Recent Posts</h3></div>
                <ul class="text-left">
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                </ul>
            </div>
            <div class="blog-card blog-trending">
                <div class="blog-widget-title"><h3>Category</h3></div>
                <ul class="text-left">
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                </ul>
            </div>
        </div>         
    </div>
               
    </div>

    <div class="row">
        <div class="col-12">
            {{ $blogs->links() }}
        </div>
    </div>
    </div>
</div>

@endsection