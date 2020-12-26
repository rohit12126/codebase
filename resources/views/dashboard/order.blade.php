@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }

</style>
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Orders</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">
                                <form method="GET" action="{{ url()->current() }}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>From Date</label>
                                                    <input type="text" placeholder="From Date" name="from_date" class="form-control" value="{{ @$_GET['from_date'] }}" id="from_date" autocomplete="off">
                                                    @error('name')
                                                    <span class="text-danger" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>To Date</label>
                                                    <input type="text" placeholder="To Date" name="to_date" class="form-control" value="{{ @$_GET['to_date'] }}" id="to_date">
                                                    @error('email')
                                                    <span class="text-danger" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Order No.</label>
                                                    <input type="text" placeholder="Order No." name="order_no" class="form-control" value="{{ @$_GET['order_no'] }}" autocomplete="off">
                                                    @error('order_no')
                                                    <span class="text-danger" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group mb-0">
                                                    <label>Order Status</label>
                                                    <select name="order_status" id="" class="form-control">
                                                        <option value="" hidden>Select Order Status</option>
                                                        <option value="1" @if(@$_GET['order_status']==1) selected @endif </option>
                                                            New
                                                        </option>
                                                        <option value="2" @if(@$_GET['order_status']==2) selected @endif </option> Received
                                                        </option>
                                                        <option value="3" @if(@$_GET['order_status']==3) selected @endif </option> Shipped
                                                        </option>
                                                        <option value="4" @if(@$_GET['order_status']==4) selected @endif </option> Delivered
                                                        </option>
                                                        <option value="5" @if(@$_GET['order_status']==5) selected @endif </option> Cancled
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-sm-0">
                                                    <label>Product Name</label>
                                                    <input type="text" placeholder="Product Name" name="product_name" class="form-control" value="{{ @$_GET['product_name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 d-flex align-items-end">
                                                <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.order')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                       {{--  <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                <label>Search via Name</label>
                                                <input type="text" placeholder="Name" name="name"
                                                    class="form-control" value="{{ @$_GET['name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-4 d-flex align-items-center pt-2">
                                                <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.category')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overflow-auto table-responsive mb-2">
                            <div class="table-swipe-indicator"></div>
                            <table class="table table-striped table-bordered table-hover datatable">
                                @if($order_list->isNotEmpty())
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S.No</th>
                                            <th>Order No.</th>
                                            <th class="action-th">Date</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th class="action-th">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_list as $key => $value)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $value->order_no }}</td>
                                                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                                                <td>@if(!is_null($value->user)) {{ ucwords($value->user->name) }}@else {{ ucwords($value->getBillingAddress->name) }} @endif</td>
                                                <td>{{ $value->order_status }}</td>
                                                <td>&#36;{{ $value->grand_total }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href="{{ url('admin/order_details', $value->order_no) }}" title="Details">
                                                        <i class="cil-arrow-thick-to-right"></i>
                                                    </a>
                                                    {{-- <a class="btn btn-sm btn-danger" href="{{ url('admin/delete_user', $value->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete this user?');">
                                                    <i class="cil-trash"></i>
                                                    </a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="text-center">Order list is empty</th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                        {{ @$order_list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    $(function() {
        $("#from_date").datepicker({
            changeMonth: true
            , changeYear: true
            , yearRange: "-10:+0"
            , showButtonPanel: true
            , dateFormat: 'dd M yy'
            , onSelect: function(selected) {
                $("#to_date").datepicker("option", "minDate", selected)
            }
        });

        $("#to_date").datepicker({
            changeMonth: true
            , changeYear: true
            , yearRange: "-10:+0"
            , showButtonPanel: true
            , dateFormat: 'dd M yy',

        });
    });

</script>
@endsection
