<div class="card">
    <div class="card-header">
            <h3>Orders</h3>
    </div>
        <div class="card-body">
			<div class="table-responsive">
                @if (!empty($orders->isNotEmpty()))
                    <div class="table-swipe-indicator"></div>
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
                                <td>
                                    @php
                                        $status = "";
                                        switch ($order->status) {
                                            case 1:
                                                $status = 'Received';
                                                break;

                                            case 2:
                                                $status = 'Confirmed';
                                                break;

                                            case 3:
                                                $status = 'Shipped';
                                                break;

                                            case 4:
                                                $status = 'Delivered';
                                                break;
                                            case 5:
                                                $status = 'Canclled';
                                                break;
                                        }       
                                    @endphp
                                    {{ $status }}
                                </td>
                                <td>$ {{number_format($order->grand_total, 2)}}</td>
                                @php
                                $date = $order->created_at->addDays(7);
                                @endphp
                                
                                <td>
                                <a href="{{url('account/orderdetails/')}}/{{$order->order_no}}" target="_blank" class="btn btn-fill-out btn-sm">Detail</a>
                                @if($order->status > 5)
                                <a href="{{url('account/ordercancel/')}}/{{$order->order_no}}" class="btn btn-fill-out btn-sm @if(($order->status > 3) OR ($date < Carbon\Carbon::now())) disabled @endif">Cancel</a>
                                @endif
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
