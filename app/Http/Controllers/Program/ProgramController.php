<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program\Program;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProgramController extends Controller
{
   public function index()
    {
        $program = Program::all();
       
         return view('Program.index')->with(compact('program'));
    }


    public function create()
    {
         
         return view('Program.form');
    }

     public function store(Request $request)
    {

        $program = new Program();
        $program->name =$request->name;
        $program->code = $request->code;
         
         $program->added_by = Auth::user()->id;
         $program->is_active = 1;
         $program->save();

         return redirect()->route('program.index')->with('success','Program Added Successfully');


    }
}
