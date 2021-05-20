<?php

namespace App\Http\Controllers\Banquet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banquet;
use App\Models\User;
use Auth;

class BanquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Banquet.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $id = Auth::user()->id;
                $banquet = new banquet();
                $banquet->name = $request->name;
                $banquet->address = $request->address;
                $banquet->user_id = $id;
                $banquet->contact_number = $request->number;
                $banquet->max_capacity = $request->capicity;
                $banquet->is_active = 0;
      $result = $banquet->save();

     
      $user = User::find($id);
      $user->bq_id = $banquet->id;
      $user->save();

      if($result){
        return view('dashboard');
      }
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
