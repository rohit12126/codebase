<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Find best residential properties in Noida, Agra, India - Buy all types of Luxury apartments, flats, plots at affordable price and get best deals from StarEstate.in">
    <meta name="keywords"
        content="property in india, residential property india, india property, apartments in india, property in noida, property in agra, property in greater noida, property in noida extension, property in delhi">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SITE TITLE -->
    <title>Ecommerce</title><!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}"><!-- Animation CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-animate.css')}}">Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-bootstrap.min.css')}}">
     <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet"> -->
     <script src="{{ asset('js/js-jquery-1.12.4.min.js')}}"></script>
     <script src="{{ asset('select-pure/dist/bundle.min.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('css/css-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-simple-line-icons.css')}}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('css/css-owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-owl.theme.default.min.css')}}"><!-- Magnific Popup CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-magnific-popup.css')}}">Slick CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-slick.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-slick-theme.css')}}">Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-responsive.css')}}">
</head>

<body>
    <header class="header_wrap fixed-top dd_dark_skin transparent_header">
        <div class="light_skin main_menu_uppercase" style="background-color: black;">
            <div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="logo_light" src="{{ asset('images/logo_light.png')}}" alt="logo">
                    <img class="logo_dark" src="{{ asset('images/logo_dark.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link"  href="#">Home</a></li>
                        <li><a class="nav-link nav_item" href="about.html">About Us</a></li> 
                        <li class="dropdown-mega-menu"><a class="nav-link" href="#" data-toggle="dropdown">Products</a></li>
                        <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li> 
                        <li>
                            <a class="nav-link" href="#" data-toggle="dropdown">Blog</a>
                        </li>
                        <li><a class="nav-link nav_item" href="faq.html">Faq</a></li>
                        @if (!Auth::guest())
                        <li><a class="nav-link nav_item" href="{{route('account')}}">My Account</a></li> 
                        @else
                        <li><a class="nav-link nav_item" href="{{route('login')}}">Login</a></li> 
                        @endif
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">{{ $cartCount }}</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @foreach ($cartContains as $product)
                                    <li>
                                        <a href="#" class="item_remove">
                                        <input type="hidden" class="rowId" value="{{$product->rowId}}">
                                        <i class="ion-close"></i></a>
                                        <a href="#"> {{$product->name}}</a>
                                        <span class="cart_quantity"> {{$product->qty}} x <span class="cart_amount"> <span class="price_symbole">₹</span></span>{{$product->price}}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">₹</span></span>{{$cartSubTotal}}</p>
                                <p class="cart_buttons"><a href="{{ url('/cart/') }}" class="btn btn-fill-line view-cart">View Cart</a>{{-- <a href="#" class="btn btn-fill-out checkout">Checkout</a> --}}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </header><!-- END HEADER -->

@yield('content')

<!--=================================
footer-->
@yield('fcontent')
    <div class="middle_footer mb-4 mb-md-5">
    	<div class="container">
        	<div class="row">
            	<div class="col-12">
                	<div class="contact_bottom_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style3 border-0 p-0">
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="icon_box_content">
                                    	<h5>Location</h5>
                                        <p>123 Street, Old Trafford, </br> NewYork, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style3 border-0 p-0">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="icon_box_content">
                                    	<h5>Email us</h5>
                                        <p><a href="mailto:info@sitename.com">info@sitename.com</a> </br> <a href="mailto:bestwebcreator.com">bestwebcreator.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style3 border-0 p-0">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="icon_box_content">
                                    	<h5>27/4 Online Support</h5>
                                        <p>Call for styling advice on </br> <a href="tell:+123 1234 5678">+123 1234 5678</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer bg_dark4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-md-right">
                        <li><a href="#"><img src="{{ asset('images/visa.png')}}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{ asset('images/discover.png')}}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{ asset('images/master_card.png')}}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{ asset('images/paypal.png')}}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{ asset('images/amarican_express.png')}}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
  <!-- Latest jQuery -->
  <!-- <script src="{{ asset('js/js-popper.min.js')}}"></script>Latest compiled and minified Bootstrap -->
  <script src="{{ asset('js/js-bootstrap.min.js')}}"></script><!-- owl-carousel min js  -->
  <script src="{{ asset('js/js-owl.carousel.min.js')}}"></script><!--magnific-popup min js--> 
  <!-- <script src="{{ asset('js/js-magnific-popup.min.js')}}"></script>waypoints min js  -->
  <script src="{{ asset('js/js-waypoints.min.js')}}"></script><!-- parallax js  -->
  <script src="{{ asset('js/js-parallax.js')}}"></script><!-- countdown js  -->
  <script src="{{ asset('js/js-jquery.countdown.min.js')}}"></script><!-- fit video  -->
  <script src="{{ asset('js/js-Hoverparallax.min.js')}}"></script><!-- jquery.countTo js  -->
  <script src="{{ asset('js/js-jquery.countTo.js')}}"></script><!-- imagesloaded js -->
  <!-- <script src="{{ asset('js/js-imagesloaded.pkgd.min.js')}}"></script>isotope min js -->
  <script src="{{ asset('js/js-isotope.min.js')}}"></script><!-- jquery.appear js  -->
  <script src="{{ asset('js/js-jquery.appear.js')}}"></script><!-- jquery.parallax-scroll js -->
  <script src="{{ asset('js/js-jquery.parallax-scroll.js')}}"></script><!-- jquery.dd.min js -->
  <script src="{{ asset('js/js-jquery.dd.min.js')}}"></script><!-- slick js -->
  <script src="{{ asset('js/js-slick.min.js')}}"></script><!-- elevatezoom js -->
  <script src="{{ asset('js/js-jquery.elevatezoom.js')}}"></script><!-- scripts js -->
  <script src="{{ asset('js/js-scripts.js')}}"></script>
  <script src="{{ asset('js/alert.js')}}" type="text/javascript"></script>
</body>

</html>
@yield('scripts')
<script>
    jQuery(document).ready(function(){
        /* Remove from cart functionality */
        jQuery('.item_remove').click(function(e) {
            var rowId = $( this ).children('.rowId').val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/cart/remove-product') }}",
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    rowId : rowId
                },
                success: function(result){
                    alert("Item successfully removed from the cart.");
                    location.reload(true);
                }
            });
        });
    });
</script>