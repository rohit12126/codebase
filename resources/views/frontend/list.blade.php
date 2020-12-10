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
                                        <a href="{{ route('product.detail',['id' => $product->id]) }}" class="">
                                            <img src="@if(!empty($product->images[0]->image)) {{ url('upload/product/'. $product->images[0]->image)}}  @else https://www.sitzfeldt.com/sites/default/files/styles/menu_453px/public/2-sitzer-sitzfeldt-tom_1.jpg @endif " class="d-block w-100" alt="...">
                                            <a href="#" class="btn btn-outline-secondary {{-- add-to-cart --}}">
                                                {{-- <input type="hidden" class="product-id" value="{{$product->id}}"> --}}
                                                Configure
                                            </a>
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