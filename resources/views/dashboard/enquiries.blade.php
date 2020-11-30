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
                                <h4>Enquries</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    @include('partials.alert_msg')
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Contected ?</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enquieies as $key=>$value)
                                <tr @if($value->connected == 0) class="table-success"@endif>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->phone_nu}}</td>
                                    <td>{{$value->message}}</td>
                                    <td>
                                    @if($value->connected == 0)
                                        <a class="btn btn-primary" href="{{ url('admin/update-enquiry', $value->id) }}" onclick="return confirm('Are you sure you want to mark contected?');" title="Contected">
                                            <i class="cil-check"></i>
                                        </a>
                                    @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ @$enquieies->links() }}
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
