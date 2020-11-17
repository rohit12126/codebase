@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-lg-9">
            	<div class="row shop_container list">
                    @foreach ($products as $product)
                    <div class="col-md-4 col-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="{{ route('product.detail', ['id' => $product->id ])}}">
                                    <img src="{{ asset('product_images/product_img1.jpg')}}" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{ route('product.detail', ['id' => '2' ])}}">{{$product->name}}</a></h6>
                                <div class="product_price">
                                    <span class="price">₹ {{$product->purchase_price}}</span>
                                    <del>₹ {{$product->sale_price}}</del>
                                    <div class="on_sale">
                                        @php
                                        $discount = $product->purchase_price / $product->sale_price *100;
                                        
                                        @endphp
                                        <span>{{round($discount, 2)}}% Off</span>
                                    </div>
                                </div>
                                <div class="pr_desc">
                                    <p>{{$product->description}}</p>
                                </div>
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        		<div class="row">
                    <div class="col-12">
                        {{ $products->links() }}
                    </div>
                </div>
        	</div>
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
            	<div class="sidebar">
                	<div class="widget">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="widget_categories">
                            <li><a href="#"><span class="categories_name">Women</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#"><span class="categories_name">Top</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#"><span class="categories_name">T-Shirts</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#"><span class="categories_name">Men</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#"><span class="categories_name">Shoes</span><span class="categories_num">(12)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Filter</h5>
                        <div class="filter_price">
                             <div id="price_filter" data-min="0" data-max="500" data-min-value="50" data-max-value="300" data-price-sign="$" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 10%; width: 50%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 10%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>
                             <div class="price_range">
                                 <span>Price: <span id="flt_price">$50 - $300</span></span>
                                 <input type="hidden" id="price_first">
                                 <input type="hidden" id="price_second">
                             </div>
                         </div>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Brand</h5>	
                        <ul class="list_brand">
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Arrivals" value="">
                                    <label class="form-check-label" for="Arrivals"><span>New Arrivals</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Lighting" value="">
                                    <label class="form-check-label" for="Lighting"><span>Lighting</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Tables" value="">
                                    <label class="form-check-label" for="Tables"><span>Tables</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Chairs" value="">
                                    <label class="form-check-label" for="Chairs"><span>Chairs</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="Accessories" value="">
                                    <label class="form-check-label" for="Accessories"><span>Accessories</span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Size</h5>
                        <div class="product_size_switch">
                            <span>xs</span>
                            <span>s</span>
                            <span>m</span>
                            <span>l</span>
                            <span>xl</span>
                            <span>2xl</span>
                            <span>3xl</span>
                        </div>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Color</h5>
                        <div class="product_color_switch">
                            <span data-color="#87554B" style="background-color: rgb(135, 85, 75);"></span>
                            <span data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>
                            <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>
                            <span data-color="#2F366C" style="background-color: rgb(47, 54, 108);"></span>
                            <span data-color="#B5B6BB" style="background-color: rgb(181, 182, 187);"></span>
                            <span data-color="#B9C2DF" style="background-color: rgb(185, 194, 223);"></span>
                            <span data-color="#5FB7D4" style="background-color: rgb(95, 183, 212);"></span>
                            <span data-color="#2F366C" style="background-color: rgb(47, 54, 108);"></span>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="shop_banner">
                            <div class="banner_img overlay_bg_20">
                                <img src="assets/product_images/sidebar_banner_img.jpg" alt="sidebar_banner_img">
                            </div> 
                            <div class="shop_bn_content2 text_white">
                                <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection