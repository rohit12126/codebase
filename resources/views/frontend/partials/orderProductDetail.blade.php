
@extends('layouts.front')
@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="compare_box">
                    <div class="table-responsive">
                    <table class="table">
                  <thead>
                      <tr>
                          <th>Order</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <td></td>
                            <td></td>
                            <td>{{$data->status === 1 ? "In-Process" : ($data->status ===2 ? "Delivered" : "Cancel")}}</td>
                            <td></td>
                            <td><a href="#" class="btn btn-fill-out btn-sm ">Cancel</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</div>
{{$data}}
@endsection()