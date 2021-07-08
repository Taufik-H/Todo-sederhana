<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListTodo extends Component
{   use WithPagination;
    
    public $TodoId;
    public $TodoIdForm;
    public $text;


     protected $listeners = [
'magicreload',
];
    public function magicreload(){
        
    }


  
    
    public function render()
    {
        return view('livewire.list-todo',[
            'todo' =>Todo::where('user_id','=',Auth::user()->id)->orderBy('completed_at','ASC')->orderBy('id','ASC')->paginate(4)
        ]);
    } 
    
    public function TodoUpdateForm($postId){
    
    $this->TodoIdForm = $postId;
  
    

   }
    public function TodoUpdate($postId){
    $todo = Todo::find($postId);
    $todo->completed_at = now();
    $this->emit('magicreload');
    $todo->save();
    
    return back();
   }
   public function update($postId){
      
        $update = Todo::find($postId);
        $update->title = $this->text ?? $update->title;
        $update->save();
        $this->TodoIdForm = 0;
    }

public function destroy($postId){
     Todo::find($postId)->delete();
     $this->emit('magicreload');

}
  
}
