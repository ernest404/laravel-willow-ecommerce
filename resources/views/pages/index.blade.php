@extends('layouts.app')
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
  {{-- Boxes  --}}
	
	{{--  <div class="boxes">
		<div class="section_container">
			<div class="container">
				<div class="row">
					@forelse ($categories as $category)
					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="storage/uploads/categories_images/{{$category->image}}" width="357.66" height="193.33" alt=""></div>
							<div class="box_title trans_200"><a href="/{{$category->name}}">{{$category->name}}s</a></div>
						</div>
					</div>
					@empty
					<h3>Categories not available!</h3>
					@endforelse
				</div>
			</div>
		</div>
	</div>  --}}

  <div id="shop">
			<div class="new_arrivals">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<div class="section_title new_arrivals_title">
									<h3>Featured Collections</h3>
								</div>
							</div>
						</div>
						<hr>
						
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
            <div class="pagination">{{$products->links()}}</div>
					</div>
				</div>
      </div>
      <!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row ">
						<span class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></span>
						<span class="benefit_content">
							<h6>free shipping</h6>
							<p>Applies on weekends</p>
            </span>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<span class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></span>
						<span class="benefit_content">
							<h6>cash on delivery</h6>
							<p>Pay cash only when delivered</p>
						</span>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<span class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></span>
						<span class="benefit_content">
							<h6>7 days return</h6>
							<p>Terms and conditions apply</p>
						</span>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<span class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
						<span class="benefit_content">
							<h6>open all week</h6>
							<p>24/7</p>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
      <div class="page-middle-banner">
          <div class="opacity">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                          <h4>Newsletter</h4>
                          <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <form action="post">
                          <div class="newsletter_form">
                            <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
          </div> 
        </div> 

        <div id="contact-section">
            <div class="container">
              <!-- Contact Form -->
              <div class="send-message">
                <h2>Send Message</h2>
    
                <form action="inc/sendemail.php" class="form-validation" autocomplete="off" method="post">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single-input">
                        <input type="text" placeholder="First Name*" name="Fname">
                      </div> <!-- /.single-input -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single-input">
                        <input type="text" placeholder="Last Name*" name="Lname">
                      </div> <!-- /.single-input -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="single-input">
                        <input type="email" placeholder="Your Email*" name="email">
                      </div> <!-- /.single-input -->
                    </div>
                  </div> <!-- /.row -->
                  <div class="single-input">
                    <input type="text" placeholder="Subject" name="sub">
                  </div> <!-- /.single-input -->
                  <textarea placeholder="Write Message" name="message"></textarea>
    
    
                  <button class="tran3s p-color-bg">Send Message</button>
                </form>
    
    
                <!-- Contact Form Validation Markup -->
                <!-- Contact alert -->
                <div class="alert-wrapper" id="alert-success">
                  <div id="success">
                    <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="wrapper">
                               <p>Your message was sent successfully.</p>
                           </div>
                      </div>
                  </div> <!-- End of .alert_wrapper -->
                  <div class="alert-wrapper" id="alert-error">
                      <div id="error">
                           <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                           <div class="wrapper">
                               <p>Sorry!Something Went Wrong.</p>
                          </div>
                      </div>
                  </div> 
              </div> 
            </div> 
          </div>
     
    
    
  
        
  

  
@stop





        
            
       
        
        