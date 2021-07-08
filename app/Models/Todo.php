<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Todo extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'user_id',
        'title',
        'completed_at'
    ];

    public function isCompleted(){
        return $this->completed_at !== null;
    }
    public function isUser(){
        return $this->user_id == Auth::user()->id;
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
