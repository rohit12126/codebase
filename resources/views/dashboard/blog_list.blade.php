@extends('dashboard.base')

@section('css')
<style>
    .pagination {
        justify-content: flex-end !important;
    }
</style>
@endsection

@section('breadcrumb')
    <div class="c-subheader px-3 justify-content-between">
        <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Blogs</li>
        </ol>
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.blog') }}" class="btn btn-danger pull-right custom-tooltip">
                <span class="custom-tooltiptext custom-tooltip-bottom">Create New Blog</span>
                <i class="cil-plus"></i> Create Blog
            </a>
        </div>
    </div>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9 col-sm-8">
                                <form method="GET" action="{{ url()->current() }}">
                                    <div class="row">
                                        <div class="col-sm-6 col-8">
                                            <div class="form-group mb-0">
                                            <label>Search via Title</label>
                                            <input type="text" placeholder="Title" name="title"
                                                class="form-control" value="{{ @$_GET['title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex align-items-end pl-0">
                                            <button type="submit" title="Search" class="btn btn-primary mr-1 mr-sm-2 mt-0 custom-tooltip">
                                                <span class="custom-tooltiptext custom-tooltip-top">Search Blog</span>
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                            <a href="{{route('admin.blog.list')}}" class="btn btn-danger text-white custom-tooltip">
                                                <span class="custom-tooltiptext custom-tooltip-top">Reset  Blog Search</span>
                                                <i class="cil-reload"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overflow-auto table-responsive mb-2">
                            <div class="table-swipe-indicator"></div>
                            <table class="table table-striped table-bordered datatable">
                                @if($blog_list->isNotEmpty())
                                    <thead>
                                        <tr>
                                            <th class="serial-number-th">S No.</th>
                                            <th>Featured Image</th>
                                            <th>Title</th>
                                            <th class="action-th">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blog_list as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 + ( (($_GET['page'] ?? 1) - 1 ) * 10 ) }}</td>
                                            <td>
                                                <img src="{{ url('') }}/upload/blog/{{ @$value->image}}" width="50" />
                                            </td>
                                            <td>{{ $value->title }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-info mb-2 mb-sm-0 custom-tooltip" href="{{ url('admin/edit_blog', $value->id) }}">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Edit this Blog</span>
                                                    <i class="cil-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger mb-2 mb-sm-0 custom-tooltip" href="{{ url('admin/delete_blog', $value->id) }}" onclick="return confirm('Are you sure you want to delete this blog?');">
                                                    <span class="custom-tooltiptext custom-tooltip-top">Delete this Blog</span>
                                                    <i class="cil-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tfoot>
                                        <tr>
                                        <th colspan="6" class="text-center"><img src="{{ url('') }}/upload/product/empty-list.jpg" alt="Blog list is empty"></th>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                        {{ @$blog_list->links() }}
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
