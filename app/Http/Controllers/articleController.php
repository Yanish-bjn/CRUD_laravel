<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class articleController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = users::all();
        return view('/article',compact('user'));
    }
    

 public function create(){
   //
 }
}
