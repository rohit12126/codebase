@extends('dashboard.base')

@section('css')

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
                                        <input type="text" placeholder="category name" name="name" class="form-control"
                                            required value="{{ @$category->name }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        @if(isset($category)) Update @else Submit @endif
                                    </button>
                                    @if(isset($category))
                                    <a href="{{route('admin.category')}}" class="btn btn-danger text-white">
                                        Cancel
                                    </a>
                                    @else
                                    <a onclick="$('.addForm').hide('slow');" class="btn btn-danger text-white">
                                        Cancel
                                    </a>
                                    @endif
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
                        <h4>Category List</h4>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary btn-sm pull-right" onclick="$('.addForm').show('slow');">
                            Create Category
                        </button>
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
                                    <button class="btn btn-info" type="button" data-toggle="tooltip"
                                        data-placement="top" title="Tooltip on top" data-original-title="Tooltip on top"
                                        onclick="window.location='{{ url('admin/edit_category', $value->id) }}'">
                                        <i class="cil-pencil"></i>
                                    </button>
                                    <a class="btn btn-danger" href="{{ url('admin/delete_category', $value->id) }}" onclick="return confirm('Are you sure you want to delete this category?');">
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