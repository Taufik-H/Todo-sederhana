<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class CountCompleted extends Component
{
     protected $listeners = [
         'magicreload'
        ];
     public function magicreload(){

     }
        
    
    public function render()
    {
        return view('livewire.count-completed',[
            'completed'=>Todo::where('completed_at', '!=',null)
        ]);
    }
}
