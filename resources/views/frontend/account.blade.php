@extends('layouts.front')
@section('content')
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My Address</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>Account details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="true"><i class="ti-id-badge"></i>Change Password</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-lock"></i>Logout</a>
                      </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content dashboard_content">
                  	<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="card-body">
                            <h3> Welcome {{ $user->name}} </h3>
                    			<p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent orders</a>, manage your <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and billing addresses</a> and <a href="javascript:void(0);" onclick="$('#account-detail-tab').trigger('click')">edit your password and account details.</a></p>
                            </div>
                        </div>
                  	</div>
                  <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    @include('frontend.partials.order')
                  </div>
                  <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                    @include('frontend.partials.address')
                  </div>
                  <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
					          @include('frontend.partials.profile')
				  	      </div>
                  <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
					          @include('frontend.partials.changePassword')
				  	      </div>
			      </div>
			  </div>
		</div>
	</div>
</div>
@endsection()