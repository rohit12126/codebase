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
                                    Hello
                                    <span style="font-weight:bold">@if(!is_null($data->user)) {{ $data->user->name }}! @else {{ $data->getShippingAddress->name }}! @endif</span>
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
                                            <td width="calc(100% - (30*2))" style="margin:0;padding:30px;width:calc(100% - (30px*2));padding-top:20px;background-color: #F94E57;color:white;" bgcolor="#03a685">
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
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                    <p class="m_8451886253471966023statusText" style="margin:0;font-family:'Lato',sans-serif;color:white;padding:0;float:left;width:100%;font-size:30px;line-height:normal">
                                                                        We have <strong style="font-family:'Lato',sans-serif!important;letter-spacing:0.5px;font-weight:bold">Placed</strong> your order
                                                                        <span style="font-weight:bold;font-family:'Lato',sans-serif;padding-left:5px;opacity:0.6;font-size:12px"> on 
                                                                        {{ date("M j, Y", strtotime($data->created_at)) }}    
                                                                    </p>
                                                                    </td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                    <p style="line-height:1.38;padding:0;float:left;width:100%;font-size:16px;opacity:0.9;font-family:'Lato',sans-serif;margin-top:10px;color: #fff;">
                                                                        We know you can't wait to get your hands on them. Our team is working hard while ensuring highest safety standards to deliever your order at the earliest. You can track your order below.
                                                                    </p>
                                                                    </td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="padding:0% 3% 0% 0%" colspan="2">
                                                                    <a href="{{url('account/orderdetails/').'/'.$data->order_no}}" style="text-decoration:none;float:left;background:white;padding:10px 30px 12px 24px;margin-top:10px;margin-bottom:10px;border-radius:4px;text-transform:uppercase;font-family:'Lato',sans-serif;font-size:4px;line-height:4px" href="#" target="_blank">
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
                                                                        <a href="{{ route('invoice', ['order_no'=> $data->order_no]) }}">View Invoice</a>
                                                                        </span>
                                                                    </p>
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
                                        <tr style="height:16px"></tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr style="margin:0;padding:0">
                    <td style="padding:0;float:none;margin:0 auto;width:100%" width="100%">
                    <table style="float:none;margin:0 auto;width:100%" width="100%">
                        <tbody>
                            <tr style="margin:0;padding:0">
                                <td style="margin:0;padding:30px 40px 20px 40px;background-color:#f5f5f6!important;width:calc(100% - (40px*2));border-radius:8px" width="calc(100% - (40*2))">
                                <table width="100%">
                                    <tbody>
                                        <tr style="margin:0;padding:0">
                                            <td style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-left-radius:8px;border-top-right-radius:8px;padding:20px 30px 24px 30px;background-color:white;margin-top:20px;font-size:17px;line-height:23px;color:#7e818c;border:solid 0.5px rgba(190,147,71,0.11);margin:0;border-bottom:solid 0.5px #eaeaec">
                                            <ul style="margin:0;padding:0;float:left;width:100%;font-family:'Lato',sans-serif;list-style:none;line-height:normal">
                                                <li style="margin:0;padding:0;float:left;width:100%">
                                                    <p style="margin:0;float:left;width:100%;font-family:'Lato',sans-serif;color:#282c3f;font-size:25px">
                                                        Package Details
                                                    </p>
                                                </li>
                                                <ul style="margin-top:16px!important;padding:0;font-family:'Lato',sans-serif;float:left;width: 50%;list-style:none;line-height:normal;">
                                                    <li style="margin:0;padding:0;float:left;width:100%;font-size:13px;color:#94969f;letter-spacing:0.39px">Your Order No. :</li>
                                                    <li style="padding:0;float:left;width:100%;font-size:18px;font-family:'Lato',sans-serif;color:#282c3f;margin-top:4px;margin-left:0"> {{ $data->order_no }}</li> 
                                                </ul>
                                                <ul style="padding:0;margin:0;list-style:none;font-size:16px;float: left;width: 50%;text-align: right;">
                                                    <li style="color:#94969f;font-size:13px;letter-spacing:0.39px;font-family:'Lato',sans-serif;padding-bottom:7px">Total Payable</li>
                                                    <li style="color:#3e4152;font-size:22px;letter-spacing:0px;font-family:'Lato',sans-serif;padding-bottom:7px">
                                                        <strong>${{$data->grand_total}}</strong>
                                                    </li>
                                                    <!-- <li style="color:#535766;font-size:16px;letter-spacing:0px;font-family:'Lato',sans-serif;padding-bottom:7px">
                                                        <span>You saved</span>
                                                        <span style="margin-left:3px;color:#03a685;letter-spacing:0px;font-family:'Lato',sans-serif;">
                                                        $145.00
                                                        </span>
                                                    </li> -->
                                                </ul>
                                            </ul>
                                            </td>
                                        </tr>
                                        <tr style="margin:0;padding:0">
                                            <td style="margin:0;padding:20px 30px 24px 30px;background-color:white;border-radius:8px;font-size:17px;line-height:23px;color:#7e818c;border:solid 0.5px rgba(190,147,71,0.11);padding-top:24px;border-top-left-radius:0;border-top-right-radius:0;margin-top:0">
                                            <ul style="margin:0;font-family:'Lato',sans-serif;padding:0;float:left;width:100%;list-style:none;line-height:normal">
                                                @foreach ($data->productList as $product)
                                                    <li style="margin:0;padding:0;display:block;float:left;width:100%;padding-bottom:20px">
                                                        <img  src="{{ url('upload/product/'. $product->product->images[0]->image)}}" style="float:left;border-radius:4px;width:100px" width="100">
                                                        <ul style="margin:0;font-family:'Lato',sans-serif;padding:0;float:left;list-style:none;width:59%;color:#535766;margin-left:5%">
                                                            <li style="margin:0;padding:0;float:left;width:100%;font-size:16px">
                                                                <a href="#" style="max-width:95%;display:inline-block;white-space:nowrap;overflow:hidden!important;text-overflow:ellipsis;width:200px;height:22px;font-stretch:normal;font-style:normal;line-height:normal;color:#282c3f;font-family:'Lato',sans-serif;font-weight:bold;letter-spacing:0.29px;font-size:16px;margin-top:3px;margin-bottom:2px;cursor: pointer;text-decoration: none;">{{$product->product->name}}</a>
                                                            </li>
                                                            <li style="float:left;width:100%;border:none;margin:0;padding:0;margin-top:12px;height:19px;font-size:16px;font-weight:normal;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:0.29px;color:#282c3f">SKU No. <span style="font-family:'Lato',sans-serif;font-weight:500;color:#666;font-size:12px">{{$product->product->sku}}</span>
                                                            </li>
                                                            <li style="float:left;width:100%;border:none;margin:0;padding:0;margin-top:12px;height:19px;font-size:16px;font-weight:normal;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:0.29px;color:#282c3f">Qty <span style="font-family:'Lato',sans-serif;font-weight:bold">{{ number_format($product->product_quantity)}}</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            </td>
                                        </tr>
                                        <tr style="margin:0;padding:0">
                                            <td style="margin:0;padding:0">
                                            <div>
                                                <div style="display:table;margin:20px 0;width:100%">
                                                    <div style="vertical-align:top;display:table-cell;width:50%;background-repeat:no-repeat;background-size:32px;background-position:right 16px top 16px;background-image:url();border:solid 0.5px rgba(190,147,71,0.11);border-radius:4px;background-color:#ffffff">
                                                        <div style="margin:0;font-size:17px;line-height:23px;padding:20px 20px 20px 20px;color:#282c3f">
                                                        <p style="margin:0;padding:0;width:100%;font-family:'Lato',sans-serif;color:#282c3f;font-size:25px;margin-bottom:16px;font-weight:normal;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal">
                                                            Shipping Address
                                                        </p>
                                                        <div style="margin:0;padding:0;width:100%;font-family:'Lato',sans-serif;font-size:16px;line-height:1.38;letter-spacing:0.29px;color:#7e818c;font-weight:normal;font-stretch:normal;font-style:normal">
                                                            <span><strong style="font-weight:bold;color:#3e4152">{{$data->getShippingAddress->name ?? $data->getBillingAddress->name}}</strong>,</span>
                                                            <span>{{$data->getShippingAddress->address ?? $data->getBillingAddress->address}}</span>,
                                                            <span>{{$data->getShippingAddress->city ?? $data->getBillingAddress->city}}</span>,
                                                            <span>{{$data->getShippingAddress->state ?? $data->getBillingAddress->state}}</span>,
                                                            <span>{{$data->getShippingAddress->country ?? $data->getBillingAddress->country}}</span>
                                                            <span>{{$data->getShippingAddress->zipcode ?? $data->getBillingAddress->zipcode}}</span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="display:table;margin-top:20px;width:100%">
                                                    <div style="background-color:transparent;width:0;padding:0 10px;display:table-cell"></div>
                                                </div>
                                            </div>
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
            </tbody>
        </table>
        </td>
    </tr>
 @endsection
