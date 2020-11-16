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
     <!-- <script src="{{ asset('select-pure/dist/bundle.min.js')}}"></script> -->

    <!-- <link rel="stylesheet" href="{{ asset('css/css-all.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/css-ionicons.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('css/css-themify-icons.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-linearicons.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-flaticon.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-simple-line-icons.css')}}"> -->
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
        <div class="light_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="http://starestate.in/">
                        <img class="logo_light" src="{{ asset('images/images-logo_light.png')}}" alt="logo"  height="35"><img class="logo_dark"
                            src="{{ asset('images/images-logo_dark.png')}}" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="nav-link dropdown-toggle active" href="http://starestate.in/">Home</a>
                            </li>
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Collection</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="http://starestate.in/Category/new-launch">New Launch</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item" href="http://starestate.in/Category/ready-to-move">Ready To Move</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="http://starestate.in/Category/under-conctrution">Under Conctrution</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="http://starestate.in/category/luxuryproperties">Luxury Properties</a></li>
                                       
                                    </ul>
                                </div>
                            </li>
                          
                            <li><a class="nav-link nav_item" href="http://starestate.in/contact-us">Contact Us</a></li>
                            <li><a class="nav-link nav_item" href="http://starestate.in/about-us">About Us</a>
                                        </li>
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header><!-- END HEADER -->

@yield('content')

<!--=================================
footer-->
@yield('fcontent')
 <!-- START FOOTER -->
<footer class="footer_dark">
	<div class="footer_top pb_20">
        <div class="container">
        	<div class="row">
            	<div class="col-12">
                	<div class="pb-4 mb-4 mb-md-5 border_bottom_tran">
        				<div class="row align-items-center justify-content-between">	
                            <div class="col-lg-5 col-md-6">
                                <div class="heading_s1">
                                    <h3>Subscribe Our Newsletter</h3>
                                </div>
                                <p>Contrary to popular belief of lorem Ipsm Latin amet ltin from industry. Phasellus blandit massa enim varius nunc. </p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="newsletter_form">
                                    <form>
                                        <input type="text" required="" class="form-control" placeholder="Enter Email Address">
                                        <button type="submit" class="btn-send2" name="submit" value="Submit"><i class="icon-envelope-letter"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
            <div class="row border_bottom_tran pb-4 mb-4 mb-md-4">
                <div class="col-lg-4 col-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="assets/images/logo_light.png" alt="logo"/></a>
                        </div>
                        <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons rounded_social">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
        		</div>
                
				<div class="col-lg-8 col-12">
                	<div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="widget">
                                <h6 class="widget_title">Quick Links</h6>
                                <ul class="widget_links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="widget">
                                <h6 class="widget_title">Information</h6>
                                <ul class="widget_links">
                                    <li><a href="#">Term Of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Return policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="widget">
                                <h6 class="widget_title">My Account</h6>
                                <ul class="widget_links">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <li><a href="#"><img src="assets/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="assets/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="assets/images/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="assets/images/paypal.png" alt="paypal"></a></li>
                        <li><a href="#"><img src="assets/images/amarican_express.png" alt="amarican_express"></a></li>
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
</body>

</html>
