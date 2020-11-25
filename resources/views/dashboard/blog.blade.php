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
                        <h4>Blog @if(isset($blog)) Edit @else Add @endif </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-6">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select Categoty</label>
                                        <select class="form-control" id="select3" name="category_id" required>
                                            <option value="">Please select</option>
                                            @foreach($category_list as $key => $value)
                                            <option value="{{ $value->id }}" @if($value->id == @$blog->category_id) selected @endif>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" placeholder="Title" name="title" class="form-control" required value="{{ @$blog->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea placeholder="Description" name="description" class="form-control" required>{{ @$blog->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option @if(@$blog->status == 1) selected @endif value="1">Active</option>
                                            <option @if(@$blog->status == 0 && @$blog->status != null) selected @endif value="0">In-Actice</option>
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
                                        @if(isset($blog->image))
                                            <input id="file-input" type="file" name="image[{{ $value->id }}]" class="form-control" accept="image/*">
                                            <img src="{{ url('') }}/upload/blog/{{ $value->image }}" width="100" />
                                        @else
                                        <input id="file-input" type="file" name="image" class="form-control" accept="image/*" required>
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

@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $("#myform").validate({
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });

</script>
@endsection
