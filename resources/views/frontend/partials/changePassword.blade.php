<div class="card">
    <div class="card-header">
        <h3>Update Your Account Details</h3>
    </div>
    <div class="card-body">
        <p>Already have an account? <a href="#">Log in instead!</a></p>
        <form method="POST" id="form-change-password" role="form" method="POST" action="{{ url('/user/credentials') }}" >
             @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            <div class="row">
            @if(session()->has('error'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
             
               
                <div class="form-group col-md-12">
                    <label>Current Password <span class="required">*</span></label>
                    <input required class="form-control @if($errors->has('currentPassword') is-invalid @endif" name="currentPassword" type="password" min="8">
                    @if($errors->has('currentPassword'))
                    <div class="error">{{ $errors->first('currentPassword') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label>New Password <span class="required">*</span></label>
                    <input required class="form-control @if($errors->has('password') is-invalid @endif" name="password" type="password" min="8">
                    @if($errors->has('password'))
                    <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label>Confirm Password <span class="required">*</span></label>
                    <input required class="form-control @if($errors->has('password_confirmation') is-invalid @endif"  name="password_confirmation" type="password" min="8">
                    @if($errors->has('password_confirmation'))
                    <div class="error">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
                </div>
            </div>
        </form>
</div>
</div>