@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }
</style>
@endsection

@section('breadcrumb')
    <div class="c-subheader px-3 justify-content-between">
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Zones</li>
        </ol>
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.zone') }}" class="btn btn-danger pull-right custom-tooltip">
                <span class="custom-tooltiptext custom-tooltip-bottom">Create New Zone</span>
                <i class="cil-plus"></i> Create Zone
            </a>
        </div>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
        @include('partials.alert_msg')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9 col-sm-8">
                                <form method="GET" action="{{ url()->current() }}">
                                    <div class="row">
                                        <div class="col-sm-6 col-8">
                                            <div class="form-group mb-0">
                                            <label>Search via Title</label>
                                            <input type="text" placeholder="Title" name="title"
                                                class="form-control" value="{{ @$_GET['title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex align-items-end pl-0">
                                            <button type="submit" title="Search" class="btn btn-primary mr-1 mr-sm-2 mt-0 custom-tooltip">
                                                <span class="custom-tooltiptext custom-tooltip-top">Search Zone</span>
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                            <a href="{{route('admin.zone.list')}}" class="btn btn-danger text-white custom-tooltip">
                                                <span class="custom-tooltiptext custom-tooltip-top">Reset Zone Search</span>
                                                <i class="cil-reload"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overflow-auto table-responsive mb-2">
                            <div class="table-swipe-indicator"></div>
                            <table class="table table-striped table-bordered datatable">
                                @if($zone_list->isNotEmpty())
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S No.</th>
                                            <th>Title</th>
                                            <th>Product Shipping Price</th>
                                            <th>Hardware Shipping Price</th>
                                            <!-- <th>States</th> -->
                                            <th class="action-th">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($zone_list as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>${{ $value->product_price }}</td>
                                            <td>${{ $value->hardware_price }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-info mb-2 mb-sm-0 custom-tooltip" href="{{ url('admin/edit_zone', $value->id) }}">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Edit this Zone</span>
                                                    <i class="cil-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger mb-2 mb-sm-0 custom-tooltip" href="{{ url('admin/delete_zone', $value->id) }}" onclick="return confirm('Are you sure you want to delete this zone?');">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Delete this Zone</span>
                                                    <i class="cil-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                            <th colspan="4" class="text-center">Zone list is empty</th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                        {{ @$zone_list->links() }}
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
