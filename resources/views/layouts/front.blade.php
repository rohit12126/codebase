<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SITE TITLE -->
    <title>Custom Closet</title><!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/favicon/favicon.jpg')}}"><!-- Animation CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css-animate.css')}}">Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-bootstrap.min.css')}}">
     <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet"> -->
    <script src="{{asset('js/SimpleComparison_files/iframeResizer.contentWindow.min.js')}}" defer=""></script>
    <script src="{{ asset('js/js-jquery-1.12.4.min.js')}}"></script>
    <!-- <script src="{{ asset('select-pure/dist/bundle.min.js')}}"></script> -->
    <style>
    /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
        #sitePreloader{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:url("{{URL::asset('/images/loader.gif')}}") no-repeat #FFFFFF 50%;
            -moz-background-size:84px 84px;
            -o-background-size:84px 84px;
            -webkit-background-size: 84px 84px;
            background-size: 84px 84px;
            z-index: 9999;
            width:100%;
            height:100%;
            overflow: hidden;
        }
        #more {display: none;}
        .short{
            font-size: 12px;
            color: #4e4e4e;
            float:left;
        }
    </style>
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
    <link rel="stylesheet" href="{{ asset('css/css-slick.css')}}"> 
    <link rel="stylesheet" href="{{ asset('css/css-slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-responsive.css')}}">    
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/media.min.css')}}">
    
</head>

