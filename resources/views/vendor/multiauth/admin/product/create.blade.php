@extends('vendor.multiauth.layouts.admin1')

@section('content')
<div class="main-content">
    <div class="">
        <div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-8">
            
    <h3>Add Product</h3>
        
        {!! Form::open(['route'=>'product.store','method'=>'post','files'=>true]) !!}
        
        <div class="form-group">
            {{ Form::label('name', 'Name')}}
            {{ Form::text('name',null,array('class'=>'form-control'))}}   
        </div>

        <div class="form-group">
            {{ Form::label('image 1', 'Image 1')}}
            {{ Form::file('image1',array('class'=>'form-control'))}}   
        </div>

        <div class="form-group">
            {{ Form::label('image 2', 'Image 2')}}
            {{ Form::file('image2',array('class'=>'form-control'))}}   
        </div>

        <div class="form-group">
            {{ Form::label('image 3', 'Image 3')}}
            {{ Form::file('image3',array('class'=>'form-control'))}}   
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'Categories')}}
            {{ Form::select('category_id',$categories,null,array('class'=>'form-control','placeholder'=>'select'))}}
        </div>        
        <div class="form-group">
                {{ Form::label('description', 'Description')}}
                <textarea name="description"  cols="30" rows="3"class="form-control" ></textarea>  
        </div>
        <div class="form-group">
                {{ Form::label('size', 'Size')}}
                {{ Form::number('size',null,array('class'=>'form-control'))}}   
        </div>
        <div class="form-group">
                {{ Form::label('price', 'Price')}}
                {{ Form::text('price',null,array('class'=>'form-control'))}}   
        </div>
       
        
            {{ Form::submit('Submit',array('class'=>'newsletter_submit_btn'))}} 
        
    
        
        {!! Form::close() !!}
        

        </div>
    </div>
</div>
    </div>
</div>



@stop

