<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title>Custom Doors and Mirrors</title>
    <link rel="icon" href="{{url('/')}}/assets/favicon/favicon.jpg">
    
    <!-- Icons-->
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    @yield('css')

    <!-- Global site tag (gtag.js) - Google Analytics
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script> -->

    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
    <style>
    .mandatory {
      color: red;
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
      @media(max-width: 1199px){
        .table-responsive{
          position: relative;
        }
        .table-swipe-indicator{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("{{ asset('images/swipe.gif') }}");
            background-color: rgba(1, 1, 1, .2);
            background-repeat: no-repeat;
            background-position: 50% 5%;
            -moz-background-size:142px 60px;
            -o-background-size:142px 60px;
            -webkit-background-size: 142px 60px;
            background-size: 142px 60px;
            z-index: 999;
            width:100%;
            height:100%;
            overflow: hidden;
        }
      }
    </style>
  </head>
  <body class="c-app">
    <div id="sitePreloader"></div>
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <span class="c-sidebar-close-btn">&times;</span>
      @include('dashboard.shared.nav-builder')

      @include('dashboard.shared.header')
      
      @yield('breadcrumb')
      
      </header>
      <div class="c-body">

        <main class="c-main">

          @yield('content') 

        </main>
        
        @include('dashboard.shared.footer')
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/tooltips.js') }}"></script>

    @yield('javascript')
    <script>
    $(document).ready(function(){
        $("#successMessage").delay(2000).slideUp(300);
        $("#errorMessage").delay(2000).slideUp(300);
    });
    </script>
    <script>
      $(".c-sidebar-close-btn").on("click", function () {
        $(this).parent().removeClass("c-sidebar-show");
        $(".c-sidebar-backdrop").removeClass("c-show");
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
      $(window).on('load', function () {
        $('#sitePreloader').fadeOut();
      }); 
    </script>
  </body>
</html>
