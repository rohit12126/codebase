<div class="card">
    <div class="card-header">
        <h3>Update Your Account Details</h3>
    </div>
    <div class="card-body">
             <form method="POST" action="{{ route('account.update') }}">
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
                    <input required="" class="form-control" name="email" type="email"  value="{{ $user->email}}" required>
                </div>
                <div class="form-group col-md-12">
                    <label>Mobile <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="mobile" type="tel"  value="{{ $user->mobile}}" required>
                </div>
                <input type="hidden" name="id" value="{{ $user->id }}" required>
                <!-- <div class="form-group col-md-12">
                    <label>Current Password <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="password" type="password">
                </div>
                <div class="form-group col-md-12">
                    <label>New Password <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="npassword" type="password">
                </div>
                <div class="form-group col-md-12">
                    <label>Confirm Password <span class="mandatory">*</span></label>
                    <input required="" class="form-control" name="cpassword" type="password">
                </div> -->
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>