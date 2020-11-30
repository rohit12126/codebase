@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
         <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                        <h4>Product Filter</h4>
                        </div>
                        <div class="col-4">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
                            @csrf
                        <button type="submit" class="btn btn-primary" style="float: right;">
                                Submit
                            </button>
                            @if(@$_POST)
                            <a href="{{route('admin.product.list')}}" class="btn btn-danger text-white">
                                Clear Active Filters
                            </a>
                            @endif
                        </div>
                    </div>

                    </div>
                    <div class="card-body">
                        @include('partials.alert_msg')
                        
                            <input type="hidden" name="page" id="page" value="" />
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <label>Product Name</label>
                                    <input type="text" placeholder="Product Name" name="product_name"
                                        class="form-control" value="{{ @$_POST['product_name'] }}">
                                    </div>
                                    {{-- <div class="col">
                                    <label>Stock Less Quantity</label>
                                    <input type="text" placeholder="Stock Less Quantity" name="stock_less" class="form-control"
                                        value="{{ @$_POST['stock_less'] }}" autocomplete="off">
                                    </div> --}}
                                    <div class="col">
                                    <label>Status</label>
                                    <select name="product_status" id="" class="form-control">
                                        <option value="">Select Status</option>
                                        <option value="1" @if(@$_POST['product_status']==1) selected @endif </option>Active
                                        </option>
                                        <option value="0" @if(@$_POST['product_status']==2) selected @endif </option>In-Active
                                        </option>
                                    </select>
                                    </div>
                                </div>
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
                        <div class="row">
                            <div class="col-10">
                                <h4>Product List</h4>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('admin.product') }}" class="btn btn-primary btn-sm pull-right">
                                    Create Product
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Stock Quantity</th>
                                    <th>Purchase Price</th>
                                    <th>Sale Price</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($product_list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->stock_qty }}</td>
                                    <td>{{ $value->purchase_price }}</td>
                                    <td>{{ $value->sale_price }}</td>
                                    <td>
                                        @if(count($value->images) > 0)
                                        @foreach($value->images as $key2 => $value2)
                                        <img src="{{ url('') }}/upload/product/{{ @$value2->image}}" width="50" />
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ url('admin/edit_product', $value->id) }}" title="Edit">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ url('admin/delete_product', $value->id) }}" onclick="return confirm('Are you sure you want to delete this product?');" title="Delete">
                                            <i class="cil-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{-- @if(@!$_POST) --}}
                        {{ @$product_list->links() }}
                            
                        {{-- @endif --}}
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
<script>
$('.page-link').click(function(e){
    e.preventDefault();
    $('#page').val($(this).text());
    $('form').submit();
});
</script>
@endsection
