<div class="card">
    <div class="card-header">
        <h3>Update Your Account Details</h3>
    </div>
    <div class="card-body">
             <form method="POST" action="{{ route('account.update') }}" id='account'>
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
                    <input required="" class="form-control" name="email" type="email"  value="{{ $user->email}}" readonly required>
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
                <input type="hidden" name="id" value="{{ $user->id }}" required>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

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
