@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center order_complete">
                	<img src="{{ asset('images/success.png')}}" alt="" class="order-success-img">
                    <div class="heading_s1">
                        <h3 class="mb-3">Your order is completed!</h3>
                        <h5>Your order number is {{$order->order_no}}!</h5>
                    </div>
                  	<p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                </div>
            </div>
            <div class="mt-3 mb-3">
                <a href="{{ url('/') }}" class="btn btn-sm btn-fill-out mb-3 mb-sm-0 btn-same-w">Home</a>
                <a href="{{ url('account/orderdetails/').$order->order_no}}" class="btn btn-sm btn-fill-out mb-3 mb-sm-0 btn-same-w">Order detail</a>
                <a href="{{ url('product/') }}" class="btn btn-sm btn-fill-out btn-same-w">Continue Shopping</a>
            </div>
        </div>
    {{-- <div class="heading_s1">
        <h5>Let us Know How Much you Like our products !</h5>
    </div>
    <div class="col-lg-9">
        <div class="row shop_container list">
            <div class="col-md-4 col-6">
            @foreach ($product as $item)            
                <div class="product">
                    <div class="product_img">
                    <a href="">
                        @if (isset($item->product->images->image))
                            <img src="{{ asset('upload/product/'.$item->product->images[0]->image)}}" alt="product_img1">
                        @else
                            <img src="{{ asset('product_images/download.jpeg')}}" alt="product_img1">
                        @endif
                        </a>
                    </div>
                <div class="product_info">
                <h6 class="product_title"><a href="http://127.0.0.1:8000/product/detail?id=1">{{$item->product->name}}</a></h6>
                <div class="product_price">
                    <span class="price">$ {{$item->product->purchase_price}}</span>
                    <del>$ {{$item->product->sale_price}}</del>
                    <div class="on_sale">
                        @php
                        $discount = $item->product->sale_price - $item->product->purchase_price;
                        @endphp
                        <span>$ {{$discount}} Off</span>
                    </div>
                </div>
                    <div class="pr_desc">
                        <p>{{$item->product->description}}.</p>
                    </div>
                    <div class="list_product_action_box">
                        <ul class="list_none pr_action_btn">
                            <li class="add-to-cart">
                                <a href="#"data-toggle="modal" data-id="{{$item->product->id}}"data-target="#exampleModal">
                                <i class="icon-basket-loaded"></i>
                                Give a Review</a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
   </div>
 </div>
</div>  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Submit Review/Rating</h5>
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
$('#exampleModal').on('show.bs.modal', function(e) {
    var productId = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="productId"]').val(productId);
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
<!-- END SECTION SHOP -->
@endsection