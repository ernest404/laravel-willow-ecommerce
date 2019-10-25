@extends('layouts/app2')
    
<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 2vw;
        line-height: 3vw;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 5vw;
        line-height: 5vw;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    {{-- @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    } --}}
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr style="background:#222222; color:white; opacity:0.8;">
                            <td class="title ">
                                <img height="50" width="80" src="{{asset('img/logo.png')}}" alt="Logo"><sub><small style=" color: white;">{{ config('app.name', 'Laravel') }} <small>sandals</small> <sub><small>TM</small></sub></small></sub>
                            </td>
                            
                            <td>
                                Invoice No: WS{{$userorder->id}} <br>
                                Created: <span style="font-size:1vw;">{{$userorder->created_at}}</span><br>
                           
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td colspan="2">
                                WillowKe<sub><small>TM</small> </sub> .<br>
                                12345 Athiriver<br>
                                Nairobi, CA 12345
                            </td>
                            
                            <td colspan="2" style="text-align: right;">
                                {{$userDetails->name}} {{$userDetails->sname}} <br>
                                {{$userDetails->email}}<br> 
                                
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2">
                                Billing address: <br>
                                Country: <br>
                                County: <br>
                                Sub County: <br>
                                Delivery address: 
                            </td>
                            <td colspan="2" style="text-align: right;">
                                    {{ $shippingDetails->billing_address }} <br>
                                    {{ $shippingDetails->country }} <br>
                                    {{ $shippingDetails->county }} <br>
                                    {{ $shippingDetails->subcounty }} <br>
                                    {{ $shippingDetails->delivery_address }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
           
            
            <tr class="heading">
                <td>Item</td>
                <td>size</td>
                <td style="text-align: right;">qty</td> 
                <td style="text-align: right;">Price</td>
            </tr>
            @foreach($userorder->orderItems as $item)
            <tr class="item">
                <td>{{$item->name}}</td>
                <td>{{$item->size}}</td>
                <td style="text-align: right;">{{$item->pivot->qty}}</td>
                <td style="text-align: right;">Ksh {{$item->price}}</td>
                {{-- <td>{{$item->pivot->total}}</td> --}}
            </tr>
            
        @endforeach
        <tr class="heading">
                <td>
                    Total
                </td>
                <td></td>
                <td></td>
                <td style="text-align: right;">
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Amount payable
                </td>
                <td></td>
                <td></td>
                <td style="text-align: right;">
                 Ksh {{$userorder->total}}
                </td>
            </tr>
    
        </table>
        
            
            {!! Form::radio('COD', 'COD', 'COD', ['']) !!}<span>Cash On Delivery</span>
            
            <div class="button button_continue trans_200"><a href="{{route('checkout.placeorder')}}">place Order</a></div>
    </div>
    
    
    
    

