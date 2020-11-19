
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
            
                <h3>Product Name : {{$data->productList[0]->product->name}}</h3>
            </div>
            <div class="card-body">
                    <p>{{$data->productList[0]->product->description}}</p>
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
                          <th>Order</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Quantity</th>
                          <th>Total</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <td>{{$data->order_no}}</td>
                            <td>{{$data->created_at->format('d-m-Y')}}</td>
                            <td>{{$data->status === 1 ? "In-Process" : ($data->status ===2 ? "Delivered" : "Cancel")}}</td>
                            <td>{{ $data->productList[0]->product_quantity }} </td>
                            <td>{{$data->grand_total}}</td>
                            </tr>
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