@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.order') }}">Orders</a></li>
            <li class="breadcrumb-item active">Order Details</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="card">
            <div class="card-header">
                <h4>Order Details </h4>
            </div>
            <div class="card-body">
                @include('partials.alert_msg')
                <div class="row">
                    <div class="col-md-6">
                        <table class="w-100">
                            <tr>
                                <th class="p-1">Order number</th>
                                <td class="p-1">: #{{ $order->order_no }}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Buyer Name</th>
                                @if ($order->temp_user == 1)
                                    <td class="p-1">: @if(isset($order->getBillingAddress->name)) {{ ucwords($order->getBillingAddress->name) }} (Guest)@endif</td>
                                @else
                                    <td class="p-1">: {{ ucwords($order->user->name) }}</td>
                                @endif
                            </tr>
                            <tr>
                                <th class="p-1">Billing Address</th>
                                <td class="p-1">: {{$order->getBillingAddress->name }}, {{ $order->getBillingAddress->mobile }}, {{ $order->getBillingAddress->address ?? '' }}, {{ $order->getBillingAddress->city}}, {{ $order->getBillingAddress->state}}, {{ $order->getBillingAddress->zipcode}}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Shipping Address</th>
                                <td class="p-1">: {{ $order->getShippingAddress->name ??  $order->getBillingAddress->name }}, 
                                {{ $order->getShippingAddress->mobile ??  $order->getBillingAddress->mobile }}, 
                                {{ $order->getShippingAddress->address ??  $order->getBillingAddress->address }}, {{ $order->getShippingAddress->city ??  $order->getBillingAddress->city}}, {{ $order->getShippingAddress->state ??  $order->getBillingAddress->state}}, {{ $order->getShippingAddress->zipcode ?? $order->getBillingAddress->zipcode}}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Shipping</th>
                                <td class="p-1">: ${{number_format(($order->getPaymentDetail->shipping ?? 0) , 2)}}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Taxes</th>
                                <td class="p-1">: ${{number_format(($order->getPaymentDetail->tax ?? 0) , 2)}}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Grand Total</th>
                                <td class="p-1">: ${{ $order->grand_total }}</td>
                            </tr>

                            <tr>
                                <th class="p-1">Order Date</th>
                                <td class="p-1">: {{ date("M j, Y", strtotime($order->created_at)) }}</td>
                            </tr>
                            
                        </table>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ url()->current() }}" method="post">
                            <table class="w-100">
                                <tr class="row m-0">
                                    <th class="p-1 col-sm-3">Order Status</th>
                                    <td class="p-1 col-sm-9">
                                        @csrf
                                        <select name="order_status" id="" class="form-control" required>
                                            <option value="1" @if($order->status == 1) selected @else disabled @endif > Received
                                            </option>
                                            <option value="2" @if($order->status == 2)
                                                    selected
                                                @elseif($order->status == 3 || $order->status == 4 || $order->status == 5)
                                                    disabled
                                                @endif > Confirmed
                                            </option>
                                            <option value="3" @if($order->status == 3)
                                                    selected
                                                @elseif($order->status == 1 || $order->status == 4 || $order->status == 5)
                                                    disabled
                                                @endif >Shipped
                                            </option>
                                            <option value="4" @if($order->status == 4)
                                                    selected
                                                @elseif($order->status == 2 || $order->status == 1 || $order->status == 5)
                                                    disabled
                                                @endif >Delivered
                                            </option>
                                            <option value="5" @if($order->status == 5)
                                                    selected
                                                @elseif($order->status == 2 || $order->status == 3 || $order->status == 4)
                                                    disabled
                                                @endif >Cancelled
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="text-right">
                                <button type="submit" class="btn btn-danger mt-2 mb-2">Submit</button>
                            </div>
                            <div class="text-danger text-right">After submit buyer will get email notification for order status change!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Order Products</h4>
            </div>
            <div class="card-body">
                <div class="overflow-auto table-responsive">
                    <div class="table-swipe-indicator"></div>
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Configured</th>
                                <th>Preview</th>
                                <th>Price</th> 
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->productList as $key => $value)
                            <tr>
                                <td>{{ $value->product->name }}</td>
                                <td>
                            @if( ! @empty(json_decode($value->configure_detail)))
                            
                            <table class="table table-striped">
                            <tbody>
                            @php
                            $detail = json_decode($value->configure_detail);
                            @endphp
                            
                            <tr>
                                <th class="p-0">Article Number: </th>
                                <td class="p-0">{{$detail[count($detail) - 2]}}</td>
                            </tr>
                            @foreach($detail as $key => $config)
                            @if(isset($config->label))
                            <tr>
                                <th class="p-0">{{$config->label}}:</th>
                                <td class="p-0">{{ucfirst(str_replace("cdm:","",$config->value))}}</td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                            </table>
                            @else
                            -------
                            @endif
                                </td>
                                <td><img src="
                                @if( ! @empty(json_decode($value->configure_detail)))
                                https://uploads.roomle.com/configurations/{{$detail[count($detail) - 1]}}/perspectiveImage.png
                                @else
                                {{ asset('upload/product/'.$value->product->images[0]->image)}}
                                @endif
                                " width="100px"></td>
                                <td>${{ $value->price }}</td>
                                <td>{{ number_format($value->product_quantity) }}</td>
                                <td>${{ number_format($value->price * $value->product_quantity, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection

@section('javascript')
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
@endsection
