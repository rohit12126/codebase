@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.faq.list') }}">FAQ</a></li>
            <li class="breadcrumb-item active">@if(isset($faq)) Edit @else Add @endif  FAQ</li>
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
                        <h4> @if(isset($faq)) Edit @else Add @endif  FAQ</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Categoty</label>
                                        <span class="mandatory">*</span>
                                        <span title="Click here to add category">
                                            <a href="{{url('admin/faq-category')}}" style="text-decoration: none;">
                                                <i class="fa fa-plus category-add" ></i>
                                                <span class="text-success text-success font-weight-bold category-add-text">Click here to add category</span>
                                            </a>
                                        </span>
                                        <select class="form-control" id="select3" name="category_id" required>
                                            <option value="">Please select Or Create new</option>
                                            @foreach($category_list as $key => $value)
                                            <option value="{{ $value->id }}" @if($value->id == @$faq->category) selected @endif>{{$value->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Title" name="title" class="form-control" required value="{{ @$faq->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <span class="mandatory">*</span>
                                        <textarea placeholder="Description" name="description" class="form-control" required>{{ @$faq->body }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Please select</option>
                                            <option @if (isset($faq->status) && $faq->status =='1') {{ "selected"}} @endif value="1">Active</option>
                                            <option @if (isset($faq->status) && $faq->status =='0') {{ "selected"}} @endif value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary  mr-4 mt-0" title="@if(isset($faq)) Update @else Submit @endif">
                                        @if(isset($faq)) Update @else Submit @endif
                                        </button>
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white" title="Cancle">
                                            Cancle
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
</div>
</div>

@endsection
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

@section('javascript')
<script>
    $("#myform").validate({
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });

</script>
@endsection
