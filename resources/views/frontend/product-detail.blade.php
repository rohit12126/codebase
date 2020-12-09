@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="section product-detail2">
    <div class="container-lx">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap">
                @foreach ($productData['product']->images as $image)
                    <div class="img-tile">
                        <div class="product-list-inner">
                            <a data-fancybox="gallery" href="{{ asset('upload/product/'.$image->image)}}">
                                <img src="{{ asset('upload/product/'.$image->image)}}" class="" alt="...">
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <h1 class="pdp-title">
                    {{$productData['product']->name}}
                </h1>
                <h2 class="product2-category">sofa set, furniture</h2>
                <div class="rating-counter">
                        <span>
                           <div class="rating-points">3.8
                               <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==" class="rating-star"></div>
                        </span>
                        <span class="rating-count-no"><span><span>1,67,992 Ratings&nbsp;</span><span class="rating-amp">&amp;</span><span>&nbsp;23,456 Reviews</span></span></span>
                    </div>
                <hr>
                <p class="pdp-discount-container">
                    <span class="pdp-price" tabindex="0"><strong>&#36;{{$productData['product']->sale_price}}</strong></span>
                    <!-- <span class="pdp-mrp"><s>&#36;4599</s></span>
                    <span class="pdp-discount">(50% OFF)</span> -->
                </p>
                <p class="pdp-selling-price">
                    <span class="pdp-vatInfo">inclusive of all taxes</span>
                </p>
                <p class="sku-number">
                    <strong>SKU No.</strong> <span>UGG-BB-PUR-07</span>
                </p>
                <div class="pt-3 pb-3 d-flex">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary add-to-cart">
                        <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                        <i class="linearicons-cart-plus"></i> Add to cart
                    </a>
                </div>
                <!-- <div class="pincode-checkServiceAbilityhalfCard">
                    <div class="pincode-deliveryContainer">
                       <h4>
                           Delivery Options 
                           <span class="linearicons-truck"></span>
                       </h4>
                       <form autocomplete="off"><input type="text" placeholder="Enter pincode" class="pincode-code" value="" name="pincode"><input type="submit" class="pincode-check pincode-button" value="Check"></form>
                       <p class="pincode-enterPincode">Please enter PIN code to check Delivery Availability</p>
                    </div>
                 </div> -->
                 <hr>
                 <div class="pincode-checkServiceAbilityhalfCard">
                    <div class="pincode-deliveryContainer">
                       <h4>
                           Product Details
                           <span class="linearicons-document"></span>
                       </h4>
                       <p class="pdp-product-description-content">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias aliquid voluptates assumenda officiis, cum enim reprehenderit quo iure ut numquam accusamus quasi minus expedita quia. Esse consectetur fuga quos minima?
                       </p>
                       <p class="pdp-product-description-content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias aliquid voluptates assumenda officiis, cum enim reprehenderit quo iure ut numquam accusamus quasi minus expedita quia. Esse consectetur fuga quos minima?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
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
    <hr>
    <div class="container pt-5">
        <div class="comments">
            <h5 class="product_tab_title">2 Review For <span>{{$productData['product']->name}}</span></h5>
            <ul class="list_none comment_list mt-4">
                <li>
                    <div class="comment_img">
                        <img src="{{URL::asset('/images/about3.jpg')}}" alt="user1">
                    </div>
                    <div class="comment_block">
                        <div class="rating_wrap">
                            <div class="rating">
                                <div class="product_rate" style="width:80%"></div>
                            </div>
                        </div>
                        <p class="customer_meta">
                            <span class="review_author">Alea Brooks</span>
                            <span class="comment-date">March 5, 2018</span>
                        </p>
                        <div class="description">
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="comment_img">
                        <img src="{{URL::asset('/images/about2.jpg')}}" alt="user2">
                    </div>
                    <div class="comment_block">
                        <div class="rating_wrap">
                            <div class="rating">
                                <div class="product_rate" style="width:60%"></div>
                            </div>
                        </div>
                        <p class="customer_meta">
                            <span class="review_author">Grace Wong</span>
                            <span class="comment-date">June 17, 2018</span>
                        </p>
                        <div class="description">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <section class="product-wallpaper-slider">
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
    </section> 
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

    <!--Alert-->
    <!--Alert-->
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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Product has been added to your cart successfully',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            container: 'custom-success-popup-container',
                            popup: 'custom-success-popup',
                        }
                    })
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