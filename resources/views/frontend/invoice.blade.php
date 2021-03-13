<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<style>
    .download-invoice-block{
        text-align:center;
        margin:50px 0;
    }
    .btn {
        display: inline-block;
        font-weight: 600;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        border-width: 1px;
        cursor: pointer;
        line-height: normal;
        padding: 15px 45px;
        text-transform: capitalize;
        transition: all 0.3s ease-in-out;
        font-size:16px;
        text-decoration: none;
        border-radius: .2rem;
        font-family: arial;
    }
    .btn-fill-out {
        background-color: transparent;
        border: 1px solid #FF324D;
        color: #fff;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    .btn-fill-out::before, .btn-fill-out::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        background-color: #FF324D;
        z-index: -1;
        transition: all 0.3s ease-in-out;
        width: 51%;
    }
    .btn-fill-out::after {
        right: 0;
        left: auto;
    }
    .btn-fill-out:hover {
        color: #FF324D !important;
    }
    .btn-fill-out:hover:before, .btn-fill-out:hover:after {
        width: 0;
    }
</style>
<body>
    <section id="invoice-body">
        <table cellspacing="0" cellpadding="0" style="width: 95%;margin: 2% auto 0;font-family: arial;font-size: 14px;line-height: 18px;padding: 20px 0;">
            <tr>
            <td>
            <img src="{{URL::asset('/images/cutom-inc-logo.png')}}" alt="" class="head-logo">
            </td>
            <td style="text-align: right;">
                Custom Closets Innovations Private Limited <br>
            </td>
            </tr>
        </table>
        <table cellspacing="0" cellpadding="0" style="width: 95%;margin: 0 auto;border: 1px solid #000;font-family: arial;font-size: 14px;line-height: 18px;">
            <tr>
                <th style="background-color: #eee;border-bottom: 1px solid #000;text-align: center;">
                    <span style="font-weight: bold;line-height: 22px;">Invoice</span>
                </th>
            </tr>
            <tr>
                <td>
                <table style="width: 100%;border-bottom: 1px solid #000;" cellspacing="0">
                    <tr>
                        <td style="padding: 10px;width: 60%;border-right: 1px solid #000;">
                                Manufactured and Sold by: Custom Closets Innovations Pvt Ltd <br><br>
                        
                                Phone: +91 988 3333 123 <br>
                                Email: support@customclosets.co
                        </td>
                        <td cellspacing="0">
                            <table style="width: 100%;" cellspacing="0">
                                <tr>
                                    <td style="border-right: 1px solid #000;font-weight:600;padding-left: 5px;border-bottom:1px solid #000;">
                                        Order No.
                                    </td>
                                    <td style="padding: 4px 5px;border-bottom:1px solid #000;">{{ $order->order_no }}</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #000;font-weight:600;padding-left: 5px;border-bottom:1px solid #000;">
                                        Order Via
                                    </td>
                                    <td style="padding: 4px 5px;border-bottom:1px solid #000;">customclosets.co</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #000;font-weight:600;padding-left: 5px;border-bottom:1px solid #000;">
                                        Order Date
                                    </td>
                                    <td style="padding: 4px 5px;border-bottom:1px solid #000;">{{ date("M j, Y", strtotime($order->created_at)) }}</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #000;font-weight:600;padding-left: 5px;">Invoice Date</td>
                                    <td style="padding: 4px 5px;">{{ date("M j, Y", strtotime($order->created_at)) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table> 
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width:100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <th style="background-color: #eee;border-bottom: 1px solid #000;text-align: center;border-right: 1px solid #000;">
                                <span style="font-weight: bold;line-height: 22px;">Billing Address</span>
                            </th>
                            <th style="background-color: #eee;border-bottom: 1px solid #000;text-align: center;">
                                <span style="font-weight: bold;line-height: 22px;">Shipping Address</span>
                            </th>
                        </tr>
                        <tr>
                           <td style="padding: 10px;border-right: 1px solid #000;">
                                Name : {{$order->getBillingAddress->name}} <br>
                                Contact Number(s) : {{$order->getBillingAddress->mobile}} <br>
                                Email : {{$order->getBillingAddress->email}} <br>
                                Address:  {{$order->getBillingAddress->address.', '.$order->getBillingAddress->city.', '.$order->getBillingAddress->state.', '.$order->getBillingAddress->country}} <br>
                                Pincode : {{$order->getBillingAddress->zipcode}} <br><br>
                            </td>
                            <td style="padding: 10px;">
                            
                                Name : {{$order->getShippingAddress->name ?? $order->getBillingAddress->name}} <br>
                                Contact Number(s) : {{$order->getShippingAddress->mobile ?? $order->getBillingAddress->mobile}} <br>
                                Email : {{$order->getShippingAddress->email ?? $order->getBillingAddress->email}} <br>
                                Address:{{$order->getShippingAddress->address ?? $order->getBillingAddress->address}}, {{$order->getShippingAddress->city ?? $order->getBillingAddress->city}}, {{$order->getShippingAddress->state ?? $order->getBillingAddress->state}}, {{$order->getShippingAddress->country ?? $order->getBillingAddress->country}}<br>
                                Pincode : {{$order->getShippingAddress->zipcode ?? $order->getBillingAddress->zipcode}} <br><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- <tr>
            <td style="padding: 10px;width: 60%;border-right: 1px solid #000;" rowspan="5">
                    Manufactured and Sold by: customclosets Innovations Pvt Ltd <br><br>
                    
                    Phone: +91 988 3333 123 <br>
                    Email: support@customclosets.co
            </td>
            </tr>
            <tr>
                <th style="border-right: 1px solid #000;padding-left: 5px;border-bottom:1px solid #000;">
                    Order No.
                </th>
                <td style="padding-left: 5px;border-bottom:1px solid #000;">{{ $order->order_no }}</td>
            </tr>
            <tr>
                <th style="border-right: 1px solid #000;padding-left: 5px;border-bottom:1px solid #000;">
                    Order Via
                </th>
                <td style="padding-left: 5px;border-bottom:1px solid #000;">customclosets.co</td>
            </tr>
            <tr>
                <th style="border-right: 1px solid #000;padding-left: 5px;border-bottom:1px solid #000;">
                    Order Date
                </th>
                <td style="padding-left: 5px;border-bottom:1px solid #000;">{{ date("M j, Y", strtotime($order->created_at)) }}</td>
            </tr>
            <tr>
                <th style="border-right: 1px solid #000;padding-left: 5px;">Invoice Date</th>
                <td style="padding-left: 5px;">{{ date("M j, Y", strtotime($order->created_at)) }}</td>
            </tr>
            <tr>
                <th colspan="3" style="background-color: #eee;border-top: 1px solid #000;border-bottom: 1px solid #000;text-align: center;">
                    <span style="font-weight: bold;line-height: 22px;">Buyer Details - Shipping Address</span>
                </th>
            </tr>
            <tr>
                <td style="padding: 10px;text-transform: capitalize;">
                    Name : {{$order->getShippingAddress->name}} <br>
                    Contact Number(s) : {{$order->getShippingAddress->mobile}} <br>
                    Email : {{$order->getShippingAddress->email}} <br>
                    Address: {{$order->getShippingAddress->address.', '.$order->getShippingAddress->city.', '.$order->getShippingAddress->state.', '.$order->getShippingAddress->country}} <br>
                    Pincode : {{$order->getShippingAddress->zipcode}} <br><br>
                </td>
            </tr> -->
            <tr>
                <td>
                    <table style="width: 100%;border-top:1px solid #000;" cellspacing="0">
                        <tr>
                            <th style="border-bottom:1px solid #000;border-right:1px solid #000;">S. No.</th>
                            <th style="border-bottom:1px solid #000;border-right:1px solid #000;">Description of Product</th>
                            <th style="border-bottom:1px solid #000;border-right:1px solid #000;">SKU No.</th>
                            <th style="border-bottom:1px solid #000;border-right:1px solid #000;">Rate / Unit</th>
                            <th style="border-bottom:1px solid #000;border-right:1px solid #000;">Quantity</th>
                            <th style="border-bottom:1px solid #000;">Total</th>
                        </tr>
                        @php
                            $i=1;    
                        @endphp
                        @foreach ($order->productList as $product)
                            <tr>
                                <td style="padding: 10px;text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">{{$i}}.</td>
                                <td style="padding: 10px;border-right:1px solid #000;border-bottom:1px solid #000;">
                                @if($product->product->is_accessory != 1) {{ucfirst(strtolower($product->product->catergory->name))}} @endif{{$product->product->name}}
                                </td>
                                <td style="padding: 10px;text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
                                @php $array = array() @endphp
                                @if(json_decode($product->configure_detail))
                                @php $array = json_decode($product->configure_detail) @endphp
                                @endif
                                    {{array_reverse( $array )[1] ?? $product->product->sku}} 
                                </td>
                                <td style="padding: 10px;text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">${{number_format($product->price, 2)}}</td>
                                <td style="padding: 10px;text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">{{number_format($product->product_quantity)}}</td>
                                <td style="padding: 10px;text-align:center;border-bottom:1px solid #000;">${{number_format($product->price * $product->product_quantity, 2)}}</td>
                            </tr>
                        @endforeach
                        <tr style="font-weight: bold;">
                            <td colspan="5" style="text-align: right;padding: 5px;border-bottom:1px solid #000;border-right:1px solid #000;">
                                Shipping
                            </td>
                            <td style="padding: 10px;border-bottom:1px solid #000;">
                                ${{number_format($order->getPaymentDetail->shipping, 2)}}
                            </td>
                        </tr>

                        <tr style="font-weight: bold;">
                            <td colspan="5" style="text-align: right;padding: 5px;border-bottom:1px solid #000;border-right:1px solid #000;">
                                Net Amount
                            </td>
                            <td style="padding: 10px;border-bottom:1px solid #000;">
                                ${{$order->grand_total}}
                            </td>
                        </tr>
                        <tr style="font-weight: bold;">
                            <td colspan="5" style="text-align: right;padding: 5px;border-right:1px solid #000;">
                                Payment Mode
                            </td>
                            <td style="padding: 10px;">
                                Paypal
                            </td> 
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <th style="border-top: 1px solid #000;text-align: left;padding: 5px;">
                    <span style="font-weight: bold;line-height: 22px;">Total Amount(In Words): {{$order->total_text}} Only</span>
                </th>
            </tr>
        </table>
    </section>

    <div class="download-invoice-block">
        {{-- <a href="{{ route('invoice', ['order_no'=> $order->order_no, 'download'=>'pdf']) }}" target="_blank" class="btn btn-sm btn-fill-out">Download</a> --}}
        <a onclick="generatePDF()" class="btn btn-sm btn-fill-out">Download</a>
    </div>
</body>
</html>
<script src="{{ asset('js/html2pdf.bundle.min.js')}}"></script>
<script>
    function generatePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("invoice-body");
        var filename = "{{ 'customclosets'.$order->order_no.'.pdf' }}";
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save(filename);
      }
</script>
