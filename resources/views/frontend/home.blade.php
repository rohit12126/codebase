@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-lg-9">
            	<div class="row shop_container list">
                    @if($blogs->isEmpty()) 
                    <div class="col-md-4 col-6">
                        <h3>No Blog available.</h3>
                    </div>
                    @else
                        @foreach ($blogs as $blog)
                        <div class="col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="{{ route('blog.detail',['id' => $blog->id]) }}">
                                    @if (isset($blog->image))
                                        <img src="{{ asset('upload/blog/'.$blog->image)}}" alt="product_img1">
                                    @else
                                        <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                    @endif
                                    </a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{ route('blog.detail',['id' => $blog->id]) }}">{{$blog->title}}</a></h6>
                                    <div class="pr_desc">
                                        <p>{{$blog->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    
                </div>
        		<div class="row">
                    <div class="col-12">
                        {{ $blogs->links() }}
                    </div>
                </div>
        	</div>
        </div>
    </div>
</div>
@endsection