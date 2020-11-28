@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Review List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blog_list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>
                                        <img src="{{ url('') }}/upload/blog/{{ @$value->image}}" width="50" />
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ url('admin/edit_blog', $value->id) }}" title="Edit">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ url('admin/delete_blog', $value->id) }}" onclick="return confirm('Are you sure you want to delete this blog?');" title="Delete">
                                            <i class="cil-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{-- @if(@!$_POST) --}}
                        {{ @$blog_list->links() }}
                            
                        {{-- @endif --}}
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
<script>
$('.page-link').click(function(e){
    e.preventDefault();
    $('#page').val($(this).text());
    $('form').submit();
});
</script>
@endsection
