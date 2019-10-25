<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\area;
use App\County;
use App\Address;
use App\Order;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Mail\Invoice;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{
    // public function step1()
    // {

    //     if(Auth::check()){
    //         return redirect()->route('checkout.shipping'); 
    //     }
         
    //     return redirect('login');
    // }
    // public function shipping(){
        
    //     return redirect()->route('checkout.storePayment');
       
    // }
    
    public function confirmorder(Request $request)
    {
        Order::createOrder($request);
        
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $userDetails = User::where('id',$user_id)->latest('updated_at')->first();
        $shippingDetails = Address::where('user_id',$user_id)->latest('updated_at')->first();
        $shippingDetails = json_decode(json_encode($shippingDetails));
        $userorder = Order::where('user_id',$user_id)->latest('updated_at')->first();
        $orders = json_decode(json_encode($userorder));
        
        $categories=Category::all();
        
        $products=Product::all();
        $time=Carbon::now()->addMinute(1);
        
        // Mail::to($userorder->user)->later($time,new Invoice($orders,$shippingDetails,$userorder,$userDetails));

        return view('pages.confirmorder',compact('categories','shippingDetails','userorder','orders','userDetails','time'));
    }

    public function shipping(Request $request)
    {
        // $this->validate($request,[
        //     'qty'=>'required',
        // ]);
       //Order::createOrder($request);
       return redirect()->route('checkout.shippingform');
       
    
        //redirect user to some page
       

    }
    public function shippingform(){
        $products=Product::all();
        $categories=Category::all();
        $counties=County::all();
        $areas=area::all();
        $cartItems=Cart::content();
        return view('ShippingForm',compact('cartItems','products','categories','counties','areas'));
    }
        
    public function placeorder(request $request){
        
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $userDetails = User::where('id',$user_id)->latest('updated_at')->first();
        $shippingDetails = Address::where('user_id',$user_id)->latest('updated_at')->first();
        $shippingDetails = json_decode(json_encode($shippingDetails));
        $userorder = Order::where('user_id',$user_id)->latest('updated_at')->first();
        $orders = json_decode(json_encode($userorder));
        
        $categories=Category::all();
        
        $products=Product::all();
        $time=Carbon::now()->addMinute(1);
        Mail::to($userorder->user)->later($time,new Invoice($orders,$shippingDetails,$userorder,$userDetails));
        
        Cart::destroy();
       
        return view('pages.sucessful',compact('products','categories'));
        
    }

}
