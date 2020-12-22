<div class="card">
    <div class="card-header">
            <h3>Orders</h3>
    </div>
        <div class="card-body">
			<div class="table-responsive">
                @if (!empty($orders->isNotEmpty()))
                    <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php  $i =1; @endphp
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$i}}.</td>
                                <td>#{{$order->order_no}}</td>
                                <td>{{date("M j, Y", strtotime($order->created_at))}}</td>
                                <td>{{$order->status === 1 ? "In-Process" : ($order->status ===2 ? "Delivered" : "Cancelled")}}</td>
                                <td>$ {{number_format($order->grand_total, 2)}}</td>
                                <td><a href="#" class="btn btn-fill-out btn-sm @if($order->status == 3) disabled @endif">Cancel</a>
                                <a href="{{url('account/orderdetails/')}}/{{$order->order_no}}" target="_blank" class="btn btn-fill-out btn-sm @if($order->status == 3) disabled @endif">Detail</a>
                                </td>
                            </tr>
                            @php  $i++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="mt-5 text-center">
                        <h6>You have not placed any order yet. Make you first order</h6>
                        <a class="btn btn-fill-out mt-4" href="{{route('product.list')}}">Shop Now</a>
                    </div>
                @endif
           </div>
       </div>
</div>
