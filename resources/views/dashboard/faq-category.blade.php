@extends('dashboard.base')

@section('css')

@endsection
@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.faq.list') }}">FAQ</a></li>
            <li class="breadcrumb-item active">FAQ Category</li>
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
                        <h4> @if(isset($category)) Edit @else Create @endif FAQ Category</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>FAQ Category Name</label>
                                        <input type="text" maxlength="150" placeholder="FAQ category name" name="name" class="form-control"
                                            required value="{{ @$category->category }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" @if (isset($category->status) && $category->status =='1') {{ "selected"}} @endif>Active</option>
                                            <option value="0" @if (isset($category->status) && $category->status =='0') {{ "selected"}} @endif>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="d-flex pt-2">
                                        <button type="submit" class="btn btn-primary mt-0 mr-3">
                                            @if(isset($category)) Update @else Submit @endif
                                        </button>
                                        <a onclick="$('.addForm').hide('slow');" href="{{route('admin.faq.category')}}" class="btn btn-danger text-white">
                                            Cancel
                                        </a>
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
                    <div class="col-10">
                        <form method="GET" action="{{ url()->current() }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label>Search via Name</label>
                                        <input type="text" placeholder="Name" name="name"
                                            class="form-control" value="{{ @$_GET['name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex align-items-center pt-2">
                                        <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                        <a href="{{route('admin.faq.category')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                            <i class="cil-reload"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        {{-- @if(!isset($category)) --}}
                        <button class="btn btn-primary btn-sm pull-right" onclick="$('.addForm').show('slow');">
                            Create FAQ Category
                        </button>
                        {{-- @endif --}}
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        @if($category_list->isNotEmpty())
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
                                <td>{{ $value->category }}</td>
                                <td>
                                    <button class="btn btn-info" type="button" data-toggle="tooltip"
                                        data-placement="top" title="Tooltip on top" data-original-title="Tooltip on top"
                                        onclick="window.location='{{ url('admin/faq_edit_category', $value->id) }}'">
                                        <i class="cil-pencil"></i>
                                    </button>
                                    <a class="btn btn-danger" href="{{ url('admin/faq_delete_category', $value->id) }}" onclick="return confirm('Are you sure you want to delete this category?');">
                                        <i class="cil-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-center">FAQ Category list is empty</th>
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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
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
