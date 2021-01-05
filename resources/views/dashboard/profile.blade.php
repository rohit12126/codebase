@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">

        @include('partials.alert_msg')
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-12">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <span class="mandatory">*</span> 
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input type="text" maxlength="150" placeholder="Name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required autocomplete="off" />
                                        @if($errors->has('name'))
                                            <div class="error ">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <span class="mandatory">*</span>
                                        <input type="email" readonly maxlength="150" placeholder="Email" name="email" value="{{ old('email', $user->email) }}"  class="form-control" required autocomplete="off" />
                                        @if($errors->has('email'))
                                            <div class="error ">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0">
                                            Submit
                                        </button>
                                        <!-- <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                            Back
                                        </a> -->
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Change Password</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.change.password') }}" enctype="multipart/form-data" id="passwordform">
                            <div class="row">
                                <div class="col-12">
                                    @csrf
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <span class="mandatory">*</span>
                                        <input type="password" maxlength="150" placeholder="Current Password" name="current_password" class="form-control" required autocomplete="off" />
                                        @error('current_password')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                    <div class="form-group col-6">
                                        <label>New Password</label>
                                        <span class="mandatory">*</span>
                                        <input type="password" maxlength="150" placeholder="New Password" name="new_password" id="new_password" class="form-control" required autocomplete="off" />
                                        @error('new_password')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Confirm Password</label>
                                        <span class="mandatory">*</span>
                                        <input type="password" maxlength="150" placeholder="Confirm Password" name="confirm_password" class="form-control" required autocomplete="off" />
                                        @error('confirm_password')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0">
                                            Submit
                                        </button>
                                        <!-- <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                            Back
                                        </a> -->
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
</div>

@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $("#myform").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true
            } 
        },
        messages: {
            name: "Please provide a name",
            email: "Please provide a email",
        },
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });
    $("#passwordform").validate({
        rules: {
            new_password : {
            minlength : 5,
            },
            confirm_password : {
                minlength : 5,
                equalTo : "#new_password"
            }
        },
        messages: {
            confirm_password: "password and confirm password must be same"
        },
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });
</script>

@endsection
