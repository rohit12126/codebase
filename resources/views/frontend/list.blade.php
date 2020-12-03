@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="products-category section">
        <div class="contai ner">
            <ul class="nav justify-content-center products-tab-ul">
                @foreach ($categories as $category)
                    <li class="">
                        <a class="btn btn-outline-secondary" data-toggle="tab" href="#{{ $category->elementId }}"> {{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content content-s ection pt-3 pb-3">
                @php
                    $i=0;    
                @endphp
                @foreach ($productArr as $key => $products)
                    <div class="tab-pane @if($i == 0) active @endif" id="{{$key}}">
                        <div class="products-list-row">
                            @foreach ($products as $product)
                                <div class="products-list-col">
                                    <div class="products-list-product">
                                        <a href="" class="">
                                            <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="...">
                                            <a href="#" class="btn btn-outline-secondary">Configure</a>
                                        </a>
                                        <div class="products-list-title"><h2>{{$product->name}}</h2></div>
                                        <div class="products-list-price">$ {{$product->sale_price}}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @php
                        $i++;    
                    @endphp 
                @endforeach
            </div>
        </div>
    </section>
@endsection
