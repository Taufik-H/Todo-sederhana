<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoCreate extends Component
{
    public $title;
    
    public function TodoCreate(){
         $todo =Todo::create([
             'title' => $this->title,
             'user_id'=> Auth::user()->id
        
        ]);
         $this->emit('magicreload');
         $this->title ='';
    }
   
  
    public function render()
    {
  
        return view('livewire.todo-create');
  
    } 
 
}
