@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<style>
.imagePreview {
    width: 100%;
    height: 90px;
    background-position: center center;
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:18px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
</style>

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.item.list') }}">Items</a></li>
        <li class="breadcrumb-item active">@if(isset($product)) Edit @else Add @endif Item</li>
        </ol>
    </div>
@endsection
<div class="container-fluid">
    <div class="fade-in">

        @include('partials.alert_msg')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@if(isset($product)) Edit @else Add @endif Item</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Category<span class="mandatory">*</span></label>
                                        <span title="Click here to add category">
                                            <a href="{{ route('admin.category') }}" style="text-decoration: none;">
                                                <i class="fa fa-plus category-add" ></i>
                                                <span class="text-success text-success font-weight-bold category-add-text">Click here to add category</span>
                                            </a>
                                        </span>
                                        <select class="form-control" id="select3" name="category_id" required="true">
                                            <option value="">Please select</option>
                                            @foreach($category_list as $key => $value)
                                                <option value="{{ $value->id }}" @if (old('category_id') == $value->id) selected @endif  @if($value->id == @$product->category_id) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Name" name="name" class="form-control" value="{{ old('name', @$product->name) }}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Price" name="sale_price" class="form-control" value="{{ old('sale_price', @$product->sale_price) }}" >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control" title="Is item Active or Inactive ?">
                                            <option @if (old('status') == 1) selected @endif @if(@$product->status == 1) selected @endif value="1">Active</option>
                                            <option @if (old('status') == 0) selected @endif @if(@$product->status == 0 && @$product->status != null) selected @endif value="0">In-Active</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Is Accessory ?</label>
                                        <span class="mandatory">*</span>
                                        <select name="is_accessory" id="" class="form-control" title="Is Item Accessory ?">
                                            <option @if (old('is_accessory') == 1) selected @endif @if(@$product->is_accessory == 1) selected @endif value="1">Accessory</option>
                                            <option @if (old('is_accessory') == 0) selected @endif @if( @$product->is_accessory == 0 &&@$product->is_accessory != null) selected @endif value="0">Product</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea placeholder="Description" name="description" class="form-control"  title="Tell Custumers something about item" >{{  old('is_accessory', @$product->description) }}</textarea>
                                    </div>

                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0" title="@if(@$product) Update @else Submit @endif" style="border-radius:0.25rem">
                                            @if(@$product) Update @else Submit @endif
                                        </button>
                                                
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white" title="Cancle">
                                            Cancle
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group" id="moreImage">
                                     <div class="container">
                                        <div class="row">
                                        @if(isset($product->images) && count(@$product->images) > 0)
                                        @foreach($product->images as $key => $value)
                                            <div class="col-sm-4 imgUp">
                                                <div class="imagePreview"style="background: url({{ url('') }}/upload/product/{{ $value->image }});"title="Item image preview" >
                                                </div>
                                                <label class="btn btn-primary" >Upload</label>
                                                <input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Only image type jpg/png/jpeg is allowed">
                                                <input type="hidden" placeholder="Stock Quantity" name="storeimage[{{ $value->id }}]" class="form-control" required value="{{ $value->id }}">
                                                <i class="fa fa-times del"></i>
                                            </div>
                                            @endforeach
                                            <i class="fa fa-plus imgAdd" title="Click to add more images"></i>
                                        </div>
                                    </div>

                                        @else
                                    
                                        <br><div class="container">
                                        <div class="row">
                                            <div class="col-sm-4 imgUp">
                                                <div class="imagePreview" title="Item image preview">
                                                </div>
                                                <label class="btn btn-primary" title="Only image type jpg/png/jpeg is allowed">
                                                    Upload
                                                <input type="file" name="image[]" required class="uploadFile img" id="0" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Only image type jpg/png/jpeg is allowed">
                                                </label>
                                                <div class="image-error0"></div>
                                            </div>
                                            <i class="fa fa-plus imgAdd" title="Click to add more images"></i>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="image-error"></div>
                                    @if($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                    @endif
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>

var imgClickCount = 0;
$(".imgAdd").click(function(){
  imgClickCount++;
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-4 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" name="image[]" required class="uploadFile img" id="'+imgClickCount+'" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label><i class="fa fa-times del"></i><div class="image-error'+imgClickCount+'"></div></div>');
});
$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function() {
        var uploadFile = $(this);
        var id = $(this).attr("id");
        var files = !!this.files ? this.files : [];
        $('.image-error'+id).html('');
        if (!files.length || !window.FileReader) return; 
        
        if (files[0].size > '4000000') { 
            $('.image-error'+id).addClass("error");
            $('.image-error'+id).html('Please upload a image less than 4MB size');
            return false;
        }

        if (files[0].type == 'image/jpeg' || files[0].type == 'image/png') {
        
            if (/^image/.test( files[0].type)) {
                var reader = new FileReader(); 
                reader.readAsDataURL(files[0]);
                
                reader.onloadend = function(){
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }
        } else {
            $('.image-error'+id).addClass("error");
            $('.image-error'+id).html('Please upload a image with jpg/png/jpeg extension.');
            return false;
        }
    });
});
</script>
<script>
    $("#myform").validate({
        rules: {
            category_id: {
                required: true
            },
            name: {
                required: true
            },
            sale_price: {
                required: true
            }
        },
        messages: {
            category_id: "Please select a category",
            name: "Please provide a Name",
            sale_price: "Please provide a Price"
        },
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });
</script>
<script>
    function addMore() {
        document.getElementById('moreImage').innerHTML += '<div><hr><input id="file-input" type="file" name="image[]" class="form-control mb-2" onchange="openFile(event)" accept="image/*"><bottun class="btn btn-danger btn-sm" onclick="return this.parentNode.remove();">-</button><img id="output"><div>';
    }
</script>

@endsection
