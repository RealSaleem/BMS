<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        // dd(Auth::user()->banquet->count());

        if(Auth::user()->banquet->count() > 0){
        return view('dashboard');
    }
    else
    {
         return redirect()->route('banquet.create');
    }
    }
}
