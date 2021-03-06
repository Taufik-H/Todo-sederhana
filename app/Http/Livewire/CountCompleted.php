<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
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
            'completed'=>Todo::where('completed_at', '!=',null )->where('user_id','=',Auth::user()->id)
        ]);
    }
}
