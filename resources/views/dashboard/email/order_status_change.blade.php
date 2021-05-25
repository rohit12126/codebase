 @extends('dashboard.email.master')
 @section('content')
    <tr style="margin:0;padding:0">
        <td style="padding:0;float:none;margin:0 auto;width:100%" width="100%">
        <table style="float:none;margin:0 auto;width:100%" width="100%">
            <tbody>
                <tr>
                    <td>
                    <table style="text-align:center;width:100%">
                        <tbody>
                            <tr>
                                <td>
                                <div style="font-size:30px;font-family:'Lato',sans-serif;margin-top:20px;color:#282c3f;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal;text-transform: capitalize;">
                                    Dear
                                    <span style="font-weight:bold">{{ $data['buyer_name'] }} </span>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr style="margin:0;padding:0">
                    <td style="margin:0;padding:0px 40px 20px 40px;width:calc(100% - (40px*2))" width="calc(100% - (40*2))">
                    <table style="border-collapse:collapse;border-spacing:0px;margin-top:20px;width:100%">
                        <tbody>
                            <tr style="margin:0;padding:0">
                                <td style="margin:0;padding:0;border-spacing:0">
                                <table style="border-collapse:collapse;border-spacing:0px;margin:0 auto" width="100%">
                                    <tbody>
                                        <tr style="margin:0;padding:0">
                                            <td width="calc(100% - (30*2))" style="margin:0;padding:30px;width:calc(100% - (30px*2));padding-top:20px;background-color: #00436b;color:white;">
                                            <table style="border-collapse:collapse" width="100%">
                                                <tbody>
                                                    <tr style="margin:0;padding:0">
                                                        <td valign="top" style="margin:0;padding:0">
                                                        <div style="margin:0;padding-top:5px;width:30px;margin-right:20px">
                                                            <img style="width:30px;object-fit:contain" src="{{URL::asset('/images/email-img/check.png')}}" class="CToWUd">
                                                        </div>
                                                        </td>
                                                        <td valign="top" style="margin:0;padding:0">
                                                        <table style="border-collapse:collapse" width="100%">
                                                            <tbody>
                                                        @if($data['order_status_num'] == 5)
                                                            @if($data['cancelled_by'] == 1)
                                                            <tr style="margin:0;padding:0">
                                                                    <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                   <p style="line-height:1.38;padding:0;float:left;width:100%;font-size:16px;opacity:0.9;font-family:'Lato',sans-serif;margin-top:10px;color: #fff;">
                                                                    Your order {{$data['order_no']}} has been Cancelled due to the following reason: </br>{{$data['reason']}}.
                                                                    </br>We are really sorry for your inconvenience, and would love to have your orders again.</p>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            @if($data['cancelled_by'] == 2)
                                                            <tr style="margin:0;padding:0">
                                                                    <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                   <p style="line-height:1.38;padding:0;float:left;width:100%;font-size:16px;opacity:0.9;font-family:'Lato',sans-serif;margin-top:10px;color: #fff;">
                                                                    Your  request to cancel the order no. {{$data['order_no']}} has been received and approved. </br>We’d love to have more orders from you.
                                                                    </p>
                                                                    <br>{{$data['reason']}}.
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        
                                                            @else
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                    <p class="m_8451886253471966023statusText" style="margin:0;font-family:'Lato',sans-serif;color:white;padding:0;float:left;width:100%;font-size:30px;line-height:normal">
                                                                        We have <strong style="font-family:'Lato',sans-serif!important;letter-spacing:0.5px;font-weight:bold">{{ $data['status'] }}</strong> your order
                                                                    </p>
                                                                    </td>
                                                                </tr>
                                                                {{-- if order is not cacnel --}}
                                                                @if ($data['order_status_num'] != 5)
                                                                    @if ($data['order_status_num'] != 4)
                                                                        <tr style="margin:0;padding:0">
                                                                            <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                            <p style="line-height:1.38;padding:0;float:left;width:100%;font-size:16px;opacity:0.9;font-family:'Lato',sans-serif;margin-top:10px;color: #fff;">
                                                                                We know you can't wait to get your hands on them. Our team is working hard while ensuring highest safety standards to deliever your order at the earliest. You can track your order below.
                                                                            </p>
                                                                            </td>
                                                                        </tr>
                                                                    @else
                                                                        <tr style="margin:0;padding:0">
                                                                            <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                            <p style="line-height:1.38;padding:0;float:left;width:100%;font-size:16px;opacity:0.9;font-family:'Lato',sans-serif;margin-top:10px;color: #fff;">
                                                                                Order delievered to the following address:
                                                                                <p style="margin:0;padding:0;width:100%;font-family:'Lato',sans-serif;color:#282c3f;font-size:25px;margin-bottom:16px;font-weight:normal;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal">
                                                        </p>
                                                        <div style="margin:0;padding:0;width:100%;font-family:'Lato',sans-serif;font-size:16px;line-height:1.38;letter-spacing:0.29px;color:#7e818c;font-weight:normal;font-stretch:normal;font-style:normal">
                                                            <span><strong style="font-weight:bold;color:#3e4152">{{$data['ship']->name ?? $data['bill']->name}}</strong>,</span>
                                                            <span>{{$data['ship']->address ?? $data['bill']->address}}</span>,
                                                            <span>{{$data['ship']->city ?? $data['bill']->city}}</span>,
                                                            <span>{{$data['ship']->state ?? $data['bill']->state}}</span>,
                                                            <span>{{$data['ship']->country ?? $data['bill']->country}}</span>
                                                            <span>{{$data['ship']->zipcode ?? $data['bill']->zipcode}}</span>
                                                        </div>
                                                                                </br>Hope you have liked it. Please click on link below to get the installation instructions for your product:
                                                                                <a href="{{url('/installation')}}" ?>Installation Instructions</a>
                                                                            </p>
                                                                            <p>In case, you have not received this order yet or have any query while installing your product, then kindly reach us at enquire@customcloset.com.</p>
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                    <tr style="margin:0;padding:0">
                                                                        <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                        <a href="{{url('account/orderdetails/').'/'.$data['order_no']}}" style="text-decoration:none;float:left;background:white;padding:10px 30px 12px 24px;margin-top:10px;margin-bottom:10px;border-radius:4px;text-transform:uppercase;font-family:'Lato',sans-serif;font-size:4px;line-height:4px" href="#" target="_blank">
                                                                            <p style="letter-spacing:0.44px;font-family:'Lato',sans-serif;font-weight:bold;font-size:16px;color:black">
                                                                                TRACK MY ORDER
                                                                            </p>
                                                                        </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="margin:0;padding:0">
                                                                        <td valign="top" style="padding:0% 3% 0% 0%">
                                                                        <p style="font-family:'Lato',sans-serif;font-size:16px;font-weight:bold;line-height:1.06;opacity:0.9;float:left;margin-top:4px;margin-bottom:0px">
                                                                            <span style="color: #000;">
                                                                            <a href="{{ route('invoice', ['order_no'=> $data['order_no']]) }}">View Invoice</a>
                                                                            </span>
                                                                        </p>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr style="height:16px"></tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
            </tbody>
        </table>
        </td>
    </tr>
 
 @endsection
