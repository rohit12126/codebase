@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.category') }}">Category</a></li>
        </ol>
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
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="150" placeholder="category name" name="name" class="form-control"
                                            required value="{{ @$category->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="status" class="form-control">
                                            <option @if(@$category->status == 0) selected @endif value="0">In-Active</option>
                                            <option @if(@$category->status == 1) selected @endif value="1">Active</option>
                                        </select>
                                    </div>
                                    <div class="d-flex pt-2" >
                                    <button type="submit" title="@if(isset($category)) Update @else Submit @endif" class="btn btn-primary mt-0 mr-3">
                                        @if(isset($category)) Update @else Submit @endif
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
                    <div class="col-9">
                        <form method="GET" action="{{ url()->current() }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group mb-0">
                                    <label>Search via Name</label>
                                    <input type="text" maxlength="150" placeholder="Name" name="name"
                                        class="form-control" value="{{ @$_GET['name'] }}">
                                    </div>
                                </div>
                                <div class="col-4 d-flex align-items-end">
                                    <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                    <a href="{{route('admin.category')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                        <i class="cil-reload"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-3 d-flex align-items-end justify-content-end" data-toggle="tooltip" data-placement="bottom" data-original-title="Add New Category" title="Add New Category">
                        <button class="btn btn-danger pull-right mt-0" onclick="$('.addForm').show('slow');">
                            <i class="cil-plus"></i> Create Category
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category_list as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                <button class="btn btn-info" type="button" title="Edit Category"
                                    onclick="window.location='{{ url('admin/edit_category', $value->id) }}'">
                                    <i class="cil-pencil"></i>
                                </button>
                                <a class="btn btn-danger" title="Delete Category" href="{{ url('admin/delete_category', $value->id) }}" onclick="return confirm('Are you sure you want to delete this category?');">
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