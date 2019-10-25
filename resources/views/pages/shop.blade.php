<script>
  $(document).ready(function(){
    $(".add_to_cart_button").click(function(){
      $.ajax({url: "demo_test.txt", success: function(result){
        $("#div1").html(result);
      }});
    });
  });
  </script>
  @section('content')
  @extends('layouts.app3')

  <div id="shop">
    <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h3>{{$type}} Collection</h3>
                        </div>
                    </div>
                </div>
                <hr>
                
                <div class="row" >
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
            </div>
        </div>
</div>
    
@endsection
