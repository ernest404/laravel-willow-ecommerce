@extends('layouts.app2')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="cart_section">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div style="background:#222222; opacity:0.6;" class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
									<li style="color:white;">Product</li>
									<li style="color:white;">Color</li>
									<li style="color:white;">Size</li>
									<li style="color:white;">Price</li>
									<li style="color:white;">Quantity</li>
                                    <li style="color:white;">Total</li>
                                    <li style="display:none;">remove</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">
                                        @foreach ($cartItems as $cartItem )
                                        <div>
                                                <div style="
                                                position: absolute;
                                                top: 0px;
                                                right: 0px;">
                                                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                                                                {{csrf_field()}}
                                                                {{method_field('DELETE')}}
                                                                <span><button  value="submit" style="background:transparent; border: 0;"><i class="fa fa-times times"></i></button></span>
                                                            </form>
                                                </div>
                                        </div>
                                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
											<div><div class="product_image"><img src="/storage/uploads/products_images/{{$cartItem->image}}" height="140" width="123" style=" border: 1px solid #ddd;
                                                border-radius: 4px;
                                                padding: 5px;" alt=""></div></div>
											<div class="product_name"><a href="product.html">{{$cartItem->name}}</a></div>
										</div>
										<div class="product_color text-lg-center product_text"><span>Color: </span>Brown</div>
										<div class="product_size text-lg-center product_text" ><span>Size: </span>{!! Form::select('size', [' '=>' ','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48'] , $cartItem->options->has('size')?$cartItem->options->size:' ', array("onchange"=>"javascript:this.form.submit()") ) !!}</div>
										<div class="product_size text-lg-center product_text"><span>Price: </span>Ksh {{$cartItem->price}}</div>
                                       
                                        
											<div class=" ml-lg-auto mr-lg-auto product_text text-lg-center product_num" >
												<span>Quantity:</span><input style="width:3em;" name="qty" onchange="javascript:this.form.submit();" type="number" min="1" value="{{$cartItem->qty}}">
                                            </div>

                                      
                                        
                                        
                                        
                                        <div class="product_total text-lg-center product_text"><span>Total: </span>
                                            <?php $itemprice= (int)$cartItem->price;
                                            $itemqty=(int)$cartItem->qty;
                                            $total=$itemprice*$itemqty;
                                                echo 'Ksh ';
                                                echo $total;?>

                                        </div> 
                                        {!! Form::close() !!} 
                                        
                                    </li>
                                    <hr style="border-top: 1px solid #a5a5a5;">
                                   
                                    @endforeach
								</ul>
							</div>

							<!-- Cart Buttons -->
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section_container cart_extra_container">
			<div class="container">
				<div class="row">
					<!-- Cart Total -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_2">
							<div style="background:#222222; opacity:0.7; " class="cart_extra_content cart_extra_total">
								<div style="color:white;"class="cart_extra_title">Cart Total</div>
								
								<ul class="cart_extra_total_list" >
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div style="color:white;" class="cart_extra_total_title">Total item(s)</div>
										<div style="color:white;" class="cart_extra_total_value ml-auto">{{Cart::count()}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div style="color:white;"class="cart_extra_total_title">Subtotal</div>
										<div style="color:white;"class="cart_extra_total_value ml-auto">Ksh {{Cart::subtotal()}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div style="color:white;"class="cart_extra_total_title">Shipping</div>
										<div style="color:white;"class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">Ksh {{Cart::subtotal()}}</div>
									</li>
                                </ul>
                                <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                                    <div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div class="button button_continue trans_200"><a href="{{route('checkout.shipping')}}">proceed to checkout</a></div>
                                        <div class="button button_clear  trans_200"><a href="/">continue shopping</a></div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection
