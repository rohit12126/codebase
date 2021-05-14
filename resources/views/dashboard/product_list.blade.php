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
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.item') }}" class="btn btn-danger custom-tooltip">
                <span class="custom-tooltiptext custom-tooltip-bottom">Add New Product</span>
                <i class="cil-plus"></i>  Create Product
            </a>
        </div>
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
                            <div class="col-md-9 col-sm-8">
                            @include('partials.alert_msg')
                                <form method="GET" action="{{ url()->current() }}">
                                        <div class="row">
                                            <div class="col-sm-6 col-8">
                                                <div class="form-group mb-0">
                                                <label>Search by Product Name</label>
                                                <input type="text" placeholder="Item Name" maxlength="200" name="product_name"
                                                    class="form-control" value="{{ @$_GET['product_name'] }}">
                                                </div>
                                            </div>
                                           {{--  <div class="col-4 d-flex align-items-end pl-0">
                                                <div class="form-group mb-sm-0">
                                                    <label>Filter via Status</label>
                                                    <select name="product_status" id="" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="1" @if(@$_GET['product_status']==1) selected @endif </option>Active
                                                        </option>
                                                        <option value="0" @if(@$_GET['product_status']==2) selected @endif </option>Inactive
                                                        </option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-4 d-flex align-items-end pl-0">
                                                <button type="submit" title="Search" class="btn btn-primary mr-2 mt-0 custom-tooltip">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Search Product</span>
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.item.list')}}" title="Reset Filters"  class="btn btn-danger text-white custom-tooltip">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Reset Search Product</span>
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overflow-auto table-responsive">
                            <div class="table-swipe-indicator"></div>
                            <table class="table table-striped table-bordered datatable">
                                @if($product_list->isNotEmpty())
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S No.</th>
                                            <th>Product Thumbnail</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th class="action-th">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product_list as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 + ( (($_GET['page'] ?? 1) - 1 ) * 10 ) }}</td>
                                            <td>
                                                @if(count($value->images) > 0)
                                                    <img src="{{ url('') }}/upload/product/{{ @$value->images[0]->image}}" width="50" />
                                                @else
                                                    <img src="{{ url('/download.jpeg') }}" width="50" />
                                                @endif
                                            </td>
                                            <td>@if ($value->is_accessory != 1) {{ ucfirst(strtolower($value->catergory->name ))}} @endif{{ $value->name }}</td>
                                            <td>&#36;{{ $value->sale_price }}</td>
                                            <td>@if ($value->is_accessory == 1) {{ "Hardware" }} @else {{ "Product" }} @endif </td>
                                            <td>
                                            @if ($value->is_accessory == 0)
                                                <a class="btn btn-sm btn-info custom-tooltip" href="{{ route('admin.product.description', ['product_id' => $value->id]) }}">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Add Product Description</span>
                                                    <i class="cil-playlist-add"></i>
                                                </a>
                                            @endif
                                                <a class="btn btn-sm btn-info custom-tooltip" href="{{ url('admin/edit_item', $value->id) }}">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Edit Product</span>
                                                    <i class="cil-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger custom-tooltip" href="{{ url('admin/delete_item', $value->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                    <span class="custom-tooltiptext custom-tooltip-top">Delete Product</span>
                                                    <i class="cil-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                        <th colspan="6" class="text-center"><img src="{{ url('') }}/upload/product/empty-list.jpg" alt="Product list is empty"></th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                        {{ @$product_list->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{ asset('js/tooltips.js') }}"></script>

@endsection
