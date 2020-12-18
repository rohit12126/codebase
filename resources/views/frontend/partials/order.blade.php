<div class="card">
    <div class="card-header">
            <h3>Orders</h3>
    </div>
        <div class="card-body">
			<div class="table-responsive">
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
                            <td>{{$i}}</td>
                            <td>#{{$order->order_no}}</td>
                            <td>{{date("F j y", strtotime($order->created_at))}}</td>
                            <td>{{$order->status === 1 ? "In-Process" : ($order->status ===2 ? "Delivered" : "Cancelled")}}</td>
                            <td>{{$order->grand_total}}</td>
                            <td><a href="#" class="btn btn-fill-out btn-sm @if($order->status == 3) disabled @endif">Cancel</a>
                            <a href="{{url('account/orderdetails/')}}/{{$order->order_no}}" target="_blank" class="btn btn-fill-out btn-sm @if($order->status == 3) disabled @endif">Detail</a>
                            </td>
                        </tr>
                        @php  $i++; @endphp
                        @endforeach
                        @if(is_null($orders)))
                        <tr>
                            <td colspan="5"><h5 class="text-center">You've not place any order yet  </h5></td>
                        </tr>
                        @endif
                   </tbody>
               </table>
           </div>
       </div>
</div>
