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
                        <div class="row">
                            <div class="col-6">
                                <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
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
                                <div class="form-group">
                                @dump($product)
                                    <label for="file-input">Product Image</label>
                                    <input id="file-input" type="file" name="image[]" class="form-control" accept="image/*">
                                    @if(@$product->image[0]->image)
                                    <hr />
                                    <img src="{{ url('') }}/upload/product/{{ @$product->image[0]->image}}" width="150" />
                                    @endif
                                </div>
                            </div>
                            </form>
                        </div>
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
                                        <img src="{{ url('') }}/upload/product/{{ @$value2->image}}" width="150" />
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


@endsection
