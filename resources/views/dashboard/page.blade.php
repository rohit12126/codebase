@extends('dashboard.base')

@section('css')

@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.page.list') }}">CMS</a></li>
            <li class="breadcrumb-item active">@if(isset($page)) Edit @else Add @endif Page</li>
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
                        <h4>@if(isset($page)) Edit @else Add @endif Page</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-12">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" placeholder="Title" name="title" class="form-control" required value="{{ @$page->title }}" title="Title of page">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content" rows="4" id="content" class="form-control" required >{{ @$page->content }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <span class="mandatory">*</span>
                                        <select name="status" id="" class="form-control" title="Is page Active or Inactive ?">
                                            <option @if(@$page->status == 1) selected @endif value="1">Active</option>
                                            <option @if(@$page->status == 0 && @$page->status != null) selected @endif value="0">InActive</option>
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
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>s

@section('javascript')
<script>
    $("#myform").validate({
        submitHandler: function(form) {
            // do other things for a valid form
            form.submit();
        }
    });

</script>
<script src="{{ asset('js/ckeditor.js') }}"></script>
<style>
.ck-editor__editable {
    min-height: 200px;
}
</style>
<script>
	ClassicEditor
		.create( document.querySelector( '#content' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
@endsection
