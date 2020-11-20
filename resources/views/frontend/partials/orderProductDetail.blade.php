
@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
        <div class="col-lg-6">
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
            
                <h3>Order Id : {{$data->order_no}}</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
            
                <h3>Billing Address</h3>
            </div>
            <div class="card-body">
            {{ $data->getBillingAddress->address }}            
        </div>
    </div>
    
    </div>
    <div class="col-lg-3">
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
            
                <h3>Shipping Address</h3>
            </div>
            <div class="card-body">
            {{ $data->getShippingAddress->address }}            
        </div>
    </div>
    
    </div>
    <hr>
            <div class="col-md-12">
            	<div class="compare_box">
               
                    <div class="table-responsive">
                    <table class="table">
                  <thead>
                      <tr>
                          <th>Product</th>
                          <th>Preview Image</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th></th>
                         
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($data->productList as $product)
                            <tr>
                            <td>{{$product->product->name}}</td>
                            <td>@if (isset($product->product->images[0]->image))
                                        <img class="img-thumbnail" style="max-height: 90px;"src="{{ asset('product_images/'.$product->product->images[0]->image)}}" alt="product_img1">
                                    @else
                                        <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                    @endif
                            </td>
                            <td>{{$product->product_quantity}}</td>
                            <td>{{$product->price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</div>
@endsection()