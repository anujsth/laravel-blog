<?php
namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class LikeController extends Controller
{
     public function store(posts $post, Request $request){
        $post->likes()->create([
            'user_id'=> $request->user()->id,
            
        ]);
        
        return back();
     }
}
