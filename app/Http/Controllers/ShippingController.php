<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shippingdetail;
class ShippingController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Shippingdetail=new Shippingdetail;
        $Shippingdetail->name=$request->input('name');
        $Shippingdetail->billing_address=$request->input('billing_address');
        $Shippingdetail->country=$request->input('country');
        $Shippingdetail->county=$request->input('county');
        $Shippingdetail->area=$request->input('area');
        $Shippingdetail->delivery_address=$request->input('delivery_address');
        $Shippingdetail->phone=$request->input('phone');
        $Shippingdetail->save();
        return redirect('stripe1')->with('Order successfully created');
     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
