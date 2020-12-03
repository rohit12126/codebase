@extends('dashboard.base')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@section('css')
<style>
.cursor-pointer{
  cursor:pointer;
}
</style>
@endsection
@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        </ol>
    </div>
@endsection
@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white cursor-pointer dashboard-block first-block" title="Active Users" onclick="window.location='{{ route('admin.user') }}'">
                    <div class="card-body pb-0">
                        <div class="d-flex">
                            <div class="icons-block">
                                <i class="cil-user"></i>
                            </div>
                            <div>
                                <div class="text-value-lg">{{ $data['userCount'] }}</div>
                                <div>Total Users</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    </div> -->
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white cursor-pointer dashboard-block second-block" title="Total Orders" onclick="window.location='{{ route('admin.order') }}'">
                    <div class="card-body pb-0">
                      <div class="d-flex">
                        <div class="icons-block">
                            <i class="cil-user"></i>
                        </div>
                        <div>
                            <div class="text-value-lg">{{ $data['orderCount'] }}</div>
                                <div>Total Orders</div>
                            </div>
                       </div>
                    </div>
                    <!-- <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"></div> -->
                </div>
            </div>
            <!-- /.col-->
           
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white cursor-pointer dashboard-block third-block" id="activeProduct">
                    <div class="card-body pb-0">
                        <div class="d-flex">
                            <div class="icons-block">
                                <i class="cil-user"></i>
                            </div>
                            <div>
                                <div class="text-value-lg">{{ $data['productsCount'] }}</div>
                                <div>Total Products</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="c-chart-wrapper mt-3" style="height:70px;"></div> -->
                </div>
            </div>
          
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card text-white cursor-pointer dashboard-block fourth-block" title="Total Active Accessories" onclick="window.location='{{ route('admin.item.list') }}'">
                  <div class="card-body pb-0">
                    <div class="d-flex">
                            <div class="icons-block">
                                <i class="cil-user"></i>
                            </div>
                            <div>
                                <div class="text-value-lg">{{ $data['accessoryCount'] }}</div>
                                <div>Total Accessories</div>
                            </div>
                        </div>
                  </div>
                  <!-- <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"></div> -->
              </div>
          </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white cursor-pointer dashboard-block fifth-block" title="Total Cancelled Orders" onclick="window.location='{{ route('admin.order') }}'">
                    <div class="card-body pb-0">
                    <div class="d-flex">
                        <div class="icons-block">
                                <i class="cil-user"></i>
                        </div>
                        <div>
                            <div class="text-value-lg">{{ $data['cancleOrderCount'] }}</div>
                            <div>Total Cancelled Orders</div>
                        </div>
                    </div>
                    </div>
                    <!-- <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div> -->
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card text-white cursor-pointer dashboard-block six-block" title="Total Active Blogs" onclick="window.location='{{ route('admin.blog.list') }}'">
                  <div class="card-body pb-0">
                    <div class="d-flex">
                        <div class="icons-block">
                            <i class="cil-user"></i>
                        </div>
                        <div>
                            <div class="text-value-lg">{{ $data['blogCount'] }}</div>
                            <div>Total Blogs</div>
                        </div>
                    </div>
                  </div>
                  <!-- <div class="c-chart-wrapper mt-3" style="height:70px;"></div> -->
              </div>
          </div>
        </div>
    </div>
</div>
<form method="GET" id="activeProductForm" action="{{ route('admin.item.list') }}" enctype="multipart/form-data">
<input type="hidden" name="product_status" value="1">
</form>
<script>
$(document).ready(function(){
    $("#activeProduct").click(function(){        
        $("#activeProductForm").submit();
    });
});
</script>


@endsection

@section('javascript')
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('js/main.js') }}" defer></script>
@endsection
