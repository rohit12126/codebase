 @extends('dashboard.email.master')
 @section('content')
 <tr>
     <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
         <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
             <tr>
                 <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> 
                     <h4 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Hello {{ $data['buyer_name'] }}! <br> Your Order #{{ $data['order_no']}} Status Updated to {{ $data['status'] }}. </h4>
                 </td>
             </tr>
             <tr>
                 <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                 </td>
             </tr>
             
         </table>
     </td>
 </tr>

 @endsection