<body >
<div id="sitePreloader"></div>
<header class="head-bar">
        <div class="main-wrapper clearfix">
            <div class="head-info d-inline-block">
                <a href="{{ url('/') }}" class="d-block  p-0 pr-xl-2 head-logo">
                    <img src="{{URL::asset('/images/cutom-inc-logo.png')}}" alt="" class="head-logo">
                </a>
            </div>
            <div class="head-shopbar d-inline-block float-right">
                <span class="head-shop-icon head-user-name">
                    @guest
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login">
                            <img src="{{URL::asset('/images/icon/user.png')}}" alt="">
                            <label class="mb-0">Account</label>
                        </a>
                    @endguest
                    @auth
                        <a href="{{url('/account')}}" title="{{ $userData->name ?? ''}}">
                            <img src="{{URL::asset('/images/icon/user.png')}}" alt="">
                            <label class="mb-0">Hi {{ ucwords($userData->name ?? '')}}</label>
                        </a>
                    @endauth
                </span>
                <span class="head-shop-icon head-carticon">
                    <a href="{{ route('cart') }}" title="Shopping Cart">
                        <img src="{{URL::asset('/images/icon/carticon.png')}}" alt="">
                        <label>Cart</label>
                    <span class="cart-count cart_count"> {{$cartCount}} </span>
                    </a>
                </span>
                <span class="head-shop-icon main-toggler d-lg-none">
                    <span class="header-burger">
                        <span></span>
                    </span>
                </span>
            </div>
            <div class="head-navbar d-inline-block float-right">
                <nav class="head-nav">
                    <ul class="head-nav-ul mt-lg-1 mr-lg-3">
                        <li class="head-nav-li">
                            <a href="{{ url('installation/') }}" class="head-nav-link {{ request()->is('installation') ? 'active' : ''}}">Installation</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('product/') }}" class="head-nav-link {{ request()->is('product*') ? 'active' : ''}} ">Products</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('projects/') }}" class="head-nav-link {{ request()->is('projects*') ? 'active' : ''}} ">Projects</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('about-us/') }}" class="head-nav-link {{ request()->is('about-us') ? 'active' : ''}}">About Us</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('blog/') }}" class="head-nav-link {{ request()->is('blog*') ? 'active' : ''}}">Blog</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('resource/') }}" class="head-nav-link {{ request()->is('resource') ? 'active' : ''}}">Resources</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('contact-us/') }}" class="head-nav-link {{ request()->is('contact-us') ? 'active' : ''}}">contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="head-alert-bar">
            60 YEARS OF EXCELLENCE &nbsp;|&nbsp; SEE OUR NEWEST ADDITIONS &nbsp;|&nbsp; UNLIMITED DESIGN POSSIBILITIES 
        </div>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="auth-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-bottom-0 p-0 position-realtive">
            <!-- <h4 class="modal-title" id="exampleModalLabel">Custom Closet</h4> -->
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
                      <form id="loginform" >
                         <div class="form-group">
                            <label for="Email">Email <span class="mandatory">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('E-Mail Address') }}" autocomplete="new-password" value="{{ old('email') }}">
                            <div class="email_error"> </div>
                         </div>
                         <div class="form-group">
                            <label for="Password">Password <span class="mandatory">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="******" autocomplete="new-password">
                         </div>
                         <div class="password_error"> </div>
                         <a href="{{ route('password.request') }}" class="link">Forgot Password?</a>
                         <div class="form-group form-button"><button type="submit" id="login" class="btn btn-auth">Login</button></div>
                         <div class="divider-line"><span class="">OR</span></div>
                         <div class="social-auth">
                            <a href="{{ url('/login/google') }}" class="btn social-btn google-btn">
                                <span class="icon-block">
                                    <img src="{{URL::asset('/logo/google-logo.png')}}" width="40px" class="ico-img">
                                </span>
                                Login with Google
                            </a>
                            <a href="{{ url('/login/facebook') }}" class="btn social-btn facebook-btn">
                                <span class="icon-block">
                                    <img src="{{URL::asset('/logo/facebook-logo.png')}}" width="40px" class="ico-img">
                                </span>
                                Login with Facebook
                            </a>
                         </div>
                      </form>
                   </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="form-tabs-content">
                   <div class="form-items">
                        <form id="signupform" >
                            <div class="form-flexed-row">
                               <div class="form-group">
                                  <label for="Name">First Name <span class="mandatory">*</span></label>
                                  <input type="text" class="form-control" id="Name" name="name" placeholder="John" autocomplete="new-firstName" value="">
                               </div>
                               <div class="form-group">
                                  <label for="lastName">Last Name <span class="mandatory">*</span></label>
                                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" autocomplete="new-lastName" value="">
                               </div>
                            </div>
                            <div class="form-group">
                               <label for="Email">Email<span class="mandatory">*</span></label>
                               <input type="email" class="form-control" id="Email" name="email" placeholder="john@example.com" autocomplete="new-email" value="" >
                               <div class="Email_error"> </div>
                            </div>
                            <div class="form-group">
                               <label for="number">Mobile Number <span class="mandatory">*</span></label>
                               <input type="text"  class="form-control" id="mobile" name="mobile" placeholder="e.g. xxx-xxx-xxxx" maxlength="14" autocomplete="new-number" value="" >
                               <div class="mobile_error"> </div>
                            </div>
                            <div class="form-flexed-row">
                               <div class="form-group">
                                  <label for="Password">Password <span class="mandatory">*</span></label>
                                  <input type="password" class="form-control" id="Password" name="spassword" placeholder="Password" autocomplete="new-password" value="">
                                  <div class="password_error"> </div>
                               </div>
                               <div class="form-group">
                                  <label for="re-password">Confirm Password <span class="mandatory">*</span></label>
                                  <input type="password" class="form-control" id="re-password" name="spassword_confirmation" placeholder="Confirm Password" autocomplete="conf-password" value="">
                                  <div class="password_confirmation_error"> </div>
                               </div>
                            </div>
                            <div class="password_not_match_error"> </div>
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
                <div class="row text-center text-sm-left justify-content-between">
                    <div class="col-md-4 mb-5 mb-lg-0 footer-col">
                        <h5 class="text-uppercase mb-3"><span>About Us</span></h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim, reprehenderit quia omnis fugiat qui ea pariatur voluptatem, incidunt inventore cumque quam facere vel veniam unde magni fugit.
                            <br><a href="{{ url('about-us/') }}" class="text-underline">More about us &gt;&gt;</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 mb-5 mb-lg-0 footer-col text-center text-sm-left">
                        <h5 class="text-uppercase mb-3"><span>Quick Links</span></h5>
                        <ul class="footer-nav-ul">
                            <li><a href="{{ url('home/') }}">Home</a></li>
                            <li><a href="{{ url('about-us/') }}">About us</a></li>
                            <li><a href="{{ url('product/') }}">Products</a></li>
                            <li><a href="{{ url('projects/') }}">Projects</a></li>
                            <li><a href="{{ url('blog/') }}">blog</a></li>
                            <li><a href="{{ url('resource/') }}">Resource</a></li>
                            <li><a href="{{ url('contact-us/') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 footer-col">
                        <h5 class="text-uppercase mb-3"><span>Help</span></h5>
                        @include('frontend.partials.footer')
                    </div>
                </div>
            </div>
            <div class="post-footer text-center text-sm-left">
                <div class="row m-0">
                    <div class="col-sm-5 p-lg-0">
                        <!-- <img src="img/sitzfeldt-white.png" alt="" class="foot-logo"> -->
                        <a href={{ url('/')}}><span class="footer-logo">Custom Closet</span></a>
                    </div>
                    <div class="col-sm-7 p-lg-0">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end h-100 pt-2 pt-sm-0">
                            <a href="{{ url('privacy-policy/') }}">Privacy Policy</a> &nbsp;|&nbsp; <a href="{{ url('returns/') }}">Returns</a> &nbsp;|&nbsp; <a href="{{ url('terms-and-conditions/') }}">Terms of Service</a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p class="pt-3 mb-0">
                        &#169; Copyright Custom Closets. All rights Reserved.
                    </p>
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
   <!--  slick js -->
  <!-- <script src="{{ asset('js/js-jquery.elevatezoom.js')}}"></script>scripts js -->
  <!-- <script src="{{ asset('js/js-scripts.js')}}"></script> -->
  <!-- <script src="{{ asset('js/alert.js')}}" type="text/javascript"></script> -->
  <script src="{{ asset('js/bootstrap-notify.min.js')}}"></script>
  
