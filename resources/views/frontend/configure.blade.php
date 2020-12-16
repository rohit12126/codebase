@extends('layouts.front')

@section('content')
<section class="product-detail-view">
        <div class="container">
            <span class="product-detail-back">
                <a href="products.php" class="d-inline-block">&lt; back to overview</a>
            </span>
            <div class="text-md-center">
                <h1 class="product-detail-heading">4-Ipsum Panel</h1>
            </div>
            <div class="product-detail-slider">
                <div data-thumb="http://ecom.c247.website/upload/product/1607769690_file_505images.png">
                    <a data-fancybox="gallery" href="http://ecom.c247.website/upload/product/1607769690_file_505images.png">
                        <img src="http://ecom.c247.website/upload/product/1607769690_file_505images.png">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="product-sku-no">UGG-BB-PUR-07</span>
                    <span class="product-sku">SKU (Stock Keeping Unit)</span>
                </div>
                <div class="col-md-6 text-md-right">
                    <span class="product-price">$ 50.00</span>
                    <span class="product-price-tax">Incl. VAT</span>
                </div>
            </div>
            <div class="pt-4 pb-4 d-flex justify-content-center">
            <a href="javascript:void(0)" class="btn btn-fill-out add-to-cart">
                <i class="linearicons-cart-plus"></i> Buy Now
            </a>
            <a href="javascript:void(0)" class="btn btn-fill-out add-to-cart">
                <i class="linearicons-cart-plus"></i> Add to cart
            </a>
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
<section class="section light-bg">
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
</section>
<section class="section pl-0 pr-0">
    <h3 class="pb-3 text-center">Product Gallery</h3>
    <div class="product-wallpaper-slider">
        <img src="{{URL::asset('/images/first-slide.jpg')}}" alt="">
        <img src="{{URL::asset('/images/second-slide.jpg')}}" alt="">
        <img src="{{URL::asset('/images/third-slide.jpg')}}" alt="">
        <img src="{{URL::asset('/images/second-slide.jpg')}}" alt="">
        <img src="{{URL::asset('/images/first-slide.jpg')}}" alt="">
        <img src="{{URL::asset('/images/third-slide.jpg')}}" alt="">
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="comments">
            <div class="text-center mb-3">
                <h3>Reviews &amp; Rating</h3>
            </div>
            <div class="rating-counter">
                <span>
                <div class="rating-points">5
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==" class="rating-star"></div>
                </span>
                <span class="rating-count-no"><span><span>100 Ratings&nbsp;</span><span class="rating-amp">&amp;</span><span>&nbsp;Reviews</span></span></span>
            </div>
            <ul class="list_none comment_list mt-4">
                <li>
                    <div class="comment_img">
                        <img src="{{URL::asset('/images/review-user.png')}}" alt="user1">
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
                        <img src="{{URL::asset('/images/review-user.png')}}" alt="user2">
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
</section>
@endsection

@section('scripts')
<script>
    $('.product-wallpaper-slider').slick({
        autoplay: true,
        arrows: true,
        speed: 1000,
        autoplaySpeed: 5000,
        centerMode: true,
        dots: false,
        centerPadding: '15%',
        infinite: true,
        slidesToShow: 1, 
        slidesToScroll: 1,
        lazyLoad: 'progressive'
    });
</script>

@endsection
