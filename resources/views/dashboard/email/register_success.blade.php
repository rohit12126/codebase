 @extends('dashboard.email.master')
 @section('content')

 <tr>
    <td style="font-family: 'Lato',sans-serif;">
    <strong>Hi, <strong>{{ $data->name }}</strong>!</strong>
    <br><br><br>
    Thank you for signing up with us. We're glad to have you onboard.
    <br>To get started, visit our website&nbsp;by clicking the button below.<br><br> <br><strong>
        
        <br><br><br>
    <div><a style="background-color:#00436b;color:#fff;font-size:18px;padding:10px 0;border:solid 1px #00436b!important;border-radius:4px;text-decoration:none;display:block;width:270px;text-align:center;font-weight:bold;margin:0 auto" href="{{url('/')}}" target="_blank">Visit Website</a></div>
    </td>
</tr>
@endsection