</body>

</html>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('js/js-slick.min.js')}}"></script>
<script src="{{ asset('js/sweetalert2.min.js')}}"></script>
<script src="{{ asset('js/jquery.hotspot.js')}}"></script>
<script src="{{ asset('js/fancybox.min.js')}}"></script>
@include('sweetalert::alert')
<script>
    $(window).bind("load", function() { 
        if ($('#hotspotImg').length > 0) {
            $('#hotspotImg').hotSpot({
            bindselector: 'click'
            });
        }
    });

    // $(function(){
    //     $('.cocoen').cocoen();
    // });

    // if ($('#secondhotspotImg').length > 0) {
	// 	$('#secondhotspotImg').hotSpot({
    //         bindselector: 'click'
    //     });
	// }
</script>
@yield('scripts')
<script>
    $(window).load(function(){
    $('#sitePreloader').fadeOut();
    });
    $(".main-toggler").on("click", function () {
        $(".main-toggler").toggleClass("opened");
        $(".head-navbar").toggleClass("nav-open");
        $(".head-nav-li").removeClass("active");
    });
    $(".link-cover").on("click", function () {
        $(this).parent().addClass("active");
    });
    $(".head-dropdown-back").on("click", function () {
        $(".head-nav-li").removeClass("active");
    });    
</script>

