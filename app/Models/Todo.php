<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'title',
        'completed_at'
    ];

    public function isCompleted(){
        return $this->completed_at !== null;
    }
    
 
}
