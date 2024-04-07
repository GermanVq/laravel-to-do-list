<?php

namespace App\Http\Livewire\Todolist;

use App\Models\Task;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.todolist.show', ['tasks' => Task::all()]);
    }
}
