@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }
</style>
@endsection
@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Enquiries</li>
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
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Search via Name</label>
                                                    <input type="text" placeholder="Name" name="name"
                                                    class="form-control" value="{{ @$_GET['name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label>Search via Email</label>
                                                    <input type="text" placeholder="Email" name="email"
                                                    class="form-control" value="{{ @$_GET['email'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                <label>Search via Phone</label>
                                                <input type="number" placeholder="Phone" name="phone"
                                                    class="form-control" value="{{ @$_GET['phone'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                <label>Is connected ?</label>
                                                    <select name="connected" id="connected" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option @if(isset($_GET['connected']) && $_GET['connected'] == 2) selected @endif value="2">Pending</option>
                                                        <option @if(isset($_GET['connected']) && $_GET['connected'] == 1) selected @endif value="1">Connect</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-group">
                                                <label>Reason</label>
                                                    <select name="reason" id="reason" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option @if(isset($_GET['reason']) && $_GET['reason'] == "Basic Enquiry") selected @endif value="Basic Enquiry">Basic Enquiry</option>
                                                        <option @if(isset($_GET['reason']) && $_GET['reason'] == "Order Related") selected @endif value="Order Related">Order Related</option>
                                                        <option @if(isset($_GET['reason']) && $_GET['reason'] == "Issue Not Resolved") selected @endif value="Issue Not Resolved">Issue Not Resolved</option>
                                                        <option @if(isset($_GET['reason']) && $_GET['reason'] == "Feedback") selected @endif value="Feedback">Feedback</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-end mb-3">
                                                <button type="submit" title="Search" class="custom-tooltip btn btn-primary mr-2 mt-0" >
                                                    <span class="custom-tooltiptext custom-tooltip-top">Search Enquiry</span>
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.enquiries')}}" title="Reset Filters"  class="custom-tooltip btn btn-danger text-white">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Reset Enquiry Search</span>
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    @include('partials.alert_msg')
                        <div class="overflow-auto table-responsive">
                            <table class="table table-striped table-bordered datatable">
                                @if($enquieies->isNotEmpty())
                                <div class="table-swipe-indicator"></div>
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Reason</th>
                                            <th>Message</th>
                                            <th class="action-th">Connected ?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($enquieies as $key=>$value)
                                        <tr @if($value->connected == 0) class="table-success"@endif>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->phone_nu}}</td>
                                            <td>{{$value->reason}}</td>
                                            
                                            <td>{{$value->message}}</td>
                                            <td class="text-center">
                                            @if($value->connected == 0)
                                                <a class="btn btn-sm btn-primary d-inline-block custom-tooltip" href="{{ url('admin/update-enquiry', $value->id) }}" onclick="return confirm('Are you sure you want to mark contected?');" >
                                                    <span class="custom-tooltiptext custom-tooltip-top">Mark As Connected</span>
                                                    <i class="cil-check"></i>
                                                </a>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="text-center">Enquiries list is empty</th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                        {{ @$enquieies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

@endsection
