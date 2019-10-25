<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable=['total','delivered'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function orderItems()
    {
        return $this->belongsToMany(Product::class,'order_product')->withPivot('qty','total');
    }

    public static function createOrder($request){
       
        // $validatedData = $request->validate([
        //     'size' => 'required'
        // ]);
        
        
        $user=Auth::user();
        
        $order=$user->orders()->with('orderItems')->create([
            'total'=>Cart::subtotal(),
            'delivered'=>0
        ]);
//insert cartitems into product_order table
        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->with('orderItems')->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'size'=>$cartItem->options->size,
                'price'=>$cartItem->price,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }
        return response()->json('Form is successfully validated and data has been saved');
  }

}

