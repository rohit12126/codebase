@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="product-detail-view">
        <div class="container">
            <span class="product-detail-back">
                <a href="url('product/')" class="d-inline-block">&lt; back to list</a>
            </span>
            <div class="text-md-center">
                <h1 class="product-detail-heading">{{$productData['product']->name}}</h1>
            </div>
            <div class="product-detail-slider">
                @foreach ($productData['product']->images as $image)
                    <div data-thumb="{{ asset('upload/product/'.$image->image)}}">
                        <a data-fancybox="gallery" href="{{ asset('upload/product/'.$image->image)}}">
                            <img src="{{ asset('upload/product/'.$image->image)}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="product-sku-no">UGG-BB-PUR-07</span>
                    <span class="product-sku">SKU (Stock Keeping Unit)</span>
                </div>
                <div class="col-md-6 text-md-right">
                    <span class="product-price">$ {{$productData['product']->sale_price}}</span>
                    <span class="product-price-tax">Incl. VAT</span>
                </div>
            </div>
            <div class="pt-4 pb-4 d-flex justify-content-center">
                <a href="{{url('checkout/address/')}}" class="btn btn-outline-secondary mr-3"><i class="linearicons-cart"></i> Buy now</a>
                
                <a href="javascript:void(0)" class="btn btn-outline-secondary add-to-cart">
                    <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                    <i class="linearicons-cart-plus"></i> Add to cart
                </a>
            </div>
        </div>
    </section>
    <section class="product-detail-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-property.png')}}" alt="">
                        <span class="d-block">
                            <strong>100 Days Comfortably Test.</strong>
                        </span>
                        <span>
                            We pick up your closet for free.
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-stars.png')}}" alt="" class="pt-2">
                        <span class="d-block">
                            <strong>Excellent service.</strong>
                        </span>
                        <span>
                            We are also there for you after the purchase.
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-delivery.png')}}" alt="">
                        <span class="d-block">
                            <strong>Free premium delivery.</strong>
                        </span>
                        <span>
                            We pick up your closet for free.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="product-wallpaper-slider">
        <div>
            <img class="img-fluid" src="https://www.sitzfeldt.com/sites/default/files/styles/780breit/public/01_tom_detail_gestell.jpg" alt="" />
        </div>
        <div>
            <img class="img-fluid" src="https://www.sitzfeldt.com/sites/default/files/styles/780breit/public/02_tom_3-sitzer_freisteller.jpg" alt="" />
        </div>
        <div>
            <img class="img-fluid" src="https://www.sitzfeldt.com/sites/default/files/styles/780breit/public/03_tom_detail.jpg" alt="" />
        </div>
        <div>
            <img class="img-fluid" src="https://www.sitzfeldt.com/sites/default/files/styles/780breit/public/04_tom_3-sitzer_freistellerplus.jpg" alt="" />
        </div>
        <div>
            <img class="img-fluid" src="https://www.sitzfeldt.com/sites/default/files/styles/780breit/public/05_tom_3-sitzer_angeschnitten.jpg" alt="">
        </div>
        <div>
            <img class="img-fluid" src="https://www.sitzfeldt.com/sites/default/files/styles/780breit/public/06_tom_ecksofa.jpg" alt="" />
        </div>
    </section> --}}
    {{-- <section class="section light-bg">
        <div class="container">
            <h2 class="heading2 mt-3 mb-5 text-center">Product Details</h2>
            <div id="accordion">
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq" aria-expanded="false">
                        What is so special about Custom Closet?
                    </a>
                  </div>
                  <div id="fq" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <p>
                        As an online sofa brand, Custom Closet manufactures designer sofas and sells them exclusively via www.customcloset.com. We do not compromise on quality; we want to develop high-quality sofas and offer them to you directly. We also convince our customers with our comprehensive services: free fabric and leather samples, our online room planner, and a personal product consultation by telephone, e-mail, chat or in our showrooms make your decision easy when buying a sofa.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq1" aria-expanded="false">
                        Why can Custom Closet offer such great prices?
                  </a>
                  </div>
                  <div id="fq1" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                        <p>
                        Custom Closet only produces to order and sells its products online. We do this directly and without intermediaries. We pass on these cost savings directly to our customers who find high-quality designer sofas at surprisingly low prices.
                        </p>
                    </div>
                  </div>
                </div>
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq2">
                        What quality standards does Custom Closet have?
                  </a>
                  </div>
                  <div id="fq2" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <p>
                        When it comes to quality, we do not compromise on our products! Demanding designs and high-quality materials are painstakingly used with every Custom Closet sofa. Seating comfort and design language are equally important to us. To live up to our product claims, every sofa undergoes a rigorous quality control before leaving production. This ensures that our customers receive their order in perfect condition.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- END SECTION SHOP -->
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function(){
        /* Add to cart functionality */
        jQuery('.add-to-cart').click(function(e) {
            var productId = $(".product-id").val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/add-cart') }}",
                method: 'post',
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    $('.cart-count').html(result.data.cartCount);
                }
            });
        });
        /* Remove from cart functionality */
        jQuery('.remove-from-cart').click(function(e) {
            var productId = $(".product-id").val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/remove-from-cart') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId
                },
                success: function(result){
                    alert("Item successfully removed from the cart.");
                    location.reload(true);
                }
            });
        });

        /* Update cart functionality */

        $(".qty").blur(function(e) {
            var productId = $(".product-id").val();
            var qty = $(this).val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/update-cart') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    productId : productId,
                    qty : qty
                },
                success: function(result){
                    alert("Item quantity updated successfully.");
                    location.reload(true);
                }
            });
        });
    });
</script>
@endsection