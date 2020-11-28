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
                        <h4>@if(isset($product)) Edit @else Add @endif Product</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Categoty</label>
                                        <span class="mandatory">*</span>
                                        <select class="form-control" id="select3" name="category_id" required title="Select a Catagory of product">
                                            <option value="">Please select</option>
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
                                        <label>Stock Quantity</label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Stock Quantity" name="stock_qty" class="form-control" required value="{{ @$product->stock_qty }}" title="Enter Stock Quantity of product">
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
                                            <option @if(@$product->status == 0 && @$product->status != null) selected @endif value="0">In-Actice</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Is Accessory ?</label>
                                        <span class="mandatory">*</span>
                                        <select name="is_accessory" id="" class="form-control" title="Is product accessory ?">
                                            <option @if(@$product->is_accessory == 1) selected @endif value="1">Accessory</option>
                                            <option @if( @$product->is_accessory == 0 &&@$product->is_accessory != null) selected @endif value="0">Product</option>
                                        </select>
                                    </div>
                                    <div style="display: flex;flex-direction: row;">
                                        <button type="submit" class="btn btn-primary" title="Submit Product">
                                            Submit
                                        </button>
                                                
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white" style="margin-left: 10px;">
                                            Back
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
                                                <div class="imagePreview"style="background: url({{ url('') }}/upload/product/{{ $value->image }});"title=" This is Product Image Preview" >
                                                </div>
                                            <label class="btn btn-primary" >
                                                Upload
                                            </label>
                                            <input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"title="Upload Images Here">
                                            @if($key > 0)
                                            <i class="fa fa-times del"></i>
                                            @endif
                                            </div>
                                            @endforeach
                                        <i class="fa fa-plus imgAdd" title="U may add more images"></i>
                                        </div>
                                    </div>

                                        @else
                                          
                                    
                                        <br><div class="container">
                                        <div class="row">
                                            <div class="col-sm-4 imgUp">
                                                <div class="imagePreview" title=" This is Product Image Preview">
                                                </div>
                                            <label class="btn btn-primary" title="Upload Images Here">
                                                Upload
                                            <input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Upload Images Here">
                                            </label>
                                            </div>
                                            <i class="fa fa-plus imgAdd" title="U may add more images"></i>
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
    $("#myform").validate({
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
