@extends('layouts.app')
@section('content')

<style type="text/css">
	.userform{
		 margin: auto;
  width: 100%;
  padding: 10px;
	}

</style>


			<form method="post" action="{{route('user.store')}}">
				@csrf
 				<div class="col-lg-10 userform">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="card-header-text">Add User</h5>
                           <div class="card-block">
	 							<div class="row">
	                                 <div class="form-group col-md-6">
	                                    <input class="form-control" placeholder="User Name" type="text" name="name" value="{{old('name')}}" id="example-text-input">
	                                 </div>
	                                 <div class="form-group col-md-6">
	                                    <input class="form-control" name="email" type="email" placeholder="User Email" value="{{old('email')}}" id="example-text-input">
	                                 </div>
	                            </div>
                            	<div class=" row">
	                            		 <div class="form-group col-md-4">
	                                  <select name="role" class="form-control"> 
	                                  <option value="1">admin</option>
	                                  </select>
	                                 </div>
	                                 <div class="form-group col-md-4">
	                                    <input class="form-control" placeholder="Password" type="password" name="password" value="{{old('password')}}" id="example-text-input">
	                                 </div>
	                                 <div class="form-group col-md-4">
	                                    <input class="form-control" name="confirm_password" type="password" placeholder="Confirm Password" value="{{old('confirm_password')}}" id="example-text-input">
	                                 </div>

                            		</div>
                        		</div>
                          </div>
                           <div class="card-footer">
                           	<span style="float: right;">  <button type="Submit"  class="btn btn-primary waves-effect waves-light text-right">Submit </button></span>
                           </div>
                      </div>
                 </div>
			</form>



@endsection
