@extends('dashboard.email.master')
 @section('content')

 <tr>
 <td style="font-family: 'Lato',sans-serif;">
    <strong>Hi {{ucfirst($name) ?? ''}}, <strong></strong>!</strong>
    <br><br><br>
    We have got a request to Reset your password.
    <br><br>If you didn't make this request, please ignore this email. Otherwise, please click the button below to Reset your password.
        <br><br><br><br>
    <div><a style="background-color:#00436b;color:#fff;font-size:18px;padding:10px 0;border:solid 1px #00436b!important;border-radius:4px;text-decoration:none;display:block;width:270px;text-align:center;font-weight:bold;margin:0 auto" href="{{ url('password/reset/'.$token) }}" target="_blank">Reset Password</a></div>
    </td>
</tr>
@endsection
