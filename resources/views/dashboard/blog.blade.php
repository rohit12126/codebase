@extends('dashboard.base')

@section('css')
    
@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
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
                                <div class="col-6">
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
                                                <option @if (old('category_id') == $value->id) selected @endif value="{{ $value->id }}" @if(isset($blog) && ($value->id == $blog->category_id) ) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="hidden" name="blogId" id="blog-id" value="@if (isset($blog->id)) {{ $blog->id }} @else {{ '0' }} @endif">
                                        <input type="text" placeholder="Title" name="title" id="title" class="form-control" value="{{ old('title', @$blog->title) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>URL Slug</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Slug" name="slug" id="slug" class="form-control" value="{{ old('slug', @$blog->slug) }}" readonly="true">
                                    </div>
                                    <div class="form-group"> 
                                        <label>Body</label>
                                        <span class="mandatory">*</span>
                                        <textarea id="content" name="description" class="form-control" required="true">{{ old('description', @$blog->description) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control">
                                            <option @if (old('status') == 1) selected @endif @if (isset($blog->status) && $blog->status =='1') {{ "selected"}} @endif value="1">Active</option>
                                            <option @if (old('status') == 0) selected @endif @if (isset($blog->status) && $blog->status =='0') {{ "selected"}} @endif value="0">In-Active</option>
                                        </select>
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0">
                                            Submit
                                        </button>
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                            Cancle
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group" id="moreImage">
                                        <label for="">Blog Image </label>
                                        <span class="mandatory">*</span>
                                        <div class="col-sm-4 imgUp">
                                            <div class="imagePreview" title=" This is Blog Image Preview">
                                                
                                                @if(isset($blog->image))
                                                    <img src="{{ url('') }}/upload/blog/{{ $blog->image }}" class="previewImage w-100 h-100" width="100" />
                                                    <input type="hidden"  name="storeimage" value="{{ $blog->image }}">
                                                @else
                                                    <img src="{{ url('/download.jpeg') }}" class="previewImage w-100 h-100" width="100" />
                                                @endif
                                            </div>
                                            <label class="btn btn-primary" title="Upload Images Here">
                                                Upload
                                                <input type="file" name="image" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Upload Images Here">
                                            </label>
                                            <div class="image-error"></div>
                                        </div>
                                        <div class="text-success text-success font-weight-bold">Only image type jpg/png/jpeg and max size 4MB is allowed</div>
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

{{-- <script src="{{ asset('js/ckeditor.js') }}"></script> --}}
<script src="https://cdn.tiny.cloud/1/098a7fwykgj46lh6yvnoanltfdod66fvcthx2xkw2je9xzjv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<style>
.ck-editor__editable {
    min-height: 200px;
}
</style>
<script>
    /* Editor */
   /*  ClassicEditor
		.create( document.querySelector( '#content' ), {
            
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} ); */
    /* Image Preview */
    $(function() {
        
        tinymce.init({
            selector: '#content'
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

    /* Slug generation */
    $("#title").keyup(function() {
        var title = $(this).val();
        if($(this).val().length > 3) {
            var slug = generateSlug(title);
            $("#slug").val(slug);
        }
    });

    function generateSlug(title, recall = false) {
        var $slug = '';
        var trimmed = title.trim();
        
        $slug = trimmed.toLowerCase().replace(/[^a-z0-9-]/gi, '-').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');
        
        if (recall) {
            $slug = $slug + '-' + Math.floor(Math.random() * 90 + 10);
        }

        var isExist = checkExistSlug($slug);

        if (isExist) {
          $slug = generateSlug(title, true);
          return $slug;
        } 

        return $slug;
    }

    function checkExistSlug(slug) {
        
        var blogId = $("#blog-id").val();
        let isExist = false;
        jQuery.ajax({
            url: "{{ url('/admin/check-exist-slug/') }}",
            dataType: 'json',
            method: 'get',
            async: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                slug : slug,
                blogId : blogId
            },
            success: function(result) {
                if (result.status == true) {
                    isExist = true;
                }
            }
        });

        return isExist;
    }
</script>
@endsection
