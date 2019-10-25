@extends('multiauth::layouts.admin1') 
@section('content')
<style>
        .cards-list {
            z-index: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
          }
          
          .card {
            margin: 30px auto;
            width: 250px;
            height: 250px;
            border-radius: 40px;
          box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
            cursor: pointer;
            transition: 0.4s;
          }
          
          .card .card_image {
            
            
            border-radius: 40px;
          }
          
          .card .card_image img {
            width: inherit;
            height: inherit;
            border-radius: 40px;
            object-fit: cover;
          }
          
       
          
          .card:hover {
            transform: scale(0.9, 0.9);
            box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
              -5px -5px 30px 15px rgba(0,0,0,0.22);
          }
          
          .title-white {
            color: white;
          }
          
          .title-black {
            color: black;
          }
          
          @media all and (max-width: 500px) {
            .card-list {
              /* On small screens, we are no longer using row direction but column */
              flex-direction: column;
            }
          }
          
          
          /*
          .card {
            margin: 30px auto;
            width: 300px;
            height: 300px;
            border-radius: 40px;
            background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-repeat: no-repeat;
          box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
            transition: 0.4s;
          }
          */
</style>
<div class="main-content">
        <div class="">
            <div class="container-fluid">
<div class="row">
        <div class="cards-list">
  
            
<div class="card " style="background:white;padding:3rem; ">
        <a href="{{route('category.index')}}">
                <i class="fas fa-list fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Categories</h4>  
    </div>
</div>

        
<div class="card " style="background:white;padding:3rem; ">
        <a href="{{route('product.index')}}">
                <i class="fas fa-boxes fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Products</h4>  
    </div>
</div>

<div class="card " style="background:white;padding:3rem; ">
        <a href="{{route('product.create')}}">
                <i class="fas fa-plus fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Add Products</h4>  
    </div>
</div>

<div class="card " style="background:white;padding:3rem; ">
        <a href="{{route('area.index')}}">
                <i class="fas fa-map-marker-alt fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Address</h4>  
    </div>
</div>

<div class="card " style="background:white; padding:3rem;">
        <a href="{{route('category.index')}}">
                <i class="fas fa-list fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Categories</h4>  
    </div>
</div>

<div class="card " style="background:white; padding:4rem;">
        <a href="{{url('admin/orders')}}">
                <i class="fas fa-file-alt fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">All Orders</h4>  
    </div>
</div>

<div class="card " style="background:white; padding:4rem;">
        <a href="{{url('admin/orders/pending')}}">
                <i class="fas fa-file-alt fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Pending Orders</h4>  
    </div>
</div>

<div class="card " style="background:white; padding:4rem;">
        <a href="{{url('admin/orders/delivered')}}">
                <i class="fas fa-file-alt fa-7x " style="color:#994D1A;"></i></a>
    
    <div class="card-body">
      <h4 class="card-title">Deliver Orders</h4>  
    </div>
</div>

 </div>
</div>
        </div>
</div>
</div>

@endsection