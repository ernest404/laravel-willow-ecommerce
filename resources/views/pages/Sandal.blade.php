@extends('layouts.app2')


@section('content')

<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style1.css') }}" rel="stylesheet">






	<div class="section" style="background:white; box-shadow: 10px 10px 5px #888888;">
			
			<div class="container">
				
				<div class="row">
						<div class="col-md-2  " >
								<div id="product-imgs" >
									<div class="product-preview">
										<img src="/storage/uploads/products_images/{{$product->image1}}" alt="">
									</div>
		
									<div class="product-preview">
										<img src="/storage/uploads/products_images/{{$product->image2}}" alt="">
									</div>
		
									<div class="product-preview">
										<img src="/storage/uploads/products_images/{{$product->image3}}" alt="">
									</div>
								</div>
						</div>
					
					<div class="col-md-5 ">
						<div id="product-main-img" style="height:458 px !important;">
							<div class="product-preview">
								<img src="/storage/uploads/products_images/{{$product->image1}}" height="400vh" alt="">
							</div>

							<div class="product-preview">
								<img src="/storage/uploads/products_images/{{$product->image2}}"  height="400vh" alt="">
							</div>

							<div class="product-preview">
								<img src="/storage/uploads/products_images/{{$product->image3}}" height="400vh" alt="">
							</div>

							
						</div>
					</div>

					<div class="col-md-5" >
						<div class="product-details">
							<h2 class="product-name">{{$product->name}}</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<div class="product-options">
									<dl class="row">
											<dt class="col-sm-3">Product#</dt>
											<dd class="col-sm-9">12345611</dd>
										  
											<dt class="col-sm-3">Color</dt>
											<dd class="col-sm-9">Black and white </dd>
									</dl>

								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<a href="{{route('cart.addItem',$product->id)}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
							</div>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">{{$product->category->name}}</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.zoom.min.js') }}" ></script>
        <script src="{{ asset('js/nouislider.min.js') }}" ></script>
        <script src="{{ asset('js/slick.min.js') }}" ></script>
        <script src="{{ asset('js/main.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" ></script>s
		
@endsection

