@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<style>
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
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
</style>

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb breadcrumb-custom border-0 m-0">
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
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-md-6">
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
                                                <option value="{{ $value->id }}" @if($value->id == @$product->category_id) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="200" placeholder="Name" name="name" class="form-control" value="{{ old('name', @$product->name) }}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Price In <b>$</b></label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Price" name="sale_price" class="form-control" value="{{ old('sale_price', @$product->sale_price) }}" >
                                        @if($errors->has('sale_price'))
                                            <div class="error">{{ $errors->first('sale_price') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group" id="per_foot">
                                        <label>Is Price per Foot ?</label>
                                        <input type="checkbox" name="per_foot" class="form-control" @if(@$product->per_foot == 1) checked @endif>
                                    </div>
                                    <div class="form-group" id="per_foot">
                                        <label>Minimum Cart Quantity ?</label>
                                        <span class="mandatory">*</span>
                                        <input type="number" id="min_cart_qty" name="min_cart_qty" class="form-control" value="{{ old('min_cart_qty', @$product->min_cart_qty) }}">
                                        @if($errors->has('min_cart_qty'))
                                            <div class="error">{{ $errors->first('min_cart_qty') }}</div>
                                        @endif
                                    </div>
                                    {{--<div class="form-group">
                                        <label>Cart Limit</label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Cart limit" name="max_cart_qty" class="form-control" value="{{ old('max_cart_qty', @$product->max_cart_qty) }}" >
                                        @if($errors->has('max_cart_qty'))
                                            <div class="error">{{ $errors->first('max_cart_qty') }}</div>
                                        @endif
                                    </div>--}}
                                        
                                    <div class="form-group">
                                    <label>SKU Number</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="SKU Number" name="sku" class="form-control" value="{{ old('sku', @$product->sku) }}" >
                                        @if($errors->has('sku'))
                                            <div class="error">{{ $errors->first('sku') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">Is Hardware ?</label>
                                        <span class="mandatory">*</span>
                                        <select name="is_accessory" id="is_accessory" class="form-control" title="Is Hardware ?">
                                            <option @if(@$product->is_accessory == 1) selected @endif value="1">Hardware</option>
                                            <option @if(
                                                @$product->is_accessory == 0) selected @endif value="0">Product</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="configure_id">
                                        <label>Configure Id</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" required placeholder="Roomlie Configure Id" name="configure_id" class="form-control" value="{{ old('configure_id', @$product->configure_id) }}" >
                                        @if($errors->has('configure_id'))
                                            <div class="error">{{ $errors->first('configure_id') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group" id="weight">
                                        <label>Weight in LB</label>
                                        <span class="mandatory">*</span>
                                        <input type="number" required placeholder="Product Weight in LB" name="weight" class="form-control" value="{{ old('weight', @$product->weight) }}" >
                                        @if($errors->has('weight'))
                                            <div class="error">{{ $errors->first('weight') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control" title="Is item Active or Inactive ?">
                                            <option @if(@$product->status == 1) selected @endif value="1">Active</option>
                                            <option @if(@$product->status == 0)  selected @endif value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label for="">Image <span class="mandatory">*</span></label>
                                    <div id="moreImage">
                                        <div class="row">
                                            @if(isset($product->images) && count(@$product->images) > 0)
                                            @foreach($product->images as $key => $value)
                                            <div class="col-sm-4 imgUp">
                                                <div class="imagePreview"style="background-image: url({{ url('') }}/upload/product/{{ $value->image }});"title="Item image preview" >
                                                </div>
                                                <input type="file" name="image[]" required class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Only image type jpg/png/jpeg is allowed">
                                                <input type="hidden" placeholder="Stock Quantity" name="storeimage[{{ $value->id }}]" class="form-control" required value="{{ $value->id }}">
                                                <i class="fa fa-times del"></i>
                                            </div>
                                            @endforeach
                                            <div class="imgAdd d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="right" title="Click to add more images">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            @else
                                            <br>
                                                <div class="col-sm-4 imgUp">
                                                    <div class="imagePreview" title="Item image preview">
                                                        <img src="{{ url('/download.jpeg') }}" class="previewImage0 w-100 h-100" width="100" />
                                                    </div>
                                                    <label class="btn btn-danger"  title="Only image type jpg/png/jpeg is allowed">
                                                        Upload
                                                    <input type="file" name="image[]" required class="uploadFile img" id="0" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" title="Only image type jpg/png/jpeg is allowed">
                                                    </label>
                                                    <div class="image-error0 error-img"></div>
                                                </div>
                                                <div class="imgAdd d-flex align-items-center justify-content-center">
                                                    <i class="fa fa-plus" title="Click to add more images"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="image-error error-img"></div>
                                    @if($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                    @endif
                                    <div class="text-success text-success font-weight-bold">Only image type jpg/png/jpeg and max size 4MB is allowed</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label>Description</label>
                                        <span class="mandatory">*</span>
                                        <textarea placeholder="Description" id="content" name="description" class="form-control summernote"  title="Tell Custumers something about item" >{{  old('description', @$product->description) }}</textarea>
                                        @if($errors->has('description'))
                                            <div class="error">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                    <div class="d-flex">
                                <button type="submit" class="btn btn-primary mr-4 mt-0" title="@if(@$product) Update @else Submit @endif" style="border-radius:0.25rem">
                                    @if(@$product) Update @else Submit @endif
                                </button>
                                        
                                <a onclick="history.go(-1)" class="btn btn-danger text-white"  title="Cancel">
                                    Cancel
                                </a>
                            </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

@endsection

@section('javascript')
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<script>
    function somejs(){
    if ( $('#is_accessory').val() == 1 )
        {
        $('#configure_id').css('display','none');
        $('#weight').css('display','block');
        $('#per_foot').css('display','block');
        $('#min_cart_qty').css('display','block');
        }
    else if ( $('#is_accessory').val() == 0)
    {
        $('#configure_id').css('display','block');
        $('#weight').css('display','none');
        $('#per_foot').css('display','none');
        $('#min_cart_qty').css('display','none');

    }
    }
    somejs();
    $('select').on('change', function() {
    somejs();
    });
</script>
{{-- Editor js--}}

<!-- include Bootstrap and summernote css/js -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
 
<script>

var imgClickCount = 0;
$(".imgAdd").click(function(){
  imgClickCount++;
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-4 imgUp"><div class="imagePreview"><img src="{{ url('/download.jpeg') }}" class="previewImage'+imgClickCount+' w-100 h-100" width="100" /></div><label class="btn btn-primary">Upload<input type="file" name="image[]" required class="uploadFile img" id="'+imgClickCount+'" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label><i class="fa fa-times del"></i><div class="image-error'+imgClickCount+' error-img"></div></div>');
});

$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});

$(function() {
    $('.summernote').summernote({
            height: 200,
            popover: {
                image: [],
                link: [],
                air: []
            }
    });

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
                
                reader.onloadend = function(e){
                    $('.previewImage'+id).attr('src', e.target.result);
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
                min: 0,
                required: true
            },
            sku: {
                required: true,
                minlength: 2,
                maxlength: 20
            }
        },
        messages: {
            category_id: "Please select a category",
            name: "Please provide a Name",
            sale_price: "Please provide Valid Price",
            sku: {
                required: "SKU number is required.",
                minlength: "SKU number must be atleast 2 digit",
                maxlength: "SKU number must not exeed 20 digits"
            }
            // max_cart_qty: "Please provide Valid Qty"
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
