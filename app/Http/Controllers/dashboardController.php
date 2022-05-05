<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    
    public function index(){
        $this->middleware('auth');
        $posts= posts::paginate(2);

        return view('dashboard',[
            'posts'=>$posts
        ]);
    }
}
