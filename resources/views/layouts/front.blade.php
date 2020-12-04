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
    <link rel="stylesheet" href="{{ asset('css/css-slick.css')}}"> 
    <link rel="stylesheet" href="{{ asset('css/css-slick-theme.css')}}"><!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-responsive.css')}}">
</head>

<body>
<header class="head-bar">
        <div class="main-header clearfix">
            <div class="head-info d-inline-block">
                <a href="{{ url('/') }}" class="d-block  p-0 pr-xl-2 head-logo">
                    Custom Closet
                </a><div class=""></div>
            </div>
            <div class="head-navbar d-inline-block">
                <nav class="head-nav">
                    <ul class="head-nav-ul">
                        <li class="head-nav-li">
                            <a href="{{ url('home/') }}" class="head-nav-link">Home</a>
                        </li>
                        <li class="head-nav-li">
                            <a href="{{ url('product/') }}" class="head-nav-link">Products</a>
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
                            <a href="{{ url('contact-us/') }}" class="head-nav-link">contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="head-shopbar d-inline-block float-right">
                
                <span class="head-shop-icon">
                    @guest
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" title="Login"><img src="{{URL::asset('/images/icon/usericon.png')}}" alt=""></a>
                    @endguest
                    @auth
                    <a href="{{url('/account')}}" title="Account"><img src="{{URL::asset('/images/icon/usericon.png')}}" alt=""></a>
                    @endauth
                </span>

                <span class="head-shop-icon">
                    <a href="{{ route('cart') }}" title="Shopping Cart"><img src="{{URL::asset('/images/icon/carticon.png')}}" alt=""></a>
                    <span class="cart-count cart_count"> {{$cartCount}} </span>
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
            <h4 class="modal-title" id="exampleModalLabel">Custom Closet</h4>
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
                            <label for="Password">Password <span class="mandatory">*</span><a href="{{ route('password.request') }}" class="link">Forgot password?</a></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="******" autocomplete="new-password">
                         </div>
                         <div class="password_error"> </div>
                         <div class="form-group form-button"><button type="submit" id="login" class="btn btn-auth">Login</button></div>
                         <div class="divider-line"><span class="">OR</span></div>
                         <div class="social-auth">
                            <a href="{{ url('/login/google') }}" class="btn social-btn google-btn">
                                <span class="icon-block">
                                    <img src="{{URL::asset('/logo/google-logo.png')}}" width="40px" class="ico-img">
                                </span>
                                Login With Google
                            </a>
                            <a href="{{ url('/login/facebook') }}" class="btn social-btn facebook-btn">
                                <span class="icon-block">
                                    <img src="{{URL::asset('/logo/facebook-logo.png')}}" width="40px" class="ico-img">
                                </span>
                                Login With Facebook
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
                               <label class="text-success text-success font-weight-bold mobile-eg-text">e.g. 7385025569 (10 digit mobile number).</label>
                            </div>
                            <div class="form-flexed-row">
                               <div class="form-group">
                                  <label for="Password">Password <span class="mandatory">*</span></label>
                                  <input type="password" class="form-control" id="Password" name="password" placeholder="Password" autocomplete="new-password" value="">
                                  <div class="password_error"> </div>
                               </div>
                               <div class="form-group">
                                  <label for="re-password">Confirm Password <span class="mandatory">*</span></label>
                                  <input type="password" class="form-control" id="re-password" name="password_confirmation" placeholder="Confirm Password" autocomplete="conf-password" value="">
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
                                <li><a href="{{ url('home/') }}">Home</a></li>
                                <li><a href="{{ url('about-us/') }}">About us</a></li>
                                <li><a href="{{ url('product/') }}">Products</a></li>
                                <li><a href="{{ url('contact-us/') }}">Contact Us</a></li>
                                <li><a href="{{ url('blog/') }}">blog</a></li>
                                <li><a href="{{ url('faq/') }}">faq</a></li>
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
                        <span class="footer-logo">Custom Closet</span>
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
   <!--  slick js -->
  <!-- <script src="{{ asset('js/js-jquery.elevatezoom.js')}}"></script>scripts js -->
  <!-- <script src="{{ asset('js/js-scripts.js')}}"></script> -->
  <!-- <script src="{{ asset('js/alert.js')}}" type="text/javascript"></script> -->
  <script src="{{ asset('js/bootstrap-notify.min.js')}}"></script>
  
</body>

</html>
@yield('scripts')

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ asset('js/js-slick.min.js')}}"></script>
<script>
    $(".product-detail-slider").slick({
        autoplay: false,
        dots: true,
        infinite: false,
        customPaging : function(slider, i) {
            var thumb = $(slider.$slides[i]).data('thumb');
            return '<a><img src="'+thumb+'"></a>';
        }
    });
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
                        window.location.href = "{{ route('account')}}";
                    } else {
                        $(".email_error").html('<lable class="error" role="alert"> '+result.message+'</lable>');
                        return false;
                    }
                }
            });   
        }
    });

    jQuery.validator.addMethod("phonenu", function (value, element) {
        if ( /^\d{3}-?\d{3}-?\d{4}$/g.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Please enter a valid mobile number");
    
    /* Sign Up validation functionality */
    jQuery("#signupform").validate({
        rules: {
            name: {
                required: true
            },
            lastName: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                phonenu: true,
                required: true
            },
            password: {
                required: true,
            },
            password_confirmation : {
                minlength : 5,
                equalTo : "#Password"
            }
        },
        messages: {
            name: {
                required: "Name field is required.",
            },
            lastName: {
                required: "Last Name field is required.",
            },
            password: {
                required: "Password field is required.",
            },
            password_confirmation: {
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
                        window.location.href = "{{ route('account')}}";
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
                        });
                        
                        return false;
                    }
                }
            });
        }
    });


    jQuery(document).ready(function() {
        $("#Password").keyup(function(){
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if ($(this).val().length < 6) {
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

        /** Home page animation */
        var previousScroll = 0;    
        var counter = 1;
        var counterPlus = 0;
        $(window).scroll(function () {
        var currentScroll = $(this).scrollTop();
        if (currentScroll > previousScroll){
            
                if ( $(window).scrollTop() >= 500) {
                    counterPlus =  counter++;
                    $('.Yq0BZd').css("clip-path", 'inset(0px ' +counterPlus+ '% 0px 0px)')
                    //$('.mover').css("transform", 'translate(' + -counterPlus+ '%, -50%)')
                }
        }
            else {
                if ( $(window).scrollTop() <= 700) {
                    counterPlus =  counter--;
                    $('.Yq0BZd').css("clip-path", 'inset(0px ' +counterPlus+ '% 0px 0px)')
                    //$('.mover').css("transform", 'translate(' + +counterPlus+ '%, -50%)')
                }
                
            }
        previousScroll = currentScroll;
        });
        
    });

 
</script>
