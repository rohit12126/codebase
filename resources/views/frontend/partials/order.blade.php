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
                                                $status = 'Cancelled';
                                                break;
                                        }       
                                    @endphp
                                    {{ $status }}
                                </td>
                                <td>${{number_format($order->grand_total, 2)}}</td>
                                @php
                                $date = $order->created_at->addDays(7);
                                @endphp
                                <td>
                                <a href="{{url('account/orderdetails/')}}/{{$order->order_no}}" target="_blank" class="btn btn-fill-out btn-sm">Detail</a>
                                @if($order->status < 3) 
                                        @if($date > Carbon\Carbon::now())
                                <a href=""class="btn btn-fill-out btn-sm" data-toggle="modal" data-ordernum="{{$order->order_no}}" data-target="#cancelmodal">Cancel</a>
                                        @endif
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

{{--{{url('account/ordercancel/')}}/{{$order->order_no}}" class="btn btn-fill-out btn-sm--}}
<!-- Modal -->
<div class="modal fade" id="cancelmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Specify a reason below to cancel your order:</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="field_form">
            <form id="cancel_order_form">
                <div class="row">
                    <div class="form-group col-md-12">
                    <span class="text-danger"id="errorbox"></span>
                        <textarea required="required" placeholder="Write here..." id="description" class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="4"></textarea>
                        @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>
                    <input type="hidden" name="order_id" value="">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-fill-out btn-block" id="cancelSubmitButton">Cancel Order</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</div>
<script>
    $('#cancelmodal').on('show.bs.modal', function(e) {
        var orderNum = $(e.relatedTarget).data('ordernum');
        $(e.currentTarget).find('input[name="order_id"]').val(orderNum);
    });
    
    $('#cancelSubmitButton').click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var formdata = new FormData(document.getElementById("cancel_order_form"));
    $.ajax({
        url: "{{ route('ordercancel') }}",
        method: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success == 1) { 
                $("#description").addClass("is-valid");
                setTimeout(function () {
                    location.reload();
                }, 100);
            }
        },
        error: function (response) {
            var error = response.responseText;
            var obj = JSON.parse(error);
            $("#description").addClass("is-invalid");
            $("#errorbox").text(obj.errors.message);
        }
    })
});
</script>
