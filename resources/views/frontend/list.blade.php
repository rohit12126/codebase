@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="products-category section">
        <div class="container">
            <ul class="nav justify-content-center products-tab-ul mb-4">
                <li class="">
                    <a href="{{ route('product.list') }}" class="btn btn-outline-secondary @if(empty($catSlug)) active  @endif">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="">

                        {{-- route('product.list',['category_id' => $category->id]) --}}
                        <a class="btn btn-outline-secondary @if($category->slug == $catSlug) active  @endif" href="{{ url('product/').'/'.$category->slug }}"> {{ $category->name }}</a>
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
                                <a href="{{ url('product/detail/').'/'.$product->slug }}" class="">
                                    <div class="product-list-inner">
                                        <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="...">
                                    </div>
                                </a>
                                <a href="{{ url('product/configure/').'/'.$product->slug }}" class="btn btn-fill-out">
                                    <i class="linearicons-hammer-wrench"></i> Configure
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
@endsection