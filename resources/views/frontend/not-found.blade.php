@extends('layouts.front')
@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center order_complete">
                        <h1 class="pt-3 pb-3 mb-4 heading_s3 text-center notfound-title">404</h1>
                        <!-- <h1 class="noresult-img">!</h1> -->
                        <div class="heading_s1">
                            <h3 class="mb-3">Page Not Found!</h3>
                        </div>
                        <p>
                            Sorry for the inovence we are redirecting you to home page in <span id="timer" style="color: #F94E57;">10</span> seconds. 
                        </p>
                        <div class="col-md-12 text-center mt-3 mb-3">
                            <a href="{{ url('/') }}" class="btn btn-sm btn-fill-out mb-3 btn-same-w">Go to Home</a>
                            <a href="{{ url('/product/')}}" class="btn btn-sm btn-fill-out mb-3 btn-same-w align-top">Explore Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <script type="text/javascript">
        var count = 10;
        var redirect = "{{ url('/') }}";
        function countDown(){
            var timer = document.getElementById("timer");
            if(count > 0){
                count--;
                timer.innerHTML = count;
                setTimeout("countDown()", 1000);
            }else{
                window.location.href = redirect;
            }
        }
      </script> -->
      <!-- <script type="text/javascript">countDown();</script> -->
@endsection