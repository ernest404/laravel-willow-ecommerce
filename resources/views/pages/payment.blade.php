
@extends('layouts.app2')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="paymentCont">
                        <div class="headingWrap">
                                <h3 class="headingTop text-center">Select Your Payment Method</h3>	
                                <p class="text-center">Created with bootsrap button and using radio button</p>
                        </div>
                        <div class="paymentWrap">
                            <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                <label class="btn paymentMethod ">
                                    <div class="method visa"></div>
                                    <input type="radio" name="options"> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method master-card"></div>
                                    <input type="radio" name="options"> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method amex"></div>
                                    <input type="radio" name="options">
                                </label>
                                 <label class="btn paymentMethod">
                                     <div class="method vishwa"></div>
                                    <input type="radio" name="options"> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method ez-cash"></div>
                                    <input type="radio" name="options"> 
                                </label>
                             
                            </div>        
                        </div>
                        <div class="footerNavWrap clearfix">
                            <div class="btn btn-success pull-left btn-fyi"><span><i class="fa fa-chevron-left"></i></span>Back</div>
                            <div class="btn btn-success pull-right btn-fyi">CHECKOUT<span><i class="fa fa-chevron-right"></i></span></div>
                        </div>
                    </div>
        
    </div>
</div>




@endsection