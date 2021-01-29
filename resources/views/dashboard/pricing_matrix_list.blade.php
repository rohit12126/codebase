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
        <li class="breadcrumb-item active">Pricing Matrix</li>
        </ol>
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.matrix') }}" class="btn btn-danger pull-right custom-tooltip">
                <span class="custom-tooltiptext custom-tooltip-bottom">Create New Pricing Matrix</span>
                <i class="cil-plus"></i> Create Pricing Matrix
            </a>
        </div>
    </div>
@endsection

@section('content')

<div class="container-fluid">
@include('partials.alert_msg')
    <div class="fade-in">
        <div class="row">
        <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9 col-sm-8">
                                <form method="GET" action="{{ url()->current() }}">
                                    <div class="row">
                                        <div class="col-sm-6 col-8">
                                            <div class="form-group mb-0">
                                            <label>Search via Product Family | SKU | UPC</label>
                                            <input type="text" placeholder="Title" name="title"
                                                class="form-control" value="{{ @$_GET['title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex align-items-end pl-0">
                                            <button type="submit" title="Search" class="btn btn-primary mr-1 mr-sm-2 mt-0 custom-tooltip">
                                                <span class="custom-tooltiptext custom-tooltip-top">Search Pricing Matrix</span>
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                            <a href="{{route('admin.matrix.list')}}" class="btn btn-danger text-white custom-tooltip">
                                                <span class="custom-tooltiptext custom-tooltip-top">Reset Pricing Matrix Search</span>
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
                                @if($matrix_list->isNotEmpty())
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S No.</th>
                                            <th>Product Family</th>
                                            <th>SKU</th>
                                            <th>UPC</th>
                                            <th>Type</th>
                                            <th>Mirror</th>
                                            <th>Retail</th>
                                            <th class="action-th">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($matrix_list as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $value->product_family }}</td>
                                            <td>{{ $value->model }}</td>
                                            <td>{{ $value->upc }}</td>
                                            <td>{{ $value->type }}</td>
                                            <td>{{ $value->mirror }}</td>
                                            <td>${{ number_format($value->retail,2) }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-info mb-2 mb-sm-0 custom-tooltip" href="{{ url('admin/edit_matrix', $value->id) }}">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Edit this Pricing Matrix</span>
                                                    <i class="cil-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger mb-2 mb-sm-0 custom-tooltip" href="{{ url('admin/delete_matrix', $value->id) }}" onclick="return confirm('Are you sure you want to delete this Pricing Matrix?');">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Delete this Pricing Matrix</span>
                                                    <i class="cil-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                        <th colspan="6" class="text-center"><img src="{{ url('') }}/upload/product/empty-list.jpg" alt="Pricing Matrix list is empty"></th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                        {{ @$matrix_list->appends(request()->query())->links()  }}
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
