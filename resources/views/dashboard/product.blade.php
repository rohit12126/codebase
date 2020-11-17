@extends('dashboard.base')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Product</h4>
                    </div>
                    <div class="card-body">
                        @include('partials.alert_msg')
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Categoty</label>
                                        <select class="form-control" id="select3" name="category_id" required>
                                            <option value="">Please select</option>
                                            @foreach($category_list as $key => $value)
                                            <option value="{{ $value->id }}" @if($value->id == @$product->category_id) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" placeholder="Product name" name="name" class="form-control" required value="{{ @$product->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Purchase Price</label>
                                        <input type="number" placeholder="Purchase Price" name="purchase_price" class="form-control" required value="{{ @$product->purchase_price }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Sale Price</label>
                                        <input type="number" placeholder="Sale Price" name="sale_price" class="form-control" required value="{{ @$product->sale_price }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Stock Quantity</label>
                                        <input type="number" placeholder="Stock Quantity" name="stock_qty" class="form-control" required value="{{ @$product->stock_qty }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea placeholder="Description" name="description" class="form-control" required>{{ @$product->description }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                        Back
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="form-group" id="moreImage">
                                        <label for="">Product Image <span class="btn btn-primary btn-sm" id="addMore" onclick="addMore()">Add More</span> </label>
                                        @if(isset($product->images) && count(@$product->images) > 0)
                                        @foreach($product->images as $key => $value)
                                        @if($key > 0) <div><hr> @endif
                                        <input id="file-input" type="file" name="image[{{ $value->id }}]" class="form-control" accept="image/*">
                                        <input type="hidden" placeholder="Stock Quantity" name="storeimage[{{ $value->id }}]" class="form-control" required value="{{ $value->id }}">
                                        <img src="{{ url('') }}/upload/product/{{ $value->image }}" width="100" />
                                        @if($key > 0)
                                           <bottun class="btn btn-danger btn-sm" onclick="return this.parentNode.remove();">-</button></div>
                                        @endif

                                        @endforeach
                                        @else
                                        <input id="file-input" type="file" name="image[]" class="form-control" accept="image/*" required>
                                        @endif
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
                        <h4>Product List</h4>
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
                                        <a class="btn btn-info" href="{{ url('admin/edit_product', $value->id) }}">
                                            <i class="cil-description"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ url('admin/delete_product', $value->id) }}">
                                            <i class="cil-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')

<script>
    //document.getElementById('addMore').addEventListener("click", function(event){ 
    function addMore() {

        document.getElementById('moreImage').innerHTML += '<div><hr><input id="file-input" type="file" name="image[]" class="form-control mb-2" accept="image/*"><bottun class="btn btn-danger btn-sm" onclick="return this.parentNode.remove();">-</button><div>';
    }
    //});

</script>

@endsection
