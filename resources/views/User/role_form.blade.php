@extends('layouts.app')
@section('content')
 

<style type="text/css">
	.userform{
		 margin: auto;
  width: 100%;
  padding: 10px;
	}



</style>


   









			
 				
                     <div class="card" style="margin-top: 49px;">
	 									<ul class="nav nav-tabs  tabs" role="tablist">
	                                          <li class="nav-item">
	                                             <a class="nav-link active" data-toggle="tab" href="#role" role="tab">Role</a>
	                                          </li>
	                                          <li class="nav-item">
	                                             <a class="nav-link" data-toggle="tab" href="#permission" role="tab">Permission</a>
	                                          </li>

	                                    </ul>
									<div class="tab-content tabs">
                                          <div class="tab-pane active" id="role" role="tabpanel">
                                            <form method="post" action="{{route('role.store')}}">
				@csrf
                        <div class="card-header">
                           <h5 class="card-header-text">Add Role</h5>
                           <div class="card-block">
	 							<div class="row">
	                                 <div class="form-group col-md-6">
	                                    <input class="form-control" placeholder="Role Name" type="text" name="name" value="{{old('name')}}" id="example-text-input">
	                                 </div>
	                            </div>
                            	<div class=" row">
                            		@foreach($permissions as $permission)
	                                 <input type="checkbox" name="permission[]" value="{{$permission->id}}">
                            		<label>{{$permission->name}}</label>&nbsp;&nbsp;
	                                 @endforeach
                            		

<!-- 	<div class="checkbox-fade fade-in-primary">
											<label>
											<input type="checkbox" value="" class="per">
											<span class="cr"><i class="cr-icon fa fa-check txt-primary"></i></span> Primary
										</label>
										</div> -->






	                            <!-- 		 <div class="form-group col-md-4">
	                                  <select name="role" class="form-control"> 
	                                  	<option value="">Select</option>
	                                  	@foreach($permissions as $permission)
	                                  <option value="$permission->id">{{$permission->name}}</option>
	                                  @endforeach
	                                  </select>
	                                 </div> -->
	                                
                            		</div>
                        		</div>
                          </div>
                           <div class="card-footer">
                           	<span style="float: right;">  <button type="Submit"  class="btn btn-primary waves-effect waves-light text-right">Submit </button></span>
                           </div>
                           </form>
                      </div>
                 
		
                                         
                                          <div class="tab-pane" id="permission" role="tabpanel">
                       <form method="post" action="{{route('permission.store')}}">
				@csrf
                        <div class="card-header">
                           <h5 class="card-header-text">Add Permission</h5>
                           <div class="card-block">
	 							<div class="row">
	                                 <div class="form-group col-md-6">
	                                    <input class="form-control" placeholder="Permission Name" type="text" name="permission" value="{{old('permission')}}" id="example-text-input">
	                                 </div>
	                               
	                            </div>
                          
                        		</div>
                          </div>
                           <div class="card-footer">
                           	<span style="float: right;">  <button type="Submit"  class="btn btn-primary waves-effect waves-light text-right">Submit </button></span>
                           </div>
                           </form>
                                          </div>
                                        </div>
                                    </div>




@endsection
