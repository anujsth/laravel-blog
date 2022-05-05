<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class posts extends Model
{
    use HasFactory;

    protected $fillable =[
        'body',
        'title',
        
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
