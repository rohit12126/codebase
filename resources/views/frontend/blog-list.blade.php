@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="blog-view">
    <div class="blog-view-inner">
    <h2 class="pt-5 pb-3 text-center">Blogs</h2>
    <div>
        <ul class="nav justify-content-center products-tab-ul mb-3">
            <li class="">
                <a class="btn btn-outline-secondary active">All</a>
            </li>
            <li class="">
                <a class="btn btn-outline-secondary">sofa set</a>
            </li>
            <li class="">
                <a class="btn btn-outline-secondary">furniture</a>
            </li>
        </ul>.
    </div>
    <div class="section blog-list-view">
        <div class="">
            <div class="blog-row justify-content-center">
                @if($blogs->isEmpty()) 
                <div class="col-md-12 col-12 text-center">
                    <h3>No Blog available.</h3>
                </div>
                @else
                @foreach ($blogs as $blog)
                <div class="blog-col">
                    <a href="blog-view.php">
                        <article class="blog-list-card">
                            <p class="blog-list-title">
                                <a href="{{ route('blog.detail',['id' => $blog->id]) }}">{{$blog->title}}</a>
                            </p>
                            <a href="{{ route('blog.detail',['id' => $blog->id]) }}">
                                @if (isset($blog->image))
                                    <img src="{{ asset('upload/blog/'.$blog->image)}}" alt="product_img1" class="blog-img">
                                @else
                                    <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1" class="blog-img">
                                @endif
                            </a>
                            <div class="blog-foot">
                                <div class="blog-read-time">
                                    <i class="linearicons-clock3"></i>
                                    <p>2 mins Read</p>
                                </div>
                                <a href="{{ route('blog.detail',['id' => $blog->id]) }}">
                                    <span class="blog-view-button">View</span>
                                </a>
                            </div>
                        </article>
                    </a>
                </div>       
                @endforeach
                @endif 
            </div>
        </div>
    </div>           
    </div>

    <!-- <div class="row">
        <div class="col-12">
            {{ $blogs->links() }}
        </div>
    </div> -->
    
</div>

@endsection