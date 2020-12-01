@extends('dashboard.base')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">

        @include('partials.alert_msg')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@if(isset($blog)) Edit @else Add @endif Blog</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Categoty</label>
                                        <span class="mandatory">*</span>
                                        <select class="form-control" id="select3" name="category_id" required>
                                            <option value="">Please select</option>
                                            @foreach($category_list as $key => $value)
                                            <option value="{{ $value->id }}" @if($value->id == @$blog->category_id) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Title" name="title" class="form-control" required value="{{ @$blog->title }}">
                                    </div>
                                    <div class="form-group"> 
                                        <label>Description</label>
                                        <span class="mandatory">*</span>
                                        <textarea placeholder="Description" name="description" class="form-control" required>{{ @$blog->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control">
                                            <option @if (isset($blog->status) && $blog->status =='1') {{ "selected"}} @endif value="1">Active</option>
                                            <option @if (isset($blog->status) && $blog->status =='0') {{ "selected"}} @endif value="0">In-Active</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                        Back
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="form-group" id="moreImage">
                                        <label for="">Blog Image </label>
                                        <span class="mandatory">*</span>
                                        <div class="col-sm-4 imgUp">
                                            <div class="imagePreview" title=" This is Blog Image Preview">
                                                
                                                @if(isset($blog->image))
                                                    <img src="{{ url('') }}/upload/blog/{{ $blog->image }}" class="previewImage" width="100" />
                                                    <input type="hidden"  name="storeimage" value="{{ $blog->image }}">
                                                @else
                                                    <img src="{{ url('/download.jpeg') }}" class="previewImage" width="100" />
                                                @endif
                                            </div>
                                            <label class="btn btn-primary" title="Upload Images Here">
                                                Upload
                                                <input type="file" name="image" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Upload Images Here">
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group" id="moreImage">
                                        <label for="">Blog Category </label><br>
                                        <a class="btn btn-primary  text-white" href={{url('admin/blog-category')}}>
                                            Jump to Blog Category Section
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
$(function() {
    $(document).on("change",".uploadFile", function()
    {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.previewImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>

<script>
    $("#myform").validate({
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });

</script>
@endsection
