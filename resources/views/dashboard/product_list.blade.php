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
        <li class="breadcrumb-item active">Items</li>
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
                            <div class="col-md-9">
                            @include('partials.alert_msg')
                                <form method="GET" action="{{ url()->current() }}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group mb-sm-0">
                                                <label>Search via Name</label>
                                                <input type="text" placeholder="Item Name" maxlength="200" name="product_name"
                                                    class="form-control" value="{{ @$_GET['product_name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-sm-0">
                                                    <label>Filter via Status</label>
                                                    <select name="product_status" id="" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="1" @if(@$_GET['product_status']==1) selected @endif </option>Active
                                                        </option>
                                                        <option value="0" @if(@$_GET['product_status']==2) selected @endif </option>In-Active
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 d-flex align-items-end">
                                                <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.item.list')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            <div class="col-md-3 d-flex align-items-end justify-content-md-end mt-3 mt-md-0">
                                <a href="{{ route('admin.item') }}" data-toggle="tooltip" data-placement="bottom" data-original-title="Add New Item" class="btn btn-danger">
                                    <i class="cil-plus"></i>  Create Item
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overflow-auto">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th class="serial-number-th">S No.</th>
                                        <th>Product Thumbnail</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($product_list as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            @if(count($value->images) > 0)
                                                <img src="{{ url('') }}/upload/product/{{ @$value->images[0]->image}}" width="50" />
                                            @else
                                                <img src="{{ url('/download.jpeg') }}" width="50" />
                                            @endif
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>&#36;{{ $value->sale_price }}</td>
                                        <td>@if ($value->is_accessory == 1) {{ "Hardware" }} @else {{ "Product" }} @endif </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" title="Add Product Description" href="{{ route('admin.product.description', ['product_id' => $value->id]) }}">
                                                <i class="cil-playlist-add"></i>
                                            </a>
                                            <a class="btn btn-sm btn-info" title="Edit Item" href="{{ url('admin/edit_item', $value->id) }}">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger" title="Delete Item"  href="{{ url('admin/delete_item', $value->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <i class="cil-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{{ asset('js/tooltips.js') }}"></script>

@endsection
