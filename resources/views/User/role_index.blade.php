@extends('layouts.app')
@section('content')

 


	







    <div class="row">
               <div class="col-sm-12">
                
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Role</h5><span style="float: right;">  <a href="{{route('role.create')}}" class="btn btn-primary waves-effect waves-light text-right">Add Role </a></span>
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                           <table id="usertable" class="display" style="width:100%">
						        <thead>
						            <tr>
						                <th>Id</th>
						                <th>Name</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						        <tbody>
						        	@foreach($roles as $role)
						            <tr>
						                <td>{{$role->id}}</td>
						                  <td>{{$role->name}}</td>
						             <td>

						              <a href="#">
						              	<i class="ti-pencil"></i>
						              </a>&nbsp;&nbsp;
						               <a href="#" style="color: red;">
						              	<i class="ti-trash"></i>
						              </a>

						            </td>
						        
						                
						            </tr>
						            @endforeach
						        
						      
						      
						        </tbody>
						        <tfoot>
						            <tr>
						            	 <th>Id</th>
						                <th>Name</th>
						                <th>Action</th>
						               
						            </tr>
						        </tfoot>
						    </table>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>
    </div>
















@endsection
