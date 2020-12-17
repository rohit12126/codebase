 @extends('dashboard.email.master')
 @section('content')

 <tr>
    <td style="font-family: 'Lato',sans-serif;">
    <strong>Hi, <strong>{{ $data->name }}</strong>!</strong>
    <br><br><br>
    Thank you for signing up with custom closet.
    <br>To get started, visit our website&nbsp;by clicking the button below.<br><br> <br><strong>
        Have you purchased from custom closet before?<br><br></strong>If you've previously purchased products from custom closet, you can request to import them into your account.<br>
        Please visit our Contact page to submit a request.&nbsp;
        <br><br><br><br>
    <div><a style="background-color:#FF324D;color:#fff;font-size:18px;padding:10px 0;border:solid 1px #FF324D!important;border-radius:4px;text-decoration:none;display:block;width:270px;text-align:center;font-weight:bold;margin:0 auto" href="{{url('/contact-us')}}" target="_blank">Visit custom closet</a></div>
    </td>
</tr>
@endsection
