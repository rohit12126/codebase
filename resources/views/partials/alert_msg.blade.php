
@if(session('alert-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="successMessage">
    <strong>Success!</strong> {{session('alert-success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseIf((session('alert-error')))
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorMessage">
    <strong>Failed!</strong> {{session('alert-error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endIf

