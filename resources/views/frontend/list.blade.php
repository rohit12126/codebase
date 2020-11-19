@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-lg-9">
            	<div class="row shop_container list">
                    @if($products->isEmpty()) 
                    <div class="col-md-4 col-6">
                        <h3>No product available.</h3>
                    </div>
                    @else
                        @foreach ($products as $product)
                        <div class="col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="{{ route('product.detail',['id' => $product->id]) }}">
                                    @if (isset($product->images[0]->image))
                                        <img src="{{ asset('product_images/'.$product->images[0]->image)}}" alt="product_img1">
                                    @else
                                        <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                    @endif
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                <input type="hidden" class="product-id" value="{{$product->id}}">
                                                <a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{ route('product.detail',['id' => $product->id]) }}">{{$product->name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">₹ {{$product->purchase_price}}</span>
                                        <del>₹ {{$product->sale_price}}</del>
                                        <div class="on_sale">
                                            @php
                                            $discount = $product->sale_price - $product->purchase_price;
                                            @endphp
                                            <span>₹ {{$discount}} Off</span>
                                        </div>
                                    </div>
                                    <div class="pr_desc">
                                        <p>{{$product->description}}</p>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                <input type="hidden" class="product-id" value="{{$product->id}}">
                                                <a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    
                </div>
        		<div class="row">
                    <div class="col-12">
                        {{ $products->links() }}
                    </div>
                </div>
        	</div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    jQuery(document).ready(function(){
        jQuery('.add-to-cart').click(function(e) {
            var productId = $(this).children( ".product-id" ).val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/add-cart') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    alert("Item successfully added to the cart.");
                    //location.reload(true);
                }});
        }); 
    });
</script>
@endsection