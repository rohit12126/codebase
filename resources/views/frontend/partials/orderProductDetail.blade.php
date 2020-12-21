
@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <h1 class="text-center mb-5">Order Tracking</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                <h6>Tracking No. : <span class="font-weight-bold">#{{$data->order_no}}</span></h6>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="track">
            <div class="step active"> <span class="icon"> <i class="linearicons-check"></i> </span> 
                <span class="text">Order confirmed</span> 
            </div>
            <div class="step text-center"> <span class="icon"> <i class="linearicons-truck"></i> </span> 
                <span class="text"> Shipped</span> 
            </div>
            <div class="step text-right"> <span class="icon"> <i class="linearicons-thumbs-up"></i> </span> 
                <span class="text"> Delivered </span> 
            </div>
        </div>
    </div>
	<div class="container">
        <div class="row">
            <div class="d-flex w-100 pt-3 pb-3">
                <div class="col-lg-6">
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-header">
                            <h5>Billing Address</h5>
                        </div>
                        <div class="card-body">
                        {{ $data->getBillingAddress->address }}            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-header">
                        
                            <h5>Shipping Address</h5>
                        </div>
                        <div class="card-body">
                        {{ $data->getShippingAddress->address }}            
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-12">
                <div class="cart-box">
                    <div class="">
                    <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Preview Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Give a Review</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($data->productList as $product)
                            <tr>
                                <td>{{$product->product->name}}</td>
                                <td>
                                    @if (isset($product->product->images[0]->image))
                                        <img class="img-thumbnail" style="max-height: 90px;"src="{{ asset('product_images/'.$product->product->images[0]->image)}}" alt="product_img1">
                                    @else
                                        <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                    @endif
                                </td>
                                <td>$ {{$product->price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td>$ {{$product->price * $product->product_quantity}}</td>
                                <td>
                                    <a href="#"data-toggle="modal" data-ordernum="{{$data->order_no}}" data-id="{{$product->product_id}}" data-target="#reviewModal">
                                    <i class="linearicons-pencil4"></i> &nbsp;Give a Review</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Order total</th>
                                <th>$ {{$data->grand_total}}</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</div>
<!-- Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reviewModalLabel">Submit Review/Rating</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="login_wrap">
              <div class="padding_eight_all bg-white">
                  <form id="review_form">
                  <div class="form-group">
                  <label for="review">Write a Review
                  </label>
                  <span class="mandatory">*</span>
                      <div class="input-group-prepend">
                          <textarea name="review" class="form-control" rows="4" cols="50"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                  <label for="rating">Rate us Out of 5 :)</label>
                  <span class="mandatory">*</span>
                      <select class="form-control" name="rating">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                      </select>
                      <input type="hidden" name="productId" value=""/>
                      <input type="hidden" name="orderNum" value=""/>
                  </div>
                      <div class="form-group">
                          <a href="#" class="btn btn-fill-out btn-block" id="submit_review">We Love to Here :)
                          </a>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  $('#reviewModal').on('show.bs.modal', function(e) {
      var productId = $(e.relatedTarget).data('id');
      var orderNum = $(e.relatedTarget).data('ordernum');
      
      $(e.currentTarget).find('input[name="productId"]').val(productId);
      $(e.currentTarget).find('input[name="orderNum"]').val(orderNum);
  });
  
  $('#submit_review').click(function () {
     $.ajaxSetup({
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
     var formdata = new FormData(document.getElementById("review_form"));
     $.ajax({
        url: "{{ url('submit/review') }}",
        method: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        success: function (response) {
           if (response.success == 1) { 
              setTimeout(function () {
                 location.reload();
              }, 1000);
           }
        },
        error: function (error) {
           var data1 = error.responseText;
           var jsoerrornResponse = JSON.parse(data1);
           alert(jsoerrornResponse.error);
        }
     })
  });
  </script>
@endsection()