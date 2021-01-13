@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3 justify-content-between">
        <ol class="breadcrumb breadcrumb-custom border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.category') }}">Category</a></li>
        </ol>
        @if(!isset($category))
            <div class="d-flex align-items-center">
                <button class="btn btn-danger mt-0 custom-tooltip" onclick="$('.addForm').show('slow');">
                    <span class="custom-tooltiptext custom-tooltip-bottom">Add New Category</span>
                    <i class="cil-plus"></i> Create Category
                </button>
            </div>
        @endif
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        @include('partials.alert_msg')
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif
        <div class="row addForm">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4> @if(isset($category)) Edit @else Create @endif Category</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-sm-4">
                                    @csrf
                                    <div class="form-group mb-sm-0">
                                        <label>Category Name</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="150" placeholder="category name" name="name" class="form-control"
                                            required value="{{ @$category->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-sm-0">
                                        <label>Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="status" class="form-control">
                                            <option @if(@$category->status == 1) selected @endif value="1">Active</option>
                                            <option @if(@$category->status == 0) selected @endif value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex h-100 align-items-end">
                                    <div class="d-flex">
                                        <button type="submit" title="@if(isset($category)) Update @else Submit @endif" class="btn btn-primary mt-0 mr-3">
                                            @if(isset($category)) Update @else Create @endif
                                        </button>
                                        @if(isset($category))
                                        <a href="{{route('admin.category')}}" title="Cancle" class="btn btn-danger text-white">
                                            Cancel
                                        </a>
                                        @else
                                        <a href="{{route('admin.category')}}" title="Cancle" class="btn btn-danger text-white">
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
</div>

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
                                    <label>Search by Category Name</label>
                                    <input type="text" maxlength="150" placeholder="Category Name" name="name"
                                        class="form-control" value="{{ @$_GET['name'] }}">
                                    </div>
                                </div>
                                <div class="col-4 d-flex align-items-end pl-0">
                                    <button type="submit" class="btn btn-primary custom-tooltip mr-1 mr-sm-2 mt-0" >
                                        <span class="custom-tooltiptext custom-tooltip-top">Search Category</span>
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                    <a href="{{route('admin.category')}}" class="btn btn-danger text-white custom-tooltip">
                                        <span class="custom-tooltiptext custom-tooltip-top">Reset search category</span>
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
                        @if($category_list->isNotEmpty())
                            <thead>
                                <tr>
                                    <th class="serial-number-th">S No.</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th class="action-th">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category_list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>@if($value->status == 0) {{ 'Inactive' }} @else {{'Active'}}@endif</td>
                                    <td>
                                        <button class="btn btn-sm btn-info custom-tooltip" onclick="window.location='{{ url('admin/edit_category', $value->id) }}'">
                                            <span class="custom-tooltiptext custom-tooltip-top">Edit Category</span>
                                            <i class="cil-pencil"></i>
                                        </button>
                                        <a class="btn btn-sm btn-danger custom-tooltip" href="{{ url('admin/delete_category', $value->id) }}" onclick="return confirm('Are you sure you want to delete this category?');" data-toggle="tooltip" data-placement="bottom">
                                            <span class="custom-tooltiptext custom-tooltip-top">Delete Category</span>
                                            <i class="cil-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-center">Category list is empty</th>
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
</div>

@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $('.addForm').hide();
    $("#myform").validate({
        rules: {
            name: {
                required: true,
                maxlength: 80,
                minlength:3,
            }
        },
        messages: {
            name: "Category name must be between 3 & 80 characters"
        },
        submitHandler: function (form) {
            // do other things for a valid form
            form.submit();
        }
    });
    @if (isset($category)) $('.addForm').show(); @endif

</script>

@endsection
