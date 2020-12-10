@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user') }}">Users</a></li>
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
                        <h4>@if(isset($user)) Edit @else Create @endif User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" placeholder="Name" name="name" class="form-control" required value="{{ old('name') ? old('name') : @$user->name }}">
                                        @error('name')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" placeholder="Email" name="email" class="form-control" required value="{{ old('email') ? old('email') : @$user->email }}">
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex pt-2" >
                                        <button type="submit" class="btn btn-primary  mt-0 mr-3">
                                            @if(isset($user)) Update @else Submit @endif
                                        </button>
                                        @if(isset($user))
                                            <a href="{{route('admin.user')}}" title="Cancle" class="btn btn-danger text-white">
                                                Cancel
                                            </a>
                                        @else 
                                            <a onclick="$('.addForm').hide('slow');" class="btn btn-danger text-white">
                                                Cancel
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" placeholder="Mobile" name="mobile" class="form-control" required value="{{ old('mobile') ? old('mobile') : @$user->mobile }}">
                                        @error('mobile')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" name="password" class="form-control" @if(!@$user) required @endif value="">
                                        @if(@$user) <span class="text-warning font-weight-bold">Leave blank if don't want to change</span> @endif

                                        @error('password')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
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
                                            <div class="col-4">
                                                <div class="form-group">
                                                <label>Search via Email</label>
                                                <input type="text" placeholder="Email" name="email"
                                                    class="form-control" value="{{ @$_GET['email'] }}">
                                                </div>
                                            </div>
                                            <div class="col-4 d-flex align-items-center pt-2">
                                                <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.user')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-2">
                                {{-- @if(!isset($category)) --}}
                                <button class="btn btn-primary btn-sm pull-right" onclick="$('.addForm').show('slow');" title="Create New Usere Here">
                                    Create User
                                </button>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Proxy Login</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user_list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->mobile }}</td>
                                    <td>
                                        <a class="btn btn-block btn-outline-success" href="{{ url('admin/user_login', $value->id) }}" target="_blank" title="Go to User Account">
                                            Login as {{ ucwords($value->name) }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ url('admin/edit_user', $value->id) }}" title="Edit">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ url('admin/delete_user', $value->id) }}" onclick="return confirm('Are you sure you want to delete this user?');" title="Delete">
                                            <i class="cil-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ @$user_list->appends(request()->query())->links() }}
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
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });
    @if(isset($user)) $('.addForm').show();
    @endif
    @if(count(@$errors) > 0) $('.addForm').show();
    @endif

</script>


@endsection
