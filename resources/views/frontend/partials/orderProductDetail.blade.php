
@extends('layouts.front')
@section('content')
<div class="main_content">
<style>
    .rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 1em;
    font-size: 3rem;
    color: #FFD600;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}

</style>
<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        @if($data->status == 5)
        <div class="text-center mt-5">
            <h2><b>This Order is Cancelled</b></h2>
            <h5>Looks like you have Cancelled this Order.</h5>
        </div>
        <div class="text-center mt-3 mb-3">
            <a href="{{ url('/') }}" class="btn btn-sm btn-fill-out mb-3 mb-sm-0 btn-same-w">Home</a>
            <a href="{{ url('product/') }}" class="btn btn-sm btn-fill-out btn-same-w align-top">Continue Shopping</a>
        </div>
        @else
        <h1 class="pt-3 pb-4 mb-5 heading_s3 text-center">Order Tracking</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                <h6>Tracking No. : <span class="font-weight-bold">#{{$data->order_no}}</span></h6>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="track">
            <div class="step @if($data->status >= 2) active @endif"> <span class="icon"> <i class="linearicons-check"></i> </span> 
                <span class="text">Order confirmed</span> 
            </div>
            <div class="step text-center @if($data->status >= 3) active @endif"> <span class="icon"> <i class="linearicons-truck"></i> </span> 
                <span class="text"> Shipped</span> 
            </div>
            <div class="step text-right @if($data->status == 4) active @endif"> <span class="icon"> <i class="linearicons-thumbs-up"></i> </span> 
                <span class="text"> Delivered </span> 
            </div>
        </div>
        @endif
    </div>
	<div class="container">
        <div class="row">
            <div class="d-flex w-100 pt-3 pb-3">
                @isset($data->getBillingAddress->address)
                    <div class="col-lg-6">
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header">
                                <h5>Billing Address</h5>
                            </div>
                            <div class="card-body">
                            {{$data->getBillingAddress->name}}</br>
                            {{$data->getBillingAddress->email}}</br>
                            {{$data->getBillingAddress->mobile}}</br>
                            {{$data->getBillingAddress->address}}</br>{{$data->getBillingAddress->city.', '.$data->getBillingAddress->state}}
                            </br>{{$data->getBillingAddress->zipcode}}
                            </div>
                        </div>
                    </div>
                @endisset
                @isset($data->getShippingAddress->address)
                    <div class="col-lg-6">
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header">
                                <h5>Shipping Address</h5>
                            </div>
                            <div class="card-body">
                            {{$data->getShippingAddress->name ?? $data->getBillingAddress->name}}</br>
                            {{$data->getShippingAddress->email ?? $data->getBillingAddress->email}}</br>
                            {{$data->getShippingAddress->mobile ?? $data->getBillingAddress->mobile}}</br>
                            {{$data->getShippingAddress->address ?? $data->getBillingAddress->address}}</br>{{$data->getShippingAddress->city ?? $data->getBillingAddress->city.', '.$data->getShippingAddress->state ?? $data->getBillingAddress->state}}
                            </br>{{$data->getShippingAddress->zipcode ?? $data->getBillingAddress->zipcode}}
                            
                            </div>
                        </div>
                    </div>
                @endisset
            </div>
            <hr>
            <div class="col-md-12">
                <div class="cart-for-mobile d-block d-lg-none">
                @foreach($data->productList as $product)
                    <div class="row m-0 mb-4 contact_style3 pl-0 pr-0">
                        <div class="col-md-5 col-lg-3 col-xl-3 cart-img-hr">
                            @if (isset($product->product->images[0]->image))
                                <img class="img-thumbnail cart-for-mobile-img" style="max-height: 90px;" src="{{ asset('upload/product/'.$product->product->images[0]->image)}}" alt="product_img1">
                            @else
                                <img src="{{ asset('product_images/download.jpeg')}}" class="cart-for-mobile-img" alt="product_img1">
                            @endif
                        </div>
                        <div class="col-md-7 col-lg-9 col-xl-9">
                            <div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-left cart-product-description">
                                        <h5 class="mb-4">{{$product->product->name}}</h5>
                                        <p>
                                            <span><strong>Unit Price :</strong></span>
                                            <span>
                                                ${{$product->price}}
                                            </span>
                                        </p>
                                    </div>
                                    @if($data->status == 4)
                                    <div>
                                        <a href="#"data-toggle="modal" data-ordernum="{{$data->order_no}}" data-id="{{$product->product_id}}" data-target="#reviewModal">
                                        <i class="linearicons-pencil4"></i> &nbsp;Give a Review</a>                          
                                    </div>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span>
                                            <strong>Quantity :</strong>
                                        </span>
                                        <span>
                                            {{ number_format($product->product_quantity)}}
                                        </span>
                                    </div>
                                    <p class="mb-0">
                                        <strong>Total :</strong>
                                        <span> ${{number_format($product->price * $product->product_quantity, 2)}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <table class="table cart-box d-none d-lg-table mb-0">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Preview Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            @if($data->status == 4)
                            <th>Give a Review</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->productList as $product)
                        <tr>
                            <td>{{$product->product->name}}</td>
                            <td>
                                <div class="order-track-img">
                                    @if (isset($product->product->images[0]->image))
                                        <img class="img-thumbnail" style="max-height: 90px;"src="{{ asset('upload/product/'.$product->product->images[0]->image)}}" alt="product_img1">
                                    @else
                                        <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                    @endif
                                </div>
                            </td>
                            <td>${{$product->price}}</td>
                            <td>{{ number_format($product->product_quantity)}}</td>
                            <td>${{number_format($product->price * $product->product_quantity, 2)}}</td>
                            @if($data->status == 4)
                            <td>
                                <a href="#"data-toggle="modal" data-ordernum="{{$data->order_no}}" data-id="{{$product->product_id}}" data-target="#reviewModal">
                                <i class="linearicons-pencil4"></i> &nbsp;Give a Review</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="grand-total">
                    <div class="cart-row">
                        <span>Order total :</span> 
                        <span><label id="subQty" class="mb-0" >${{$data->grand_total}}</label></span>
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
          <h5 class="modal-title" id="reviewModalLabel">Submit Review / Rating</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="login_wrap">
              <div class="padding_eight_all bg-white">
                  <form id="review_form">
                  <div class="form-group">
                  <label for="review">Review</label>
                  <span class="mandatory">*</span>
                      <div class="input-group-prepend">
                          <textarea name="review" id="reviewbox" class="form-control" rows="4" cols="50"></textarea>
                      </div>
                      <span class="text-danger" id="errorbox"></span>
                  </div>
                  <div class="form-group">
                  <label for="rating">Rate us Out of 5 :)</label>
                  <span class="mandatory">*</span>
                    <div class="rating"> 
                        <input type="radio" name="rating" value="5" id="5">
                        <label for="5">☆</label> 
                        <input type="radio" name="rating" value="4" id="4">
                        <label for="4">☆</label> 
                        <input type="radio" name="rating" value="3" id="3">
                        <label for="3">☆</label> 
                        <input type="radio" name="rating" value="2" id="2">
                        <label for="2">☆</label> 
                        <input type="radio" name="rating" value="1" id="1">
                        <label for="1">☆</label>
                    </div>
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
        error: function (response) {
            var error = response.responseText;
            var obj = JSON.parse(error);
            $("#reviewbox").addClass("is-invalid");
            $("#errorbox").text(obj.error);
        }
     })
  });
  </script>
@endsection()
