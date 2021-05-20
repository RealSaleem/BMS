@extends('layouts.app')
@section('content')









    <div class="row">
               <div class="col-sm-12">
                
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Users</h5><span style="float: right;">  <a href="{{route('user.create')}}" class="btn btn-primary waves-effect waves-light text-right">Add User </a></span>
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                           <table id="usertable" class="display" style="width:100%">
						        <thead>
						            <tr>
						                <th>Id</th>
						                <th>Image</th>
						                <th>Name</th>
						                <th>Email</th>
						                <th>Active</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						        <tbody>
						        	@foreach($users as $user)
						            <tr>
						                <td>{{$user->id}}</td>

						                 <td>
						                 	@if($user->image != null && $user->image != "")
											 <span><img class="img-circle " src="{{$user->image}}" style="width:40px;" alt="User Image"></span>
											@else
											 <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
											@endif

						                 </td>

						                  <td>{{$user->name}}</td>
						                   <td>{{$user->email}}</td>
						                  <!--   <td>{{$user->is_active}}</td> -->
						                      <td>
         
						                      	<label class="switch">
  <input type="checkbox" {{$user->is_active == 1 ? 'checked' : "" }}/>
  <span class="slider round"></span>
</label>
		
						            </td>
						             <td>

						              <a href="#">
						              	<i class="ti-pencil"></i>
						              </a>&nbsp;&nbsp;



						              <!--  <a href="#" style="color: red;" data-toggle="modal" data-target="#user_delete"> -->
						               	 <a href="#" style="color: red;" data-id="{{$user->id}}" onclick="openUserDeleteModal({{$user->id}})">
						              	<i class="ti-trash"></i>
						              </a>

						            </td>
						                
						            </tr>
						            @endforeach
						        
						     
						      



						        </tbody>
						        <tfoot>
						            <tr>
						               <th>Id</th>
						                <th>Image</th>
						                <th>Name</th>
						                <th>Email</th>
						                <th>Active</th>
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
