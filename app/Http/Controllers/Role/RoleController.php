<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
       $roles = Role::all();

         return view('User.role_index')->with(compact('roles'));
    }

   
    public function create()
    {
         $permissions = Permission::all();
         return view('User.role_form')->with(compact('permissions'));
    }

   
    public function store(Request $request)
    {
       $role = Role::create(['name' => $request->name]);
      $result =  $role->syncPermissions($request->permission);
       if($result){
        return redirect()->route('role.index')->with('success','Role Created & Permission Assigned Successfully');
    }
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

    public function storePermission(Request $request)
    {
    $permission = Permission::create(['name' => $request->permission]);

    if($permission){
        return redirect()->route('role.index')->with('success','Permission created Successfully');
    }
    }
}
