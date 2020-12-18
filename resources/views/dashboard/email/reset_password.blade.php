@extends('dashboard.email.master')
 @section('content')

 <tr>
 <td style="font-family: 'Lato',sans-serif;">
    <strong>Hi, <strong>{{ $data->name }}</strong>!</strong>
    <br><br><br>
    We have got a request to Reset your password.
    <br><br>If you didn't make this request, please ignore this email. Otherwise, please click the button below to Reset your password.
        <br><br><br><br>
    <div><a style="background-color:#FF324D;color:#fff;font-size:18px;padding:10px 0;border:solid 1px #FF324D!important;border-radius:4px;text-decoration:none;display:block;width:270px;text-align:center;font-weight:bold;margin:0 auto" href="{{url('/reset-password')}}" target="_blank">Reset Password</a></div>
    </td>
</tr>
@endsection
