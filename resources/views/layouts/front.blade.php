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
    <title>Custom Closet</title><!-- Favicon Icon -->
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
<header class="head-bar">
        <div class="main-header clearfix">
            <div class="head-info d-inline-block">
                <a href="{{ url('/') }}" class="d-block  p-0 pr-xl-2 head-logo">
                    Custom Closet
                </a>
            </div>
            <div class="head-navbar d-inline-block">
                <nav class="head-nav">
                    <ul class="head-nav-ul">
                        <li class="head-nav-li">
                            <a href="{{ url('home/') }}" class="head-nav-link">Home</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('about-us/') }}" class="head-nav-link">About Us</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('blog/') }}" class="head-nav-link">Blog</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('faq/') }}" class="head-nav-link">Faq</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="#" class="head-nav-link">contact us</a>
                        </li>
                        <li class="head-nav-li d-lg-none">
                            <a href="#" class="head-nav-link">country</a>
                        </li>
                        <li class="head-nav-li d-lg-none">
                            <a href="tel:" class="head-nav-link">T +49 (0)30 60 988 588</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="head-shopbar d-inline-block float-right">
                <span class="head-shop-icon">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login"><img src="{{URL::asset('/images/icon/usericon.png')}}" alt=""></a>
                </span>
                <span class="head-shop-icon">
                    <a href="" title="Favorite"><img src="{{URL::asset('/images/icon/hearticon.png')}}" alt=""></a>
                </span>
                <span class="head-shop-icon">
                    <a href="" title="Shopping Cart"><img src="{{URL::asset('/images/icon/carticon.png')}}" alt=""></a>
                </span>
                <span class="head-shop-icon main-toggler d-lg-none">
                    <span class="burger">
                        <span></span>
                    </span>
                </span>
            </div>
        </div>
        <div class="head-alert-bar">
            <span> Informationen zur aktuellen Situation bei Custom Closet. </span>
            <span class="actioninfo-icon"><strong>i</strong></span>
            <span><a href="">Mehr erfahren</a></span>
        </div>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="auth-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Custome Closet</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">            
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sign In</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sign Up</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="form-tabs-content">
                   <div class="form-block">
                      <form id="loginform" method="POST">
                         <div class="form-group">
                            <label for="Email">Email <span class="mandatory">*</span></label>
                            <input type="text" class="form-control" id="Email" name="email" placeholder="john@example.com" autocomplete="new-password" value="">
                         </div>
                         <div class="form-group">
                            <label for="Password">Password <span class="mandatory">*</span><span class="link">Forgot password?</span></label>
                            <input type="password" class="form-control" id="Password" name="password" placeholder="******" autocomplete="new-password">
                         </div>
                         <div class="form-group form-button"><button id="submit" class="btn btn-auth">Login</button></div>
                         <div class="divider-line"><span class="">OR</span></div>
                         <div class="social-auth">
                            <button class="btn social-btn google-btn">
                                <span class="icon-block">
                                    <img src="https://risepuerto.c247.website/wp-content/uploads/2020/10/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png" width="40px" class="ico-img">
                                </span>
                                Login With Google
                            </button>
                            <button class="btn social-btn facebook-btn">
                                <span class="icon-block">
                                    <img src="https://risepuerto.c247.website/wp-content/uploads/2020/10/facebook-logo-icon-file-facebook-icon-svg-wikimedia-commons-4-1.png" width="40px" class="ico-img">
                                </span>
                                Login With Facebook
                            </button>
                         </div>
                      </form>
                   </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="form-tabs-content">
                   <div class="form-items">
                        <form id="signupform" method="POST">
                            <div class="form-flexed-row">
                               <div class="form-group">
                                  <label for="Name">First Name <span class="mandatory">*</span></label><input type="text" class="form-control" id="Name" name="firstName" placeholder="John" autocomplete="new-firstName" value="">
                               </div>
                               <div class="form-group">
                                  <label for="lastName">Last Name <span class="mandatory">*</span></label><input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" autocomplete="new-lastName" value="">
                               </div>
                            </div>
                            <div class="form-group">
                               <label for="Email">Email<span class="mandatory">*</span></label><input type="text" class="form-control" id="Email" name="email" placeholder="john@example.com" autocomplete="new-email" value="">
                            </div>
                            <div class="form-group">
                               <label for="number">Mobile Number <span class="mandatory">*</span></label><input type="text" class="form-control" id="number" name="contactNumber" placeholder="xxxxxxxxxx" maxlength="14" autocomplete="new-number" value="">
                            </div>
                            <div class="form-flexed-row">
                               <div class="form-group">
                                  <label for="Password">Password <span class="mandatory">*</span></label><input type="password" class="form-control" id="Password" name="password" placeholder="Password" autocomplete="new-password" value="">
                               </div>
                               <div class="form-group">
                                  <label for="re-password">Confirm Password <span class="mandatory">*</span></label><input type="password" class="form-control" id="re-password" name="confirmPassword" placeholder="Confirm Password" autocomplete="conf-password" value="">
                               </div>
                            </div>
                            <div class="form-group form-button"><button id="submit" type="submit" class="btn btn-auth">Create Account</button></div>
                        </form>                    
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END HEADER -->

