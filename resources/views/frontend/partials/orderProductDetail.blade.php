
@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <h1 class="pt-3 pb-4 mb-5 heading_s3 text-center">Order Tracking</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                <h6>Tracking No. : <span class="font-weight-bold">#{{$data->order_no}}</span></h6>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="track">
            <div class="step @if($data->status == 2) active @endif"> <span class="icon"> <i class="linearicons-check"></i> </span> 
                <span class="text">Order confirmed</span> 
            </div>
            <div class="step text-center @if($data->status == 3) active @endif"> <span class="icon"> <i class="linearicons-truck"></i> </span> 
                <span class="text"> Shipped</span> 
            </div>
            <div class="step text-right @if($data->status == 4) active @endif"> <span class="icon"> <i class="linearicons-thumbs-up"></i> </span> 
                <span class="text"> Delivered </span> 
            </div>
        </div>
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
                            {{ $data->getBillingAddress->address ?? '' }}            
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
                            {{ $data->getShippingAddress->address ?? '' }}            
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
                                                $ {{$product->price}}
                                            </span>
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#"data-toggle="modal" data-ordernum="{{$data->order_no}}" data-id="{{$product->product_id}}" data-target="#reviewModal">
                                        <i class="linearicons-pencil4"></i> &nbsp;Give a Review</a>                          
                                    </div>
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
                                        <span> $ {{number_format($product->price * $product->product_quantity, 2)}}</span>
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
                            <th>Give a Review</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->productList as $product)
                        <tr>
                            <td>{{$product->product->name}}</td>
                            <td>
                                @if (isset($product->product->images[0]->image))
                                    <img class="img-thumbnail" style="max-height: 90px;"src="{{ asset('upload/product/'.$product->product->images[0]->image)}}" alt="product_img1">
                                @else
                                    <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                                @endif
                            </td>
                            <td>$ {{$product->price}}</td>
                            <td>{{ number_format($product->product_quantity)}}</td>
                            <td>$ {{number_format($product->price * $product->product_quantity, 2)}}</td>
                            <td>
                                <a href="#"data-toggle="modal" data-ordernum="{{$data->order_no}}" data-id="{{$product->product_id}}" data-target="#reviewModal">
                                <i class="linearicons-pencil4"></i> &nbsp;Give a Review</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="grand-total">
                    <div class="cart-row">
                        <span>Order total :</span> 
                        <span><label id="subQty" class="mb-0" >$ {{$data->grand_total}}</label></span>
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
                      
                    </div>
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
                    <div class="ordered-review mb-2">
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star-outline"></i>
                        <i class="ion-android-star-outline"></i>
                    </div>
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