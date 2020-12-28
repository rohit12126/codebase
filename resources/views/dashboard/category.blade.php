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
                <button class="btn btn-danger mt-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Add New Category" title="Add New Category" onclick="$('.addForm').show('slow');">
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
                                            <option @if(@$category->status == 0) selected @endif value="0">In-Active</option>
                                            <option @if(@$category->status == 1) selected @endif value="1">Active</option>
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
                                        <a onclick="$('.addForm').hide('slow');" title="Cancle" class="btn btn-danger text-white">
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
                                    <label>Search via Name</label>
                                    <input type="text" maxlength="150" placeholder="Name" name="name"
                                        class="form-control" value="{{ @$_GET['name'] }}">
                                    </div>
                                </div>
                                <div class="col-4 d-flex align-items-end pl-0">
                                    <button type="submit" title="Search" class="btn btn-primary mr-1 mr-sm-3 mt-0" >
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                    <a href="{{route('admin.category')}}" title="Reset Filters"  class="btn btn-danger text-white">
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
                                    <th class="action-th">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category_list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit Category" onclick="window.location='{{ url('admin/edit_category', $value->id) }}'">
                                            <i class="cil-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit Category"></i>
                                        </button>
                                        <a class="btn btn-sm btn-danger" title="Delete Category" href="{{ url('admin/delete_category', $value->id) }}" onclick="return confirm('Are you sure you want to delete this category?');">
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
        
        submitHandler: function (form) {
            // do other things for a valid form
            form.submit();
        }
    });
    @if (isset($category)) $('.addForm').show(); @endif

</script>

@endsection