@extends('multiauth::layouts.admin1')
@section('content')
<div class="main-content">
  <div class="">
      <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h6>Categories:</h6></a>
          <ul class="navbar-nav">
                @if(!empty($categories))
                @forelse($categories as $category)
                    <li onclick="colorchange()" class="nav-item active" ;>
                        <a class="nav-link" href="{{route('category.show',$category->id)}}" style="text-transform:capitalize">{{$category->name}}</a>
                    </li>
                    <script>
                        function colorchange(){
                            document.getElementByClassName("nav-item").style.background="red";
                        }
                    </script>
                @empty
                <li class=>No data</li>
                @endforelse
                <li>
                  
                    <form action="{{route('product.destroy',$category->id)}}"  method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                    </form>
                
            </li>
                @endif
                </ul>
                <ul class="nav navbar-nav ml-auto ">
                  
              <li>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                            Add Category
                    </button>
                </li>  
                </ul>
                
            
          
      </nav>

      
                  
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                     {!! Form::open(['route'=>'category.store','method'=>'post','files'=>true]) !!}
                        <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                        {{ Form::label('name', 'Name')}}
                                        {{ Form::text('name',null,array('class'=>'form-control'))}}   
                                </div>
                                <div class="form-group">
                                        {{ Form::label('image', 'Image')}}
                                        {{ Form::file('image',array('class'=>'form-control'))}}   
                                </div>
                            
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {{ Form::submit('Submit',array('class'=>'btn btn-default'))}}
                                </div>
                                
                         </div>
                        </div>
                        
                      </div>
                    </div>
                    {!! Form::close() !!}
             </div>
        </ul>
    </div>
    @if(isset($products))

    <table class="table table-striped" style="background:white; width:85%">
    	<thead>
    		<tr>
          <th>Image</th>
          <th>Products</th>
          <th>Price</th>
    		</tr>
    	</thead>
    	<tbody>
@forelse($products as $product)
    <tr><td><img class="img-fluid" src="/storage/uploads/products_images/{{$product->image1}}" alt="" height="50" width="50"></td>
      <td>{{$product->name}}</td>
        <td>Ksh {{$product->price}}</td>
    </tr>
    	@empty
        <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
    @endif
</div>
</div>
</div>
@endsection