@extends('layouts.front')
@section('content')
<!-- START SECTION Blog -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-8">
				<div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
						<div class="product-image">
                            <div class="product_img_box">
                                @if (isset($blog->image))
                                <img id="product_img" src="{{ asset('upload/blog/'.$blog->image)}}" data-zoom-image="{{ asset('upload/blog/'.$blog->image)}}" alt="product_img1"><a href="#" class="product_img_zoom" title="Zoom">
                                        <span class="linearicons-zoom-in"></span>
                                    </a>
                                @else
                                    <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{$blog->title}}</a></h4>
                                <div class="pr_desc">
                                    <p>{{$blog->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION Blog -->
@endsection