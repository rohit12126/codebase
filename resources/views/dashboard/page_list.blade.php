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
            <li class="breadcrumb-item active">CMS</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                @include('partials.alert_msg')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h4>Page List</h4>
                            </div>
                            <div class="col-2">
                                <a href="{{ url('admin/cms') }}" class="btn btn-primary btn-sm pull-right">
                                    Create Page
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered datatable">
                            @if($productDescriptionList->isNotEmpty())
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($page_list as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 + ( (($_GET['page'] ?? 1) - 1 ) * 10 ) }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ url('admin/edit_cms', $value->id) }}" title="Edit">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger" href="{{ url('admin/delete_page', $value->id) }}" onclick="return confirm('Are you sure you want to delete this page?');" title="Delete">
                                                <i class="cil-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            @else
                                <tfoot>
                                    <tr>
                                    <th colspan="6" class="text-center"><img src="{{ url('') }}/upload/product/empty-list.jpg" alt="Page list is empty"></th>
                                    </tr>
                                </tfoot>
                            @endif
                        </table>
                        {{ @$page_list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>

@endsection
