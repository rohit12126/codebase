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
                                    <td class="p-1">: @if(isset($order->getBillingAddress->name)) {{ ucwords($order->getBillingAddress->name) }} @endif</td>
                                @else
                                    <td class="p-1">: {{ ucwords($order->user->name) }}</td>
                                @endif
                            </tr>

                            <tr> 
                                <th class="p-1">Shipping Address</th>
                                <td class="p-1">: {{ $order->getShippingAddress->address ?? '' }}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Billing Address</th>
                                <td class="p-1">: {{ $order->getBillingAddress->address ?? '' }}</td>
                            </tr>
                            <tr>
                                <th class="p-1">Grand Total</th>
                                <td class="p-1">: $ {{ $order->grand_total }}</td>
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
                                            <option value="1" @if($order->status == 1) selected @endif </option> New
                                            </option>
                                            <option value="2" @if($order->status == 2) selected @endif </option>Received
                                            </option>
                                            <option value="3" @if($order->status == 3) selected @endif </option>Shipped
                                            </option>
                                            <option value="4" @if($order->status == 4) selected @endif </option>Delivered
                                            </option>
                                            <option value="5" @if($order->status == 5) selected @endif </option>Cancled
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
                <table class="table table-striped table-bordered table-hover datatable">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th> 
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->productList as $key => $value)
                        <tr>
                            <td>{{ $value->product->name }}</td>
                            <td>$ {{ $value->price }}</td>
                            <td>{{ number_format($value->product_quantity) }}</td>
                            <td>$ {{ number_format($value->price * $value->product_quantity, 2) }}</td>
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

@endsection