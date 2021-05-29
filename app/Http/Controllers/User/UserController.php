<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    $users = User::all();
       return view('User.index')->with(compact('users'));
    }

   public function create()
    {
        $model =[
            'route' => route('user.store'),
            'is_edit' => false,
            'title' => 'User Create',
            'button' => 'Submit'
        ];


         return view('User.form')->with(compact('model'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->password =  Hash::make($request->password);
        if($request->image){
             $user->image = $request->image;
        }
        $user->is_active = true;
        $user->is_owner = false;
        $user->save();
        $user->assignRole($request->role);

     return redirect()->route('user.index')->with('success','User Created Successfully');  
    }

    public function edit($id)
    {
     
            $user = User::find($id);
            $model =[
                'route' => route('user.update'),
                'user' => $user,
                'is_edit' => true,
                'title' => 'User Update',
                'button' => 'Update'
            ];

            return view('User.form')->with(compact('model'));     
        
    }

    public function update(Request $request)
    {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->role){
                $user->role_id = $request->role;
                // $user->assignRole($request->role);
           }
           if($request->password){
            $user->password =  Hash::make($request->password);
            }
            if($request->image){
                 $user->image = $request->image;
            }
            $user->is_active = true;
            $user->is_owner = false;
            $user->save();
            return redirect()->route('user.index')->with('success','User Updated Successfully');       
        
    }

        public function destroy(Request $request)
    {
            $user = User::find($request->id);
            $user->delete();
            return redirect()->back()->with('success','User Deleted Successfully');       
        
    }
}
