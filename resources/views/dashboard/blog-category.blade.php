@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.blog.list') }}">Blogs</a></li>
            <li class="breadcrumb-item active">Blog Category</li>
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
                        <h4> @if(isset($category)) Edit @else Create @endif Blog Category</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Blog Category Name</label>
                                        <input type="text" maxlength="150" placeholder="Blog category name" name="name" class="form-control"
                                            required value="{{ @$category->name }}">
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
                                        
                                        @if(isset($category)) 
                                            <a href="{{route('admin.blog.category')}}" class="btn btn-danger text-white">
                                                Cancel
                                            </a>
                                        @else 
                                            <a href="{{route('admin.blog.category')}}" class="btn btn-danger text-white">
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
                                        <a href="{{route('admin.blog.category')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                            <i class="cil-reload"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if(!isset($category)) 
                        <div class="col-md-3 d-flex align-items-end justify-content-md-end mt-3 mt-md-0">
                            <button class="btn btn-danger mt-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Add New Blog Category" title="" onclick="$('.addForm').show('slow');">
                                <i class="cil-plus"></i> Create Blog Category
                            </button>
                        </div>
                    @endif
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
                                <tr @if($value->status == 1) class="table-success" @endif>                                
                                    <td>{{ $key+1 + ( (($_GET['page'] ?? 1) - 1 ) * 10 ) }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <button class="btn btn-info" type="button" data-toggle="tooltip"
                                            data-placement="top" title="Edit" data-original-title="Tooltip on top"
                                            onclick="window.location='{{ url('admin/blog_edit_category', $value->id) }}'">
                                            <i class="cil-pencil"></i>
                                        </button>
                                        <a class="btn btn-danger" href="{{ url('admin/blog_delete_category', $value->id) }}" onclick="return confirm('Are you sure you want to delete this category?');">
                                            <i class="cil-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tfoot>
                                <tr>
                                <th colspan="6" class="text-center"><img src="{{ url('') }}/upload/product/empty-list.jpg" alt="Blog Category list is empty"></th>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                    {{ @$category_list->links() }}
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
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<script>
    $('.addForm').hide();
    $("#myform").validate({
        
        submitHandler: function (form) {
            
            form.submit();
        }
    });
    @if (isset($category)) $('.addForm').show(); @endif

</script>
@endsection
