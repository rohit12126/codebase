@extends('layouts.front')
@section('content')
<style>
.form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
}

.form-control:focus {
    border-color: #000;
    box-shadow: none;
}

.label {
    font-weight: 600;
}

.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}

.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}
</style>
<div class="main_content pb-5">

<!-- START SECTION CONTACT -->
<div class="section pb_70">
	<div class="container">
        <h1 class="pt-4 pb-4 mb-5 heading_s3 text-center">Contact Us</h1>
        <div class="row">
            <div class="col-xl-4 col-md-6">
            	<div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                    </div>
                    <div class="contact_text">
                        <span>Reach us at</span>
                        <p>{{$setting->address ?? '123 Street, Old Trafford, London, UK'}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
            	<div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-envelope-open"></i>
                    </div>
                    <div class="contact_text">
                        <span>Drop a mail</span>
                        <a href="mailto:{{$setting->email ?? 'help@customcloset.com'}}">{{$setting->email ?? 'help@customcloset.com'}} </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
            	<div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-tablet2"></i>
                    </div>
                    <div class="contact_text">
                        <span>Call Us</span>
                        <p><a href="tel:{{$setting->contact ?? '123 456 789'}}">{{$setting->contact ?? '123 456 789'}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CONTACT -->

<!-- START SECTION CONTACT -->
<div class="section pt-0 pb-5">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6">
            	<div class="heading_s1">
                	<h2>Get In touch</h2>
                    @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{Session::get('success')}}
                      </div>
                    @endif
                </div>
                <!-- <p class="leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p> -->
                <div class="field_form">
                    <form method="post" id="contactForm" action="{{ route('contact.store') }}">
                    @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input required="" placeholder="Enter Name *" id="first-name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" type="text">
                                @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                             </div>
                            <div class="form-group col-md-6">
                                <input required="" placeholder="Enter Phone No. *" id="phone" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone">
                                @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <input required="" placeholder="Enter Email *" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" type="email">
                                @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>                           
                            <div class="form-group col-md-12 ">
                                <div class="custom_select">
                                    <select name="reason" id="reason" class="form-control {{ $errors->has('reason') ? 'error' : '' }}">
                                        <option value="Basic Enquiry">Basic Enquiry</option>
                                        <option value="Order Related" @if(!empty($_GET['artrnr'])) selected @endif>Order Related</option>
                                        <option value="Issue Not Resolved">Issue Not Resolved</option>
                                        <option value="Feedback">Feedback</option>
                                    </select>
                                </div>
                                
                                @if ($errors->has('reason'))
                                <div class="error">
                                    {{ $errors->first('reason') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required="" placeholder="Message *" id="description" class="form-control {{ $errors->has('message') ? 'error' : '' }}"name="message" rows="4">@if(!empty($_GET['artrnr'])) I want to purchase Article nr : {{$_GET['artrnr']}} product, let me know when it will available! @endif</textarea>
                                @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-fill-out" id="submitButton" name="submit" value="Submit">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
            <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5530516678573!2d-73.41840868504845!3d40.74985924323634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e82b00493e8c33%3A0x7079f8e7893a8d11!2sCustom%20Door%20%26%20Mirror!5e0!3m2!1sen!2sin!4v1625057404690!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

   

</div>
<!-- END SECTION CONTACT -->
</div>
<script>



$(document).ready(function () {
$('#contactForm').validate({
    rules: {
        name: {
            required: true,
            minlength: 3,
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            digits: true,
            minlength: 8,
            maxlength: 15
        },
        message: {
            required: true,
            minlength: 15,
            maxlength: 400
        },
        reason: {
            required: true
        }
    }
});
});

</script>

@endsection
