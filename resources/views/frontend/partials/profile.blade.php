<div class="card form-test-design">
    <div class="card-header">
        <h3>Update your account details</h3>
    </div>
    <div class="card-body">
             <form method="POST" action="{{ route('account.update') }}" id='account' class="user-account-form">
             @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Name <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="name" type="text"  value="{{ $user->name}}" required autofocus>
                </div>
                <div class="form-group col-md-12">
                    <label>Email Address <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="email" type="email" data-tooltip="I’m the tooltip text." value="{{ $user->email}}" @if($user->email) readonly @endif required>
                    @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label>Mobile <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="mobile" type="tel"  value="{{ $user->mobile}}" required>
                    @if($errors->has('mobile'))
                        <div class="error">{{ $errors->first('mobile') }}</div>
                    @endif
                </div>
                @if(empty($user->password))
                <div class="form-group col-md-12">
                    <label>Create Password <span class="mandatory">*</span></label>
                    <input required class="form-control" name="password" type="password" min="8">
                    @if($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label>Confirm Password <span class="mandatory">*</span></label>
                    <input required class="form-control"  name="password_confirmation" type="password" min="8">
                    @if($errors->has('password_confirmation'))
                    <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>
                @endif
                <input type="hidden" name="id" value="{{ $user->id }}" required>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<script>
    /* Account validation functionality */
    jQuery("#account").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 14
            }
        },
        messages: {
            name: {
                required: "Name field is required.",
            },
            email: "Please enter a valid email address",
            mobile: "Please enter a valid mobile number"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>
