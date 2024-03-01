<?php

namespace App\Livewire;

use App\Models\Task as ModelsTask;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Task extends Component
{
    public function complate($id){
        session()->flash('status', 'Task successfully Complated.');
        ModelsTask::find($id)->update(['status'=>'completed']);
    }
    
    public function delete($id){
        session()->flash('status', 'Task successfully Deleted.');
        ModelsTask::find($id)->delete();
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.task',[
            'task' => ModelsTask::orderBy('id', 'desc')->get()
        ]);
    }
}
