@extends('multiauth::layouts.admin1')
@section('content')
<div class="main-content">
  <div class="">
      <div class="container-fluid">

            <center><h2>Orders</h2></center>
            
        
            <ul class="list-group justify-content-between" style="list-style-type: none;">
                @foreach($orders as $order)
                
                    <li list-group-item>
                        <hr>
                        <h4>Ordered by {{$order->user->name}}</h4>
                        <table class="table  table-dark">
                            <tr>
                                <th>Items</th>
                                <th>size</th>
                                <th>qty</th>
                                <th>price</th>
                                <th>total</th>
                            </tr>
                            @foreach($orders->orderItems as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->size}}</td>
                                    <td>{{$item->pivot->qty}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->pivot->total}}</td>
                                </tr>
                                
                            @endforeach
                            <tr>
                                    <td> Total Price</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> {{$order->total}}</td>
                                </tr>
                        </table>
                        <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                                {{csrf_field()}}
                                <label for="delivered">Delivered</label>
                                <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                                <input type="submit" value="Submit" style="background:#666666; color:white;">
                        </form>
                    
                    </li>
        
                @endforeach
        
            </ul>
        
  </div>
</div>
</div>
@endsection