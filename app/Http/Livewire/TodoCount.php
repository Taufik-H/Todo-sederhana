<?php

namespace App\Http\Livewire;
use  App\Http\Controllers\TodoController;
use App\Models\Todo;
use Livewire\Component;

class TodoCount extends Component
{
        protected $listeners = [
'magicreload',
];
    public function magicreload(){
        
    }
    public function render()
    {
        return view('livewire.todo-count',[
            'todo'=>Todo::get(),
            
        ]);
    }
}
