@extends('multiauth::layouts.admin1')
@section('content')
<div class="main-content">
  <div class="">
      <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h6>Counties:</h6></a>
          <ul class="navbar-nav">
                @if(!empty($counties))
                @forelse($counties as $county)
                    <li onclick="colorchange()" class="nav-item active" ;>
                        <a class="nav-link" href="{{route('county.show',$county->id)}}" style="text-transform:capitalize">{{$county->county_name}}</a>
                    </li>
                    <script>
                        function colorchange(){
                            document.getElementByClassName("nav-item").style.background="red";
                        }
                    </script>
                @empty
                <li class=>No data</li>
                @endforelse
                @endif
                </ul>
                <ul class="nav navbar-nav ml-auto ">
              <li>
                    <button type="button" class="newsletter_submit_btn " data-toggle="modal" data-target="#exampleModal">
                            Add County
                    </button>
                </li>
                
                <li>
                    <button type="button" class="newsletter_submit_btn "  data-toggle="modal" data-target="#exampleModal2">
                            Add area
                    </button>
                </li> 
                </ul>
                
            
          
      </nav>

      @if(isset($areas))
      <table class="table table-striped" style="background:white; width:85%">
        <thead>
          <tr>
            <th>id</th>
            <th>Area name</th>
          </tr>
        </thead>
        <tbody>
  @forelse($areas as $area)
      <tr>
        <td>{{$area->id}}</td>
          <td>{{$area->area_name}}</td>
      </tr>
        @empty
          <tr><td>no data</td></tr>
          @endforelse
  
          </tbody>
      </table>
      @endif
                  
                <!-- Modal1 -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                     {!! Form::open(['route'=>'county.store','method'=>'post']) !!}
                        <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Area</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                        {{ Form::label('county name', 'County Name')}}
                                        {{ Form::text('name',null,array('class'=>'form-control'))}}   
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

             <!-- Modal2 -->
             <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                  {!! Form::open(['route'=>'area.store','method'=>'post','files'=>true]) !!}
                     <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                             <div class="form-group">
                                     {{ Form::label('area name', 'Area Name')}}
                                     {{ Form::text('name',null,array('class'=>'form-control'))}}   
                             </div>
                             <div class="form-group">
                                <select id="county_id" name="county_id" class="form-control">
                                  <option value="">Select Country</option>
                                  @foreach($counties as $county)
                                    <option value="{{ $county->id }}" >{{ $county->county_name }}</option>
                                  @endforeach
                                </select>
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
    
    

  </div>
</div>
</div>
@endsection