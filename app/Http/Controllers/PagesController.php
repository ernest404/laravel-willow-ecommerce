<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Shop($type='')
    {
        //displays order not delivered
        if($type=='Men')
        {
            $categories=Category::all();
            $products=Product::where('category_id','1')->paginate(15);
        }
        elseif($type=='Women'){
            $categories=Category::all();
            $products=Product::where('category_id','2')->paginate(15);
        }
        elseif($type=='Children'){
            $categories=Category::all();
            $products=Product::where('category_id','3')->paginate(15);
        }
        elseif($type=='All'){
            $categories=Category::all();
            $products=Product::orderByRaw('RAND()')->paginate(15);
        }
        else{
            $categories=Category::all();
            $products='Category not available';
        }
        return view('pages.Shop',compact('products','categories','type'));
    }
    public function index(){
        $productside=Product::paginate(4);
        $products=Product::paginate(8);
        $categories=Category::all();
        return view('pages.index',compact('products','categories','productside'));
    }

    public function About(){
        $products=Product::all();
        $categories=Category::all();
        return view('pages.About',compact('products','categories'));
    }
    
    public function Show($id)
    {
        $categories=Category::all();
        $product=Product::find($id);
        return view('pages.Sandal',compact('product','categories'))->with('product',$product);  
    }
    public function admin(){
        $role = roles::all()->toArray();
        return view('vendor.multiauth.admin.home');
    }  
}
