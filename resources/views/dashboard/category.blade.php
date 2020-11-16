@extends('dashboard.base')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
    
    @include('partials.alert_msg')
    @dump($category_list)

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Category</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-6">
                                <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" placeholder="category name" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="file-input">Category Image</label>
                                            <input id="file-input" type="file" name="image" class="form-control" accept="image/*">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a onclick="history.go(-1)" class="btn btn-danger text-white">
                                        Back
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create List</h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>-</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach($category_list as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>@dump($value->image()->image )</td>
                                <td>{{ $value->name }}</td>
                            </tr>
                                @endforeach
                           
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('javascript')


@endsection
