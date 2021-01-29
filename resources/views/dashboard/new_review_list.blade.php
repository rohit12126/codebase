@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }
</style>
@endsection

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item">Reviews</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row position-relative">
                            <div class="col-xl-9">
                                <h4 class="mb-3">Non Approved Review List</h4>
                                <form method="GET" action="{{ url()->current() }}">
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="form-group">
                                                <label>Search via Item Name</label>
                                                <input type="text" placeholder="Item Name" maxlength="200" name="product_name"
                                                    class="form-control" value="{{ @$_GET['product_name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="form-group">
                                                <label>Search via User Name</label>
                                                <input type="text" placeholder="User Name" maxlength="200" name="user_name"
                                                    class="form-control" value="{{ @$_GET['user_name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="form-group mb-sm-0">
                                                <label>Search via Review</label>
                                                <input type="text" placeholder="Review" maxlength="200" name="review"
                                                    class="form-control" value="{{ @$_GET['review'] }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3 d-flex align-items-end align-items-xl-center pt-2">
                                                <button type="submit" title="Search" class="btn btn-primary mr-1 mr-sm-2 mt-0 custom-tooltip">
                                                    <span class="custom-tooltiptext custom-tooltip-top ">Search Review</span>
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{route('admin.toaprooved')}}" title="Reset Filters"  class="btn btn-danger text-white custom-tooltip">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Reset Review Search</span>
                                                    <i class="cil-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            <div class="col-xl-3 d-flex align-items-end justify-content-xl-end">
                                <div class="position-managed-btn-lg">
                                    <a href="{{ route('admin.aprooved') }}" class="btn btn-danger custom-tooltip mb-xl-3">
                                        <span class="custom-tooltiptext custom-tooltip-top">View Non Approved Review</span>
                                        Approved Review
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    @include('partials.alert_msg')
                        <div class="overflow-auto table-responsive mb-2">
                            <table class="table table-striped table-bordered datatable">
                                @if($approved->isNotEmpty())
                                    <div class="table-swipe-indicator"></div>
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S No.</th>
                                            <th>Rating</th>
                                            <th>Review</th>
                                            <th>Item</th>
                                            <th>User</th>
                                            <th class="action-th">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($approved as $key => $value)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $value->rating }}</td>
                                                <td>{{ $value->body }}</td>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->user_name }}</td>
                                                <td>
                                                    <a class="btn btn-info custom-tooltip" href="{{ url('admin/review/approv', $value->id) }}">
                                                        <span class="custom-tooltiptext custom-tooltip-top">Approve this Review</span>
                                                        <i class="cil-thumb-up"></i>
                                                    </a>
                                                    <a class="btn btn-danger custom-tooltip" onclick="return confirm('Are you sure you want to delete this review?');" href="{{ url('admin/review/delete', $value->id) }}">
                                                        <span class="custom-tooltiptext custom-tooltip-top">Delete this Review</span>
                                                        <i class="cil-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>                       
                                        @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                        <th colspan="6" class="text-center"><img src="{{ url('') }}/upload/product/empty-list.jpg" alt="Review list is empty"></th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
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
