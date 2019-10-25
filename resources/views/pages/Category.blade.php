@extends('layouts.app2')
@section('content')

<div class="row">
  <div class="col">
    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

      <!-- Products -->
      
      @forelse($products as $product)
      <div class="product-item">
        <div class="product discount product_filter">
          <div class="product_image">
            <img src="/storage/uploads/products_images/{{$product->image1}}" alt="">
          </div>
          <div class="favorite favorite_left"></div>
          <div class="product_info">
            <h6 class="product_name"><a href="{{url('/Sandal',$product->id)}}">{{$product->name}}/*product color*/</a></h6>
            <div class="product_price">{{$product->price}}<span>{{$product->price}}</span></div>
          </div>
        </div>
        <div class="red_button add_to_cart_button"><a href="{{route('cart.addItem',$product->id)}}">add to cart</a></div>
      </div>
      @empty
        <h3>Products Not Available</h3>
                       
     @endforelse
    </div>
  </div>
</div>
    
@endsection