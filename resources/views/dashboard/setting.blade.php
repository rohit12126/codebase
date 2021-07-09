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
                        <h4>Web Settings</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                          @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="id" value="{{ old('id',@$setting->id) }}">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <span class="mandatory">*</span> 
                                        
                                        <input type="text" maxlength="150" placeholder="Contact Number" name="contact" value="{{ old('contact',@$setting->contact) }}" class="form-control" required autocomplete="off" />
                                        @if($errors->has('contact'))
                                            <div class="error ">{{ $errors->first('contact') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <span class="mandatory">*</span>
                                        <input type="email" maxlength="150" placeholder="Email" name="email" value="{{ old('email',@$setting->email) }}"  class="form-control" required autocomplete="off" />
                                        @if($errors->has('email'))
                                            <div class="error ">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="150" placeholder="Address" name="address" value="{{ old('address',@$setting->address) }}"  class="form-control" required autocomplete="off" />
                                        @if($errors->has('address'))
                                            <div class="error ">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                            </div>
                            <div class="col-6">
                                    <div class="form-group">
                                        <label>Facebook URL</label>
                                        <span class="mandatory">*</span> 
                                        <input type="text" maxlength="150" placeholder="Facebook URL" name="facebook_url" value="{{ old('facebook_url',@$setting->facebook_url) }}" class="form-control"  autocomplete="off" />
                                        @if($errors->has('facebook_url'))
                                            <div class="error ">{{ $errors->first('facebook_url') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter URL</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="150" placeholder="Twitter URL" name="twitter_url" value="{{ old('twitter_url',@$setting->twitter_url) }}"  class="form-control" autocomplete="off" />
                                        @if($errors->has('twitter_url'))
                                            <div class="error ">{{ $errors->first('twitter_url') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Pinterest URL</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="150" placeholder="Pinterest URL" name="pinterest_url" value="{{ old('pinterest_url',@$setting->pinterest_url) }}"  class="form-control" autocomplete="off" />
                                        @if($errors->has('pinterest_url'))
                                            <div class="error ">{{ $errors->first('pinterest_url') }}</div>
                                        @endif
                                    </div>
                            </div>
                      </div>
                      <div class="d-flex pt-4">
                          <button type="submit" class="btn btn-primary mr-4 mt-0">
                              Submit
                          </button>
                          <a onclick="history.go(-1)" class="btn btn-danger text-white">
                              Back
                          </a>
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
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
$.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            if (regexp.constructor != RegExp)
                regexp = new RegExp(regexp);
            else if (regexp.global)
                regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        },
        "Please check your input."
);

    $("#myform").validate({
        rules: {
            contact: {
                required: true,
                minlength: 8,
                maxlength: 18
            },
            email: {
                required: true,
                email : true
            }, 
            address: {
              required: true
            },
            facebook_url: {
              regex: /(?:http:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/
            },
            twitter_url: {
              regex: /(?:http:\/\/)?(?:www\.)?twitter\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/
            },
            pinterest_url: {
              regex: /(?:http:\/\/)?(?:www\.)?pinterest\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/
            }
        },
        messages: {
          contact: {
                required: "Please provide Contact Number.",
                minlength: "Contact Number must be atleast 8 digit",
                maxlength: "Contact Number must not exeed 15 digits"
            },
            email: {
              required: "Please provide a email",
              email: "Please provide a valid email"
            },
            address: "Please provide a address",
        },
        submitHandler: function(form) {
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
