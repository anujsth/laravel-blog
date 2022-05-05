<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        // if(!auth()->check($request->only('email','password'))){
        //     return back()->with('status','credentials doesnot match');
        // }
        
        return redirect()->route('dashboard');
        
    }
}
