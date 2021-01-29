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
        <li class="breadcrumb-item"><a href="{{ route('admin.matrix.list') }}">Pricing Matrix</a></li>
        <li class="breadcrumb-item active">@if(isset($pricingMatrix)) Edit @else Add @endif Pricing Matrix</li>
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
                        <h4>@if(isset($pricingMatrix)) Edit @else Add @endif Pricing Matrix</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" id="myform">
                            <div class="row">
                                <div class="col-md-6">
                                    @csrf
                                    <div class="form-group">
                                        <label>Product Family</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="200" placeholder="Product Family" name="product_family" class="form-control" value="{{ old('product_family', @$pricingMatrix->product_family) }}" >
                                        @if($errors->has('product_family'))
                                            <div class="error">{{ $errors->first('product_family') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Height</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Height" id="content" name="height" class="form-control" value="{{  old('height', @$pricingMatrix->height) }}">
                                        @if($errors->has('height'))
                                            <div class="error">{{ $errors->first('height') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Model</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="SKU" name="model" class="form-control" value="{{ old('model', @$pricingMatrix->model) }}" >
                                        @if($errors->has('model'))
                                            <div class="error">{{ $errors->first('model') }}</div>
                                        @endif
                                    </div>
                                        
                                    <div class="form-group">
                                    <label>UPC</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="UPC" name="upc" class="form-control" value="{{ old('upc', @$pricingMatrix->upc) }}" >
                                        @if($errors->has('upc'))
                                            <div class="error">{{ $errors->first('upc') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Type" name="type" class="form-control" value="{{ old('type', @$pricingMatrix->type) }}" >
                                        @if($errors->has('type'))
                                            <div class="error">{{ $errors->first('type') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Color Finish</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Color Finish" name="colorFinish" class="form-control" value="{{ old('colorFinish', @$pricingMatrix->colorFinish) }}" >
                                        @if($errors->has('colorFinish'))
                                            <div class="error">{{ $errors->first('colorFinish') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mirror</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Mirror" name="mirror" class="form-control" value="{{ old('mirror', @$pricingMatrix->mirror) }}" >
                                        @if($errors->has('mirror'))
                                            <div class="error">{{ $errors->first('mirror') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Unpackaged Weight</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Unpackaged Weight" name="unpackaged_weight" class="form-control" value="{{ old('unpackaged_weight', @$pricingMatrix->unpackaged_weight) }}" >
                                        @if($errors->has('unpackaged_weight'))
                                            <div class="error">{{ $errors->first('unpackaged_weight') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Optional Nu Of Panels</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Optional Nu Of Panels" name="optional_nu_of_panels" class="form-control" value="{{ old('optional_nu_of_panels', @$pricingMatrix->optional_nu_of_panels) }}" >
                                        @if($errors->has('optional_nu_of_panels'))
                                            <div class="error">{{ $errors->first('optional_nu_of_panels') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">MU</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="MU" name="mu" class="form-control" value="{{ old('mu', @$pricingMatrix->mu) }}" >
                                        @if($errors->has('mu'))
                                            <div class="error">{{ $errors->first('mu') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Number Of Pannel</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Number Of Pannel" name="bt_of_panels" class="form-control" value="{{ old('bt_of_panels', @$pricingMatrix->bt_of_panels) }}" >
                                        @if($errors->has('bt_of_panels'))
                                            <div class="error">{{ $errors->first('bt_of_panels') }}</div>
                                        @endif
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                <div class="form-group">
                                        <label>Cost <b>$</b></label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Cost" name="cost" class="form-control" value="{{ old('cost', @$pricingMatrix->cost) }}" >
                                        @if($errors->has('cost'))
                                            <div class="error">{{ $errors->first('cost') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Retail <b>$</b></label>
                                        <span class="mandatory">*</span>
                                        <input type="number" placeholder="Retail Price" name="retail" class="form-control" value="{{ old('retail', @$pricingMatrix->retail) }}" >
                                        @if($errors->has('retail'))
                                            <div class="error">{{ $errors->first('retail') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>B_or_S</label>
                                        <span class="mandatory">*</span>
                                        <select name="B_or_S" id="B_or_S" class="form-control" title="Is Bi Fold or Slider ?">
                                            <option @if(@$pricingMatrix->B_or_S == "B") selected @endif value="1">Bi Fold</option>
                                            <option @if(
                                                @$pricingMatrix->B_or_S == "S") selected @endif value="0">Slider</option>
                                        </select>
                                    </div>
                                        
                                    <div class="form-group">
                                    <label>Style</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Style" name="style" class="form-control" value="{{ old('style', @$pricingMatrix->style) }}" >
                                        @if($errors->has('style'))
                                            <div class="error">{{ $errors->first('style') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                    <label>Track</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Track" name="track" class="form-control" value="{{ old('track', @$pricingMatrix->track) }}" >
                                        @if($errors->has('track'))
                                            <div class="error">{{ $errors->first('track') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                    <label>New Track</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="New Track" name="new_track" class="form-control" value="{{ old('new_track', @$pricingMatrix->new_track) }}" >
                                        @if($errors->has('new_track'))
                                            <div class="error">{{ $errors->first('new_track') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                    <label>Assembled Height</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Assembled Height" name="assembled_height" class="form-control" value="{{ old('assembled_height', @$pricingMatrix->assembled_height) }}" >
                                        @if($errors->has('assembled_height'))
                                            <div class="error">{{ $errors->first('assembled_height') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">Thickness</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Thickness" name="thickness" class="form-control" value="{{ old('thickness', @$pricingMatrix->thickness) }}" >
                                        @if($errors->has('thickness'))
                                            <div class="error">{{ $errors->first('thickness') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label># Of Panels</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="# Of Panels" name="nu_of_panels" class="form-control" value="{{ old('nu_of_panels', @$pricingMatrix->nu_of_panels) }}" >
                                        @if($errors->has('nu_of_panels'))
                                            <div class="error">{{ $errors->first('nu_of_panels') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Width</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Width" name="width" class="form-control" value="{{ old('width', @$pricingMatrix->width) }}" >
                                        @if($errors->has('width'))
                                            <div class="error">{{ $errors->first('width') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Trim</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Trim" name="trim" class="form-control" value="{{ old('trim', @$pricingMatrix->trim) }}" >
                                        @if($errors->has('trim'))
                                            <div class="error">{{ $errors->first('trim') }}</div>
                                        @endif
                                    </div>
                                    </div>
                                </div>
                              
                                    <div class="form-group">
                                        <label>Description</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Description" name="description" class="form-control" value="{{ old('description', @$pricingMatrix->description) }}" >
                                        @if($errors->has('description'))
                                            <div class="error">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                    <div class="d-flex">
                                <button type="submit" class="btn btn-primary mr-4 mt-0" title="@if(@$pricingMatrix) Update @else Submit @endif" style="border-radius:0.25rem">
                                    @if(@$pricingMatrix) Update @else Submit @endif
                                </button>
                                        
                                <a href="{{route('admin.matrix.list')}}" class="btn btn-danger text-white"  title="Cancel">
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

@endsection

@section('javascript')
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

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
@endsection
