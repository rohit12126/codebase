@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }

</style>
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Filter</h4>
                    </div>
                    <div class="card-body">
                        @include('partials.alert_msg')
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page" id="page" value="" />
                            <div class="row">
                                <div class="col-6">
                                    <label>From Date</label>
                                    <input type="text" placeholder="From Date" name="from_date" class="form-control" value="{{ @$_POST['from_date'] }}" id="from_date" autocomplete="off">
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <label>Order No.</label>
                                    <input type="text" placeholder="Order No." name="order_no" class="form-control" value="{{ @$_POST['order_no'] }}" autocomplete="off">
                                    @error('order_no')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <label>Product Name</label>

                                    <input type="text" placeholder="Product Name" name="product_name" class="form-control" value="{{ @$_POST['product_name'] }}">
                                </div>
                                <div class="col-6">
                                    <label>To Date</label>
                                    <input type="text" placeholder="To Date" name="to_date" class="form-control" value="{{ @$_POST['to_date'] }}" id="to_date">
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <label>Order Status</label>
                                    <select name="order_status" id="" class="form-control">
                                        <option value="">Select Order Status</option>
                                        <option value="1" @if(@$_POST['order_status']==1) selected @endif </option>In
                                            Process
                                        </option>
                                        <option value="2" @if(@$_POST['order_status']==2) selected @endif </option>Delivered
                                        </option>
                                        <option value="3" @if(@$_POST['order_status']==3) selected @endif </option>Cancelled
                                        </option>
                                    </select>

                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary mt-0 mr-4">
                                    Submit
                                </button>
                                <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                    Back
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($order_list as $key => $value)
                                <tr>
                                    <td>{{ $value->order_no }}</td>
                                    <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                                    <td>{{ ucwords($value->user->name) }}</td>
                                    <td>{{ $value->order_status }}</td>
                                    <td>{{ $value->grand_total }}</td>

                                    <td>
                                        <a class="btn btn-info" href="{{ url('admin/order_details', $value->order_no) }}" title="Details">
                                            <i class="cil-arrow-thick-to-right"></i>
                                        </a>
                                        {{-- <a class="btn btn-danger" href="{{ url('admin/delete_user', $value->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this user?');">
                                        <i class="cil-trash"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
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

        $('.page-link').click(function(e) {
            e.preventDefault();
            $('#page').val($(this).text());
            $('form').submit();
        });
    });

</script>
@endsection
