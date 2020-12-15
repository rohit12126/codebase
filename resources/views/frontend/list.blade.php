@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="products-category section">
        <div class="container">
            <ul class="nav justify-content-center products-tab-ul mb-4">
                <li class="">
                    <a href="{{ route('product.list') }}" class="btn btn-outline-secondary @if(empty($categoryId)) active  @endif">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="">
                        <a class="btn btn-outline-secondary @if($category->id == $categoryId) active  @endif" href="{{ route('product.list',['category_id' => $category->id]) }}"> {{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="products-list-row">
                @if($products->isEmpty()) 
                    <div class="col-md-12 col-12 text-center">
                        <h3>No Product available.</h3>
                    </div>
                @else
                    @foreach ($products as $key => $product)
                        <div class="products-list-col">
                            <div class="products-list-product">
                                <a href="{{ route('product.detail',['id' => $product->id]) }}" class="">
                                    <div class="product-list-inner">
                                        <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="...">
                                    </div>
                                    <a href="#" class="btn btn-fill-out {{-- add-to-cart --}}">
                                        {{-- <input type="hidden" class="product-id" value="{{$product->id}}"> --}}
                                        Configure
                                    </a>
                                </a>
                                <div class="products-list-title"><h2>{{$product->name}}</h2></div>
                                <div class="products-list-price">$ {{$product->sale_price}}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
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
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result) {
                    $('.cart-count').html(result.data.cartCount);
                }
            });
        }); 
    });
</script>
@endsection