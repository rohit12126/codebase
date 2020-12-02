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
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
</style>

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.product.list') }}">Products</a></li>
        <li class="breadcrumb-item active">@if(isset($product)) Edit @else Add @endif Product</li>
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
                        <h4>@if(isset($product)) Edit @else Add @endif Product</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Category</label>
                                        <span class="mandatory">*</span>
                                        <span>
                                            <a href="{{ route('admin.category') }}" style="text-decoration: none;">
                                                <i class="fa fa-plus category-add" title="Click here to add category"></i>
                                                <span class="text-success text-success font-weight-bold category-add-text">Click here to add category</span>
                                            </a>
                                        </span>
                                        <select class="form-control" id="select3" name="category_id" required title="Select a Catagory of product">
                                            <option value="0">Please select</option>
                                            @foreach($category_list as $key => $value)
                                            <option value="{{ $value->id }}" @if($value->id == @$product->category_id) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Product name" name="name" class="form-control" required value="{{ @$product->name }}" title="Name of product">
                                    </div>
                                    <div class="form-group">
                                        <label>Purchase Price</label>
                                        <input type="number" placeholder="Purchase Price" name="purchase_price" class="form-control" required value="{{ @$product->purchase_price }}" title="Enter Purchase price of product">
                                    </div>

                                    <div class="form-group">
                                        <label>Sale Price</label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Sale Price" name="sale_price" class="form-control" required value="{{ @$product->sale_price }}" title="Enter sale price of product">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea placeholder="Description" name="description" class="form-control" required title="Tell Custumers something about product" >{{ @$product->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control" title="Is product Active or Inactive ?">
                                            <option @if(@$product->status == 1) selected @endif value="1">Active</option>
                                            <option @if(@$product->status == 0 && @$product->status != null) selected @endif value="0">In-Active</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Is Accessory ?</label>
                                        <span class="mandatory">*</span>
                                        <select name="is_accessory" id="" class="form-control" title="Is Product Accessory ?">
                                            <option @if(@$product->is_accessory == 1) selected @endif value="1">Accessory</option>
                                            <option @if( @$product->is_accessory == 0 &&@$product->is_accessory != null) selected @endif value="0">Product</option>
                                        </select>
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
                                                <div class="imagePreview"style="background: url({{ url('') }}/upload/product/{{ $value->image }});"title="Product image preview" >
                                                </div>
                                            <label class="btn btn-primary" >
                                                Upload
                                            </label>
                                            <input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"title="Upload image here">
                                            @if($key > 0)
                                            <i class="fa fa-times del"></i>
                                            @endif
                                            </div>
                                            @endforeach
                                            <i class="fa fa-plus imgAdd" title="Click to add more images"></i>
                                        </div>
                                    </div>

                                        @else
                                    
                                        <br><div class="container">
                                        <div class="row">
                                            <div class="col-sm-4 imgUp">
                                                <div class="imagePreview" title="Product image preview">
                                                </div>
                                            <label class="btn btn-primary" title="Upload image here">
                                                Upload
                                            <input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Upload image here">
                                            </label>
                                            </div>
                                            <i class="fa fa-plus imgAdd" title="Click to add more images"></i>
                                            </div>
                                        </div>
                                        @endif
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<style>

</style>
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
$(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-4 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
        var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; 
        if (/^image/.test( files[0].type)){
            var reader = new FileReader(); 
            reader.readAsDataURL(files[0]);
 
            reader.onloadend = function(){
                uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>
<script>
    $.validator.addMethod("priceCheck", function (value, element, options)
    {
        console.log(value);
        console.log(element);
        console.log(options.data);
        //we need the validation error to appear on the correct element
        /* var targetEl = $('input[name="'+options.data+'"]'),
            bothEmpty = (value == targetEl.val() == ''); */

        //trigger error class on target input
        /* (bothEmpty) ? targetEl.addClass('error') : targetEl.removeClass('error');
        return !bothEmpty; */
    },
        "Friend's name and email required."
    );
    $("#myform").validate({
        /* onkeyup: true,
        rules: {
            "purchase_price": { "priceCheck": { data: "sale_price" } },
            "sale_price": { "priceCheck": { data: "purchase_price" } }             
        }, */
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
