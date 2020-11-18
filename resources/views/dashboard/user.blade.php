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
                        <h4>Create User</h4>
                    </div>
                    <div class="card-body">
                        @include('partials.alert_msg')
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" placeholder="Name" name="name" class="form-control" required value="{{ @$user->name }}">
                                        @error('name')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" placeholder="Email" name="email" class="form-control" required value="{{ @$user->email }}">
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" placeholder="Mobile" name="mobile" class="form-control" required value="{{ @$user->mobile }}">
                                        @error('mobile')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" placeholder="Password" name="password" class="form-control" @if(!@$user) required @endif value="">
                                        @if(@$user) <span class="text-danger">Leave blank if don't want to change</span> @endif

                                        @error('password')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                        Back
                                    </a>
                                </div>
                                {{-- <div class="col-6">
                                    <div class="form-group" id="moreImage">
                                        <label for="">User Image <span class="btn btn-primary btn-sm" id="addMore" onclick="addMore()">Add More</span> </label>
                                        @if(isset($product->images) && count(@$user->images) > 0)
                                        @foreach($product->images as $key => $value)
                                        @if($key > 0) <div><hr> @endif
                                        <input id="file-input" type="file" name="image[{{ $value->id }}]" class="form-control" accept="image/*">
                                <input type="hidden" placeholder="Stock Quantity" name="storeimage[{{ $value->id }}]" class="form-control" required value="{{ $value->id }}">
                                <img src="{{ url('') }}/upload/product/{{ $value->image }}" width="100" />
                                @if($key > 0)
                                <bottun class="btn btn-danger btn-sm" onclick="return this.parentNode.remove();">-</button>
                            </div>
                            @endif

                            @endforeach
                            @else
                            <input id="file-input" type="file" name="image[]" class="form-control" accept="image/*" required>
                            @endif
                    </div>
                </div> --}}
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
                <h4>User List</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
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
                                <a class="btn btn-info" href="{{ url('admin/edit_user', $value->id) }}">
                                    <i class="cil-description"></i>
                                </a>
                                <a class="btn btn-danger" href="{{ url('admin/delete_user', $value->id) }}" onclick="return confirm('Are you sure you want to delete this user?');">
                                    <i class="cil-trash"></i>
                                </a>
                                <a class="btn btn-block btn-outline-success" href="{{ url('admin/user_login', $value->id) }}" target="_blank">
                                    Login as {{ ucwords($value->name) }}
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
    function addMore() {
        document.getElementById('moreImage').innerHTML += '<div><hr><input id="file-input" type="file" name="image[]" class="form-control mb-2" accept="image/*"><bottun class="btn btn-danger btn-sm" onclick="return this.parentNode.remove();">-</button><div>';
    }

</script>

@endsection
