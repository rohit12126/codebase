@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="blog-view">
    <div class="blog-view-inner">
        <h1 class="pt-3 mb-5 heading_s3 text-center mb-4">Blogs</h1>
        <div class="container">
            <ul class="nav justify-content-center products-tab-ul mb-3 d-none d-md-flex">
                <li class="">
                    <a href="{{ route('blog.list') }}" class="btn btn-outline-secondary @if(empty($catSlug)) active  @endif">All</a>
                </li>
                @foreach ($blogsCategories as $cat)
                    <li class=""> 
                        <a href="{{ url('blog/').'/'.$cat->slug }}" class="btn btn-outline-secondary @if($catSlug == $cat->slug) active  @endif">{{ $cat->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="product-category-collapse d-block d-md-none">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#categoryCollapse">Categories &nbsp; <i class="ion-android-menu"></i></button>
                <div id="categoryCollapse" class="collapse category-collapse">
                    <ul> 
                        <li class="">
                            <a href="{{ route('blog.list') }}" class="dropdown-item nav-link nav_item @if(empty($catSlug)) active  @endif">All</a>
                        </li>
                        @foreach ($blogsCategories as $cat)
                            <li class=""> 
                                <a href="{{ url('blog/').'/'.$cat->slug }}" class="dropdown-item nav-link nav_item @if($catSlug == $cat->slug) active  @endif">{{ $cat->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
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
                        <a href="{{ url('blog/detail/').'/'.$blog->slug }}">
                            <article class="blog-list-card">
                                <p class="blog-list-title">
                                    {{$blog->title}}
                                </p>
                                <div class="img-block">
                                    @if (isset($blog->image))
                                        <img src="{{ asset('upload/blog/'.$blog->image)}}" alt="product_img1" class="blog-img">
                                    @else
                                        <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1" class="blog-img">
                                    @endif
                                </div>
                                <div class="blog-foot">
                                    <div class="blog-read-time">
                                        <i class="linearicons-clock3"></i>
                                        <p>{{$blog->catergory->name}}</p>
                                    </div>                                    
                                    <span class="blog-view-button">View</span>
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
