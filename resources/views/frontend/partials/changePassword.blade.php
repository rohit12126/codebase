<div class="card">
    <div class="card-header">
        <h3>Update Your Account Details</h3>
    </div>
    <div class="card-body">
        <p>Already have an account? <a href="#">Log in instead!</a></p>
        <form method="POST" id="form-change-password" role="form" method="POST" action="{{ url('/user/credentials') }}" novalidate >
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
                    <input required="" class="form-control @error('email') is-invalid @enderror" name="current-password" type="password">
                </div>
                <div class="form-group col-md-12">
                    <label>New Password <span class="required">*</span></label>
                    <input required="" class="form-control" name="password" type="password">
                </div>
                <div class="form-group col-md-12">
                    <label>Confirm Password <span class="required">*</span></label>
                    <input required="" class="form-control" name="password_confirmation" type="password">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
                </div>
            </div>
        </form>
</div>
</div>