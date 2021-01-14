@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="products-category section">
        <div class="container">
            <ul class="nav justify-content-center products-tab-ul mb-4 d-none d-md-flex">
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
            <div class="product-category-collapse d-block d-md-none">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#categoryCollapse">Categories &nbsp; <i class="ion-android-menu"></i></button>
                <div id="categoryCollapse" class="collapse category-collapse">
                    <ul> 
                        <li>
                            <a href="{{ route('product.list') }}" class="dropdown-item nav-link nav_item @if(empty($catSlug)) active  @endif">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="">
                                {{-- route('product.list',['category_id' => $category->id]) --}}
                                <a class="dropdown-item nav-link nav_item @if($category->slug == $catSlug) active  @endif" href="{{ url('product/').'/'.$category->slug }}"> {{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="products-list-row">
                @if($products->isEmpty()) 
                    <div class="col-md-12 col-12 text-center">
                        <h3>No Product available.</h3>
                    </div>
                @else
                    @foreach ($products as $key => $product)
                        <div class="products-list-col">
                            <div class="products-list-product">
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="">
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="">
                                @endif
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class="">
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class="">
                                @endif
                                    <div class="product-list-inner">
                                        <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="...">
                                    </div>
                                </a>
                                @if($product->is_accessory == 0)
                                <a href="{{ url('product/configure/').'/'.$product->slug }}" class="btn btn-fill-out">
                                    <i class="linearicons-hammer-wrench"></i> Configure
                                </a>
                                @else
                                <a href="{{ url('product/detail/').'/'.$product->slug }}" class="btn btn-fill-out">
                                    <i class="linearicons-eye"></i> View Details
                                </a>
                                @endif
                                @if($product->is_accessory == 0)
                                    <a href="{{ url('product/configure/').'/'.$product->slug }}" class=""><div class="products-list-title"><h2>{{$product->name}}</h2></div></a>
                                @else
                                    <a href="{{ url('product/detail/').'/'.$product->slug }}" class=""><div class="products-list-title"><h2>{{$product->name}}</h2></div></a>
                                @endif
                                
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
    /* To Handle Browser Back From Payment page*/
    $(document).ready(function() {
        if (performance.navigation.type == 2) {
            location.reload(true);
        }
    });
</script>
@endsection
