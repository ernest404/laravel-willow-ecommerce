@extends('layouts.app2')

@section('content')
<br>

<div class="card" style="width:70%;box-shadow: 6px 6px 3px #888888;margin: 0 auto; float:none">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Shipping</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-sm-5 pt-0 ">
    
        {!! Form::open([ 'route'=>'address.store','method' => 'post'],array("class"=>"text-center", "style"=>"color: #757575;")) !!}
        
        <div class="form-row">
                <div class="col">
       
        <div class="form-group">
            {{ Form::label('first name', 'First Name') }}
            <input name="name" id="name" @if(!empty( Auth::user()->name)) value="{{  Auth::user()->name }}" @endif type="text" placeholder="Billing Name" class="form-control" />
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            {{ Form::label('second name', 'Second Name') }}
            <input name="sname" id="name" @if(!empty( Auth::user()->sname)) value="{{  Auth::user()->sname }}" @endif type="text" placeholder="Billing Name" class="form-control" />
            @error('sname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            {{ Form::label('billing address', 'Billing Address') }}
            <input name="billing_address" id="billing_address" @if(!empty( Auth::user()->email)) value="{{  Auth::user()->email }}" @endif type="text" placeholder="Billing Address" class="form-control" />
            @error('billing_address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::number('phone', null, array('class' => 'form-control')) }}
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
                {{ Form::label('country', 'Country') }}
                <select id="country" name="country" class="form-control">
                    <option value="">Select Country</option>
                    
                        <option value="Kenya">Kenya</option>
                </select>
                @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
        <div class="form-group">
                {{ Form::label('county', 'County') }}
                <select id="county" name="county" class="form-control">
                    <option value="">Select County</option>
                    @foreach($counties as $county)
                        <option value="{{ $county->county_name }}">{{ $county->county_name }}</option>
                    @endforeach
                </select>
                @error('county')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
                {{ Form::label('subcounty', 'subcounty') }}
                <select id="subcounty" name="subcounty" class="form-control">
                    <option value="">Select Sub-County</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->area_name }}">{{ $area->area_name }}</option>
                    @endforeach
                </select>
                @error('subcounty')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
                {{ Form::label('delivery address', 'Delivery Address') }}
               <input name="delivery_address" id="delivery_address"  type="text" placeholder="Delivery Address" class="form-control" />
               @error('delivery_address')
               <div class="alert alert-danger">{{ $message }}</div>
           @enderror
            </div>


        
        

        {{ Form::submit('Proceed to Payment', array('class' => ' btn button_clear   btn-block my-4 waves-effect z-depth-0')) }}
        {!! Form::close() !!}
    </div>
</div>
        </div>
</div>




@endsection