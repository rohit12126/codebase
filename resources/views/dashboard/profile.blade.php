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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <span class="mandatory">*</span> 
                                        <input type="hidden" name="id" value="">
                                        <input type="text" maxlength="150" placeholder="Name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required autocomplete="off" />
                                        @if($errors->has('name'))
                                            <div class="error ">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <span class="mandatory">*</span>
                                        <input type="email" maxlength="150" placeholder="Email" name="email" value="{{ old('email', $user->email) }}"  class="form-control" required autocomplete="off" />
                                        @if($errors->has('email'))
                                            <div class="error ">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0">
                                            Submit
                                        </button>
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                            Back
                                        </a>
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
</script>

@endsection
