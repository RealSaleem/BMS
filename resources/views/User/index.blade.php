@extends('layouts.app')

@section('title')
    <title>BMS | User</title>
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

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>

                                            <td>
                                                @if ($user->image != null && $user->image != '')
                                                    <span><img class="img-circle " src="{{ $user->image }}"
                                                            style="width:40px;" alt="User Image"></span>
                                                @else
                                                    <span><img class="img-circle " src="assets/images/avatar-1.png"
                                                            style="width:40px;" alt="User Image"></span>
                                                @endif

                                            </td>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <!--   <td>{{ $user->is_active }}</td> -->
                                            <td>
												<div class="switch">
													<label>
													  <input type="checkbox"  {{ $user->is_active && $user->is_active != 1  ? '' : 'checked'  }} >
													  <span class="lever"></span>
													</label>
												  </div>
                                               

                                            </td>
                                            <td>

                                                <a href="#">
													<i class="material-icons">create</i>
                                                </a>&nbsp;&nbsp;
												


                                                <!--  <a href="#" style="color: red;" data-toggle="modal" data-target="#user_delete"> -->
                                                <a href="#" style="color: red;" data-id="{{ $user->id }}"
                                                    onclick="openUserDeleteModal({{ $user->id }})">
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

    </script>

@endsection
