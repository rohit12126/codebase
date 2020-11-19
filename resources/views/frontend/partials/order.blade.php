<div class="card">
    <div class="card-header">
            <h3>Orders</h3>
    </div>
        <div class="card-body">
			<div class="table-responsive">
                <table class="table">
                  <thead>
                      <tr>
                          <th>Order</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        
                        <tr>
                         <td>{{$order->order_no}}</td>
                         <td>{{$order->created_at->format('d-m-Y')}}</td>
                         <td>{{$order->status === 1 ? "In-Process" : ($order->status ===2 ? "Delivered" : "Cancel")}}</td>
                         <td>{{$order->grand_total}}</td>
                         <td><a href="#" class="btn btn-fill-out btn-sm @if($order->status == 3) disabled @endif">Cancel</a>
                         <a href="{{url('account/orderdetails/')}}/{{$order->order_no}}" target="_blank" class="btn btn-fill-out btn-sm @if($order->status == 3) disabled @endif">Detail</a>
                         </td>
                     </tr>
                     @endforeach
                   </tbody>
               </table>
           </div>
       </div>
</div>
