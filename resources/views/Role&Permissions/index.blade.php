@extends('layouts.app')

@section('title')
    <title>BMS | Role </title>
@endsection

@section('content')



    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s6  ">

                            <h4 class="card-title">Users
                            </h4>

                        </div>

                        <div class="input-field col s6  ">

                            <a href="{{ route('user.create') }}" class="btn btn-primary"
                                style="float: right;margin-right: 11px;">
                                {{ __('Add User') }}
                            </a>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col s12">
                            <table id="page-length-option" class="display">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Designation</th>
										<th>Email</th>
                                        <th>Active</th>
                                        <th >Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>

                                           

                                            <td>{{ $role->name }}</td>
                                        
                                            <td>
											
                                               

                                            </td>
                                            <td>

                                                <a href="{{url('role/edit/'.$user->id)}}">
													<i class="material-icons">create</i>
                                                </a>&nbsp;&nbsp;
												


                                                <!--  <a href="#" style="color: red;" data-toggle="modal" data-target="#user_delete"> -->
                                                <a href="{{url('role/delete/'.$user->id)}}" style="color: red;" data-id="{{ $user->id }}"  
                                                 >
													<i class="material-icons">remove_circle</i>
                                                </a>

                                            </td>

                                        </tr>
                                    @endforeach

 

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Designation</th>
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
@section('scripts')


<script type="text/javascript">

// $('.deleteUser').click(function () {
// //      alert('sfsd');
// // });


// function UserDelete(){
//     alert('sfsd');
// }


</script>

@endsection
