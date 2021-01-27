@extends('dashboard.base')

@section('css')
    
@endsection
<style>
.note-editor.note-frame.fullscreen{
    background: white;
}
</style>
@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb breadcrumb-custom border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.blog.list') }}">Blogs</a></li>
            <li class="breadcrumb-item active">@if(isset($blog)) Edit @else Add @endif Blog</li>
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
                        <h4>@if(isset($blog)) Edit @else Add @endif Blog</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-md-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Category</label>
                                        <span class="mandatory">*</span>
                                        <span title="Click here to add category">
                                            <a href="{{url('admin/blog-category')}}" style="text-decoration: none;">
                                                <i class="fa fa-plus category-add" ></i>
                                                <span class="text-success text-success font-weight-bold category-add-text">Click here to add category</span>
                                            </a>
                                        </span>
                                        <select class="form-control" id="select3" name="category_id">
                                            <option value="">Please select</option>
                                            @foreach($category_list as $key => $value)
                                                <option value="{{ $value->id }}" @if(isset($blog) && ($value->id == $blog->category_id) ) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="hidden" name="blogId" id="blog-id" value="@if (isset($blog->id)) {{ $blog->id }} @else {{ '0' }} @endif">
                                        <input type="text" maxlength="200" placeholder="Title" name="title" id="title" class="form-control" value="{{ old('title', @$blog->title) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control">
                                            <option @if (isset($blog->status) && $blog->status =='1') {{ "selected"}} @endif value="1">Active</option>
                                            <option @if (isset($blog->status) && $blog->status =='0') {{ "selected"}} @endif value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="moreImage">
                                        <label for="">Featured Image </label>
                                        <span class="mandatory">*</span>
                                            <div class="imagePreview" title=" This is Blog Image Preview">
                                                @if(isset($blog->image))
                                                    <img src="{{ url('') }}/upload/blog/{{ $blog->image }}" class="previewImage w-100 h-100" width="100" />
                                                    <input type="hidden"  name="storeimage" value="{{ $blog->image }}">
                                                @else
                                                    <img src="{{ url('/download.jpeg') }}" class="previewImage"/>
                                                @endif
                                            </div>
                                            <label class="btn btn-danger w-100" title="Change or Upload Image">
                                            <i class="cil-plus"></i> Upload
                                                <input type="file" name="image" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Upload Images Here">
                                            </label>
                                            <div class="image-error error-img"></div>
                                            @if($errors->has('image'))
                                                <div class="error error-img">{{ $errors->first('image') }}</div>
                                            @endif
                                        <div class="text-success text-success font-weight-bold">Only image type jpg/png/jpeg and max size 4MB is allowed</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group"> 
                                        <label>Content</label>
                                        <span class="mandatory">*</span>
                                        <textarea style="z-index:100"id="content" name="description" class="form-control summernote" required="true">{{ old('description', @$blog->description) }}</textarea>
                                        @if($errors->has('description'))
                                            <div class="error ">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                    <div class="d-flex mb-2">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0">
                                            Submit
                                        </button>
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                            Cancel
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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

{{-- Editor js--}}
 <!-- include Bootstrap and summernote css/js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

<style>
.ck-editor__editable {
    min-height: 200px;
}
</style>
<script>
    /* Editor */
    /* Image Preview */
    $(function() {
        $('.summernote').summernote({
            height: 200,
            popover: {
                image: [],
                link: [],
                air: []
            }
        });
        
        $(document).on("change",".uploadFile", function()
        {
            var files = !!this.files ? this.files : [];
            
            $('.image-error').html('');

            if (!files.length || !window.FileReader) return; 

            if (files[0].size > '4000000') { 
                $('.image-error').addClass("error");
                $('.image-error').html('Please upload a image less than 4MB size');
                return false;
            }
            
            if (files[0].type == 'image/jpeg' || files[0].type == 'image/png') {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.previewImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(files[0]);
            }else {
                $('.image-error').addClass("error");
                $('.image-error').html('Please upload a image with jpg/png/jpeg extension.');
                return false;
            }
        });
    });

    /* Form Validation */
    $("#myform").validate({
        rules: {
            category_id: {
                required: true
            },
            title: {
                required: true
            },
            description: {
                required: true
            } 
        },
        messages: {
            category_id: "Please select a category",
            title: "Please provide a title",
            description: "Please provide a description"
        },
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });
</script>
@endsection
