<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
class TodoCreate extends Component
{
    public $title;
    public function TodoCreate(){
         $todo =Todo::create(['title' => $this->title]);
         $this->emit('magicreload');
         $this->title ='';
    }
   
  
    public function render()
    {
  
        return view('livewire.todo-create');
  
    } 
 
}