@yield('content')

<!--=================================
footer-->
@yield('fcontent')

    <footer class="footer-wrapper">
        <div class="footer-inner m-auto content-section">
        <div class="pre-footer">
                    <div class="row m-0 text-center text-sm-left">
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                            <h5 class="text-uppercase mb-3">About Us</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim, reprehenderit quia omnis fugiat qui ea pariatur voluptatem, incidunt inventore cumque quam facere vel veniam unde magni fugit culpa neque.
                                <br><a href="">More about us &gt;&gt;</a>
                            </p>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                            <h5 class="text-uppercase mb-3">Quick Links</h5>
                            <ul class="footer-nav-ul">
                                <li><a href="">Home</a></li>
                                <li><a href="">About us</a></li>
                                <li><a href="">resources</a></li>
                                <li><a href="">portfolio</a></li>
                                <li><a href="">blog</a></li>
                                <li><a href="">faq</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                            <h5 class="text-uppercase mb-3">Showrooms</h5>
                            <ul class="footer-nav-ul">
                                <li><a href="">Berlin</a></li>
                                <li><a href="">Cologne</a></li>
                                <li><a href="">Frankfurt</a></li>
                                <li><a href="">Munich</a></li>
                                <li><a href="">Hamburg</a></li>
                                <li><a href="">Stuttgart</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <h5 class="text-uppercase mb-3">Help</h5>
                            <ul class="footer-nav-ul">
                                <li>
                                    <a href="" class="font-weight-bold">+49 (0)30 60 988 588</a>
                                </li>
                                <li>
                                    <a href="" class="text-underline">service@customcloset.com</a>
                                </li>
                                <li><a href="">contact us</a></li>
                                <li><a href="">Terms &amp; Conditions</a></li>
                                <li><a href="">privacy policy</a></li>
                            </ul>
                            <div class="d-flex w-100 align-items-center mt-4">
                                <span class="footer-socialicon">
                                    <a href="" title="Connect on Facebook"><img src="{{URL::asset('/images/icon/fb-white.png')}}" alt=""></a>
                                </span>
                                <span class="footer-socialicon">
                                    <a href="" title="Follow us on Instagram"><img src="{{URL::asset('/images/icon/insta-white.png')}}" alt=""></a>
                                </span>
                                <span class="footer-socialicon">
                                    <a href="" title="Connect on Pinterest"><img src="{{URL::asset('/images/icon/pintrest-white.png')}}" alt=""></a>
                                </span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="post-footer text-center text-sm-left">
                <div class="row m-0">
                    <div class="col-sm-5 p-lg-0">
                        <!-- <img src="img/sitzfeldt-white.png" alt="" class="foot-logo"> -->
                        <span class="footer-logo">Custom Closets</span>
                    </div>
                    <div class="col-sm-7 p-lg-0">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end h-100">
                            <a href="https://en.sitzfeldt.com/privacy-policy">Privacy Policy</a> &nbsp;|&nbsp; <a href="https://en.sitzfeldt.com/node/47955">Returns</a> &nbsp;|&nbsp; <a href="https://en.sitzfeldt.com/node/47956">Terms of Service</a>
                        </div>
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
  <!--<script src="{{ asset('js/js-waypoints.min.js')}}"></script>--> <!-- parallax js  -->
  <!--<script src="{{ asset('js/js-parallax.js')}}"></script>--> <!-- countdown js  -->
  <!--<script src="{{ asset('js/js-jquery.countdown.min.js')}}"></script>--> <!-- fit video  -->
  <!--<script src="{{ asset('js/js-Hoverparallax.min.js')}}"></script>--><!-- jquery.countTo js  -->
  <!--<script src="{{ asset('js/js-jquery.countTo.js')}}"></script>--> <!-- imagesloaded js -->
  <!-- <script src="{{ asset('js/js-imagesloaded.pkgd.min.js')}}"></script>isotope min js -->
  <!--<script src="{{ asset('js/js-isotope.min.js')}}"></script>--> <!-- jquery.appear js  -->
  <!--<script src="{{ asset('js/js-jquery.appear.js')}}"></script>--> <!-- jquery.parallax-scroll js -->
  <!--<script src="{{ asset('js/js-jquery.parallax-scroll.js')}}"></script>--> <!-- jquery.dd.min js -->
  <!--<script src="{{ asset('js/js-jquery.dd.min.js')}}"></script>--> <!-- slick js -->
  <!-- <script src="{{ asset('js/js-slick.min.js')}}"></script> elevatezoom js -->
  <!-- <script src="{{ asset('js/js-jquery.elevatezoom.js')}}"></script>scripts js -->
  <script src="{{ asset('js/js-scripts.js')}}"></script>
  <!-- <script src="{{ asset('js/alert.js')}}" type="text/javascript"></script> -->
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