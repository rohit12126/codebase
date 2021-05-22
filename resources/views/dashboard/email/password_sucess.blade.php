@extends('dashboard.email.master')
 @section('content')

 <tr>
 <td style="font-family: 'Lato',sans-serif;">
    <strong>Hi, <strong>{{ $data->name }}</strong>!</strong>
    <br><br><br>
    Your password has been updated successfully.
    <br><br>If it was not you, then please inform us immediately.
        <br><br><br><br>
    <div><a style="background-color:#00436b;color:#fff;font-size:18px;padding:10px 0;border:solid 1px #00436b!important;border-radius:4px;text-decoration:none;display:block;width:270px;text-align:center;font-weight:bold;margin:0 auto" href="{{url('/contact-us')}}" target="_blank">Contact Us</a></div>
    </td>
</tr>
@endsection
