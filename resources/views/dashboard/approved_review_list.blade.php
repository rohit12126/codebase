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
                        <div class="row">
                            <div class="col-10">
                                <h4>Aproved Review List</h4>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('admin.toaprooved') }}" class="btn btn-primary btn-sm pull-right">
                                    Non Aproved Review
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    @include('partials.alert_msg')
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
                                        <a href="{{ url('admin/review/disapprov', $value->id) }}" class="btn btn-info" title="DisApprove This Review" >
                                            <i class="cil-thumb-down"></i>
                                        </a>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this review?');" href="{{ url('admin/review/delete', $value->id) }}" title="Delete">
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

@endsection
