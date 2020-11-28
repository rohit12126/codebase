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
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <!-- <th>Product</th>
                                    <th>User</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($approved as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->rating }}</td>
                                    <td>{{ $value->body }}</td>
                                    <!-- <td>4</td>
                                    <td>5</td> -->
                                    <td>
                                        <a class="btn btn-info" title="Approve This Review">
                                            <i class="cil-thumb-up"></i>
                                        </a>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this review?');" title="Delete">
                                            <i class="cil-trash"></i>
                                        </a>
                                    </td>
                                </tr>                       
                            @endforeach
                            </tbody>
                        </table>
                        {{ @$approved->links() }}
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
