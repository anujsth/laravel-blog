<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        return view('app.post');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            
        ]);
        
        $request->user()->posts()->create([
            'body'=>$request->body,
            'title'=>$request->title,
        ]);

        return redirect()->route('dashboard');
    }
}
