@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3 justify-content-between">
        <ol class="breadcrumb breadcrumb-custom border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.item.list') }}">Items</a></li>
            <li class="breadcrumb-item active"><a>Product Description</a></li>
            <!-- <li class="breadcrumb-item active"><a href="{{ route('admin.product.description', ['product_id' => $productId]) }}">Product Description</a></li> -->
        </ol>
        <div class="d-flex align-items-center">
            <button class="btn btn-danger custom-tooltip" onclick="$('.addForm').show('slow');">
            <span class="custom-tooltiptext custom-tooltip-bottom">Create New Description</span>
            <i class="cil-plus"></i> Create Description
            </button>
        </div>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        @include('partials.alert_msg')
        <div class="row addForm">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4> @if(isset($productDescription)) Edit @else Create @endif Description</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-sm-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="hidden" name="product_id" value="{{ $productId }}">
                                        <input type="text" maxlength="150" placeholder="Title" name="title" class="form-control"
                                            required value="{{ @$productDescription->title }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status </label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="status" class="form-control">
                                            <option @if(@$productDescription->status == 0) selected @endif value="0">InActive</option>
                                            <option @if(@$productDescription->status == 1) selected @endif value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <span class="mandatory">*</span>
                                        <textarea placeholder="Description" id="content" name="description" class="form-control summernote"  title="Description" >{{  old('description', @$productDescription->description) }}</textarea>
                                        @if($errors->has('description'))
                                            <div class="error">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex pt-2" >
                                        <button type="submit" title="@if(isset($productDescription)) Update @else Submit @endif" class="btn btn-primary mt-0 mr-3">
                                            @if(isset($productDescription)) Update @else Submit @endif
                                        </button>
                                        @if(isset($productDescription))
                                        <a href="{{route('admin.product.description', ['product_id' => $productId])}}" title="Cancel" class="btn btn-danger text-white">
                                            Cancel
                                        </a>
                                        @else
                                        <a onclick="$('.addForm').hide('slow');"  title="Cancel" class="btn btn-danger text-white">
                                            Cancel
                                        </a>
                                        @endif
                                    </div>
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
                    <div class="row mb-4">
                        <div class="col-sm-4 col-8">
                            <div class="form-group mb-0">
                                <h5><b>Product:</b> {{ $product->name}}</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <form method="GET" action="{{ url()->current() }}">
                                <div class="row">
                                    <div class="col-sm-6 col-8">
                                        <div class="form-group mb-0">
                                        <label>Search via Title</label>
                                        <input type="hidden" name="product_id" value="{{ $productId }}">
                                        <input type="text" maxlength="150" placeholder="Title" name="title"
                                            class="form-control" value="{{ @$_GET['title'] }}">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex align-items-end pl-0">
                                        <button type="submit" title="Search" class="btn btn-primary custom-tooltip mr-2 mt-0" >
                                            <span class="custom-tooltiptext custom-tooltip-top">Search Description</span>
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                        <a href="{{route('admin.product.description', ['product_id' => $productId])}}" class="custom-tooltip btn btn-danger text-white">
                                            <span class="custom-tooltiptext custom-tooltip-top">Reset Search Description</span>
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
                            @if($productDescriptionList->isNotEmpty())
                                <thead>
                                    <tr>
                                        <th class="serial-number-th">S No.</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($productDescriptionList as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-info custom-tooltip" type="button"
                                                onclick="window.location='{{ url('admin/product/edit_description', $value->id).'?product_id='.$productId }}'">
                                                 <span class="custom-tooltiptext custom-tooltip-top">Edit Description</span>
                                                <i class="cil-pencil"></i>
                                            </button>
                                            <a class="btn btn-sm btn-danger custom-tooltip" href="{{ url('admin/product/delete_description', $value->id).'?product_id='.$productId }}" onclick="return confirm('Are you sure you want to delete this description?');">
                                                 <span class="custom-tooltiptext custom-tooltip-top">Delete Description</span>
                                                <i class="cil-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            @else
                                <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-center">Product description list is empty</th>
                                    </tr>
                                </tfoot>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

{{-- Editor js--}}

<!-- include Bootstrap and summernote css/js -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

<script>
    /* intialize Editor */
    $(function() {
        $('.summernote').summernote({
                height: 200,
                popover: {
                    image: [],
                    link: [],
                    air: []
                }
        });
    });

    $('.addForm').hide();

    $("#myform").validate({
        
        submitHandler: function (form) {
            // do other things for a valid form
            form.submit();
        }
    });

    @if (isset($productDescription)) $('.addForm').show(); @endif

</script>
@endsection
