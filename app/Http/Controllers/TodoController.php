<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public $listeners = [
        'magicreload'
    ];
    public function magicreload(){

    }
    public function index(){
 return view('dashboard',[
     'todo' => Todo::get(),
     'completed'=>Todo::where('completed_at')->get(),
 ]);
    }

    public function store(){
        
    }
}