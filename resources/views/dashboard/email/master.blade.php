<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

    </style>



<body style="margin: 0 !important; padding: 0 !important;">
    <div style="padding:50px 0;margin:0;background-color:#fbfbfb;font-family: 'Lato',sans-serif;max-width: 680px;margin: 0 auto;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-family: 'Lato',sans-serif;">
            <tbody>
                <tr>
                    <td style="border-top:3px solid #00436b;background-color:#fff;font-family: 'Lato',sans-serif;padding:30px;font-size:15px">
                    <table width="660" border="0" cellpadding="0" cellspacing="0" style="width:660px;margin:0 auto;background-color:#fff">
                        <tbody>
                            <tr>
                                <td align="center" style="text-align:center;padding-bottom:50px">
                                <a href="{{url('/')}}" style="text-decoration:none" target="_blank">
                                    <img alt="Custom Doors and Mirrors" src="{{URL::asset('/images/email-img/logo.png')}}" width="200" class="CToWUd">
                                </a>
                                </td>
                            </tr>
                            @yield('content')
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="text-align:center;color:#959595;padding-top:20px">
                    <table cellpadding="0" cellspacing="0" style="width:100%" width="100%">
                        <tbody>
                            <tr>
                                <td align="center" style="text-align:center;color:#959595;font-family: 'Lato',sans-serif;font-size: 13px;">
                                Please do not reply to this email, this is an automatically generated message.
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="text-align:center;padding-top:5px;font-family: 'Lato',sans-serif;font-size: 11px;">
                                <a href="#" style="color:#959595" target="_blank">https://customdoorandmirror.com</a> | <a href="{{route('termsAndCondition')}}" style="color:#959595" target="_blank">Terms &amp; Conditions</a> | <a href="{{route('privacyPolicy')}}" style="color:#959595" target="_blank">Privacy Policy</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;border-collapse:collapse;padding-top:10px;padding-bottom:10px">
                                <div>
                                    <span style="text-align:right;display:inline-block;vertical-align:middle">
                                    <span style="font-size:16px;font-family:'Lato',sans-serif;">Follow Us:</span>
                                    <a href="{{$setting->facebook_url ?? 'https://www.facebook.com/'}}" style="text-decoration:none;vertical-align:middle" target="_blank""><img src="{{URL::asset('/images/icon/facebook.png')}}" width="22"></a>
                                    <a href="{{$setting->instagram_url ?? 'https://www.instagram.com/'}}" style="text-decoration:none;vertical-align:middle" target="_blank"><img src="{{URL::asset('/images/icon/instagram.png')}}" width="22"></a>
                                    <a href="{{$setting->pinterest_url ?? 'https://www.pinterest.com/'}}" style="text-decoration:none;vertical-align:middle" target="_blank"><img src="{{URL::asset('/images/icon/pintrest.png')}}" width="22"></a>
                                    </span>
                                </div>
                                <div style="font-size:11px;text-align:center;padding-bottom:5px;padding-top:15px;line-height:15px;font-family:'Lato',sans-serif;">
                                    Copyright © {{date("Y")}} Custom Doors and Mirrors, All rights reserved.
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
