@extends('dashboard.base')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order List</h4>
                    </div>
                    <div class="card-body">
                        @include('partials.alert_msg')
                        <form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label>From Date</label>
                                    <input type="text" placeholder="From Date" name="from_date" class="form-control"  value="{{ old('from_date') }}">
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <label>To Date</label>
                                    <input type="text" placeholder="To Date" name="to_date" class="form-control"  value="{{ old('to_date') }}">
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label>Mobile</label>
                                    <input type="text" placeholder="Mobile" name="mobile" class="form-control" required value="{{ @$user->mobile }}">
                                    @error('mobile')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <label>Password</label>
                                    <input type="text" placeholder="Password" name="password" class="form-control" @if(!@$user) required @endif value="">
                                    @if(@$user) <span class="text-danger">Leave blank if don't want to change</span> @endif

                                    @error('password')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
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

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($order_list as $key => $value)
                                <tr>
                                    <td>{{ $value->order_no }}</td>
                                    <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                                    <td>{{ ucwords($value->user->name) }}</td>
                                    <td>{{ $value->order_status }}</td>
                                    <td>{{ $value->grand_total }}</td>

                                    <td>
                                        <a class="btn btn-info" href="{{ url('admin/order_details', $value->order_no) }}">
                                            <i class="cil-description"></i>
                                        </a>
                                        {{-- <a class="btn btn-danger" href="{{ url('admin/delete_user', $value->id) }}" onclick="return confirm('Are you sure you want to delete this user?');">
                                            <i class="cil-trash"></i>
                                        </a> --}}
                                    </td>
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