<script>

    /* Login validation functionality */
    jQuery("#loginform").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
        submitHandler: function(form) {
            var email = $("#email").val();
            var password = $("#password").val();
            jQuery.ajax({
                url: "{{ url('/login') }}",
                dataType: 'json',
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    email : email,
                    password : password
                },
                success: function(result) {
                    if (result.status == "success") {
                        window.location.href = result.data.redirect;
                    } else {
                        $(".email_error").html('<lable class="error" role="alert"> '+result.message+'</lable>');
                        return false;
                    }
                }
            });   
        }
    });
    jQuery.validator.addMethod("custum_email", function (value, element) {
        if ( /"[a-zA-Z0-9]([^\\"]|\\")*/g.test(value)) {
            return false;
        } else {
            return true;
        };
    }, "Please enter a valid email address");
    jQuery.validator.addMethod("custum_password", function (value, element) {
        if (!(/^\S{3,}$/.test(value))) {
            return false;
        } else {
            return true;
        };
    }, "Password cannot contain whitespace");
    /* Sign Up validation functionality */
    jQuery("#signupform").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 25
            },
            lastName: {
                required: true,
                minlength: 2,
                maxlength: 25
            },
            email: {
                required: true,
                email: true,
                custom_email: true
            },
            mobile: {
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 14
            },
            spassword: {
                required: true,
                custum_password: true,
            },
            password_confirmation : {
                minlength : 5,
                custum_password: true,
                equalTo : "#Password"
            }
        },
        messages: {
            name: {
                required: "First Name field is required.",
                minlength: "First Name must be atleast 2 digit",
                maxlength: "First Name must not exeed 20 digits"
            },
            lastName: {
                required: "Last Name field is required.",
                minlength: "Last Name must be atleast 2 digit",
                maxlength: "Last Name must not exeed 20 digits"
            },
            spassword: {
                required: "Password field is required.",
            },
            spassword_confirmation: {
                equalTo : "Password and confirm password did not match."
            },
            email: "Please enter a valid email address",
            mobile: "Please enter a valid mobile number"
        },
        submitHandler: function(form) {
            $(".Email_error").html('');
            $(".password_error").html('');
            $(".password_confirmation_error").html('');
            $(".password_not_match_error").html('');

            var name = $("#Name").val();
            var lastName = $("#lastName").val();
            var Email = $("#Email").val();
            var mobile = $("#mobile").val();
            var Password = $("#Password").val();
            var Repassword = $("#re-password").val();

            var password_error = "";
            var password_confirmation_error = "";

            name = name +' '+ lastName;

            jQuery.ajax({
                url: "{{ url('/register') }}",
                dataType: 'json',
                method: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    name : name,
                    email : Email,
                    mobile : mobile,
                    password : Password,
                    password_confirmation : Repassword
                },
                success: function(result) {
                     
                    if (result.status == "success") {
                        window.location.href = result.redirect;
                    } else {
                        
                        $.each( result.errors, function( key, value ) {
                            if (key == 'password') {
                                $(".password_error").html('<lable class="text-danger" role="alert"> '+value+'</lable>');
                            }

                            if (key == 'password_confirmation') {
                                $(".password_confirmation_error").html('<lable class="text-danger" role="alert"> '+value+'</lable>');
                            }

                            if (key == 'email') {
                                $(".Email_error").html('<lable class="text-danger" role="alert"> '+value+'</lable>');
                            }
                            
                            if (key == 'mobile') {
                                $(".mobile_error").html('<lable class="text-danger" role="alert"> '+value+'</lable>');
                            }
                        });
                        
                        return false;
                    }
                }
            });
        }
    });

    if(!!window.performance && window.performance.navigation.type === 2)
    {
        window.location.reload();
    }
    jQuery(document).ready(function() {
        if(!!window.performance && window.performance.navigation.type === 2)
        {

            window.location.reload();
        }
            $("#Password").keyup(function(){
                var number = /([0-9])/;
                var alphabets = /([a-zA-Z])/;
                var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
                if ($(this).val().length < 5 ) {
                    $(this).css("border", "5px solid #e82d2d");
                    $(".password_error").html('<span class="weak-password">Weak (should be atleast 5 characters.)</span>');
                } else {
                    if ($(this).val().match(number) && $(this).val().match(alphabets) && $(this).val().match(special_characters)) {
                        $(this).css("border", "5px solid #5dc17e");
                        $(".password_error").html('<span class="strong-password">Strong password</span>');
                    } else {
                        $(this).css("border", "5px solid #f08b10");
                        $(".password_error").html('<span class="medium-password">Medium (should include alphabets, numbers and special characters.)</span>');
                    }
                }
        });

        function touchScroller(className,wrapper) {
            let active = false;
            document.querySelector(className).addEventListener('mousedown',function(){
                active = true;
                document.querySelector(className).classList.add('scrolling');
            });
            document.body.addEventListener('mouseup',function(){
                active = false;
                document.querySelector(className).classList.remove('scrolling');
            });
            document.body.addEventListener('mouseleave',function(){
                active = false;
                document.querySelector(className).classList.remove('scrolling');
            }); 
            document.body.addEventListener('mousemove',function(e){
                if (!active) return;
                let x = e.pageX;
                x -= document.querySelector(wrapper).getBoundingClientRect().left;
                scrollIt(x);
            });
            function scrollIt(x){
                let transform = Math.max(5,(Math.min(x,document.querySelector(wrapper).offsetWidth-20)));
                document.querySelector(wrapper).querySelector('.after').style.width = transform+"px";
                document.querySelector(className).style.left = transform+"px";
            }
            /* if (window.matchMedia("(max-width: 1200px)").matches) {
                scrollIt(screen.width/2);
            } else {
                scrollIt(600);
            } */
            scrollIt(document.querySelector(wrapper).offsetWidth/2);
            document.querySelector(className).addEventListener('touchstart',function(){
                active = true;
                document.querySelector(className).classList.add('scrolling');
            });
            document.body.addEventListener('touchend',function(){
                active = false;
                document.querySelector(className).classList.remove('scrolling');
            });
            document.body.addEventListener('touchcancel',function(){
                active = false;
                document.querySelector(className).classList.remove('scrolling');
            });
            document.body.addEventListener('touchmove',function(e){ 
                if (!active) return;
                let x = e.touches[0].pageX;
                x -= document.querySelector(wrapper).getBoundingClientRect().left;
                scrollIt(x); 
            });
        }
        window.addEventListener('load', (event) => {
            const classArray = [
                {classname : '.scrollerFirst',wrap:'.wrapperFirst'},
                {classname:'.scrollerSecond',wrap:'.wrapperSecond'}
            ]
            var i;
            for (i = 0; i < classArray.length; i++) {
                touchScroller (classArray[i].classname,classArray[i].wrap);
            }
        });
        $(".alert-success").delay(2000).slideUp(300);
    });

</script>
<script>
    $(".scroller__thumb").on("mouseover", function () {
        $(".drag-indicator").css("display","none");
    });
    $(".scroller__thumb").on("mousedown", function () {
        $(".drag-indicator").css("display","none");
    });
    $(".scroller__thumb").on("touchstart", function () {
        $(".drag-indicator").css("display","none");
    });
    $(".table-responsive").on("mouseover", function () {
        $(".table-swipe-indicator").css("display","none");
    });
    $(".table-responsive").on("mousedown", function () {
        $(".table-swipe-indicator").css("display","none");
    });
    $(".table-responsive").on("touchstart", function () {
        $(".table-swipe-indicator").css("display","none");
    });
</script>

<script>
function myFunction(id) {
    var dots = document.querySelector(`#card[data-configId="${id}"] #dots`);
    var moreText = document.querySelector(`#card[data-configId="${id}"] #more`);
    var btnText = document.querySelector(`#card[data-configId="${id}"] #myBtn`);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.textContent = "configured details";
        document.getElementById("c-arrow").className = "linearicons-arrow-down";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.textContent = "hide details";
        document.getElementById("c-arrow").className = "linearicons-arrow-up";
        moreText.style.display = "inline";
    }
}
</script>
