@extends('dashboard.email.master')
 @section('content')

 <tr>
 <td style="font-family: 'Lato',sans-serif;">
    <strong>Hi, <strong>{{ $data->name }}</strong>!</strong>
    <br><br><br>
    Your password has been successfully updated.
    <br><br>If you didn't request to change your password, please let us know immediately.
        <br><br><br><br>
    <div><a style="background-color:#FF324D;color:#fff;font-size:18px;padding:10px 0;border:solid 1px #FF324D!important;border-radius:4px;text-decoration:none;display:block;width:270px;text-align:center;font-weight:bold;margin:0 auto" href="{{url('/contact-us')}}" target="_blank">Contact Us</a></div>
    </td>
</tr>
@endsection
