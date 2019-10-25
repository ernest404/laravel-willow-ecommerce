@extends('vendor.multiauth.layouts.admin1')

@section('content')
<div class="main-content">
    <div class="">
        <div class="container-fluid">
<table class="table table-striped" style="background:white;">
    	<thead>
    		<tr>
          <th>Image</th>
          <th>Products</th>
          <th>Category</th>
          <th>Price</th>
          <th></th>
          <th></th>
    		</tr>
    	</thead>
    	<tbody>
    @forelse($products as $product)
    <tr><td><img class="img-fluid" src="/storage/uploads/products_images/{{$product->image1}}" alt="" height="50" width="50"></td>
      <td>{{$product->name}}</td>
      <td>{{$product->category->name}}</td>
        <td>Ksh {{$product->price}}</td>
        <td></td>
    <td>
        <form action="{{route('product.destroy',$product->id)}}"  method="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
        </form>
    </td>
    </tr>

    	@empty
        <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
        </div>
    </div>
</div>
    @stop         
    
