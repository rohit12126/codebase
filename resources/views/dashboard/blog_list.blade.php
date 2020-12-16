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
        <li class="breadcrumb-item active">Blogs</li>
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
                        <div class="row">
                            <div class="col-9">
                                <form method="GET" action="{{ url()->current() }}">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group mb-0">
                                            <label>Search via Title</label>
                                            <input type="text" placeholder="Title" name="title"
                                                class="form-control" value="{{ @$_GET['title'] }}">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex align-items-end">
                                            <button type="submit" title="Search" class="btn btn-primary mr-3 mt-0" >
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                            <a href="{{route('admin.blog.list')}}" title="Reset Filters"  class="btn btn-danger text-white">
                                                <i class="cil-reload"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-3 d-flex align-items-end justify-content-end">
                                <a href="{{ route('admin.blog') }}" class="btn btn-danger pull-right" title="Create Blog Now">
                                    <i class="cil-plus"></i> Create Blog
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Featured Image</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blog_list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        <img src="{{ url('') }}/upload/blog/{{ @$value->image}}" width="50" />
                                    </td>
                                    <td>{{ $value->title }}</td>
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

@endsection
