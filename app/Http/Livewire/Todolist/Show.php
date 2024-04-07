<?php

namespace App\Http\Livewire\Todolist;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;
use Livewire\Component;

class Show extends Component
{

    public $title;
    public $completed;
    public $description;

    public $show = false;
    public $taskId;
    public $showCreateModal = false;
    public $showDeleteModalConfirmation = false;

    public $perPage = 10;
    public $search = '';

    public function rules(): array
    {
        return (new StoreRequest())->rules();
    }


    public function render()
    {
        $tasks = Task::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')->get();

        return view('livewire.todolist.show', ['tasks' => $tasks]);
    }

    public function addTask()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->showCreateModal = false;
        $this->title = '';
        $this->description = '';
    }


    public function showCreateModal()
    {
        $this->showCreateModal = true;
    }

    public function deleteTask()
    {
        Task::find($this->taskId)->delete();
        $this->showDeleteModalConfirmation = false;
    }

    public function toggleTask($id, $completed)
    {

        Task::find($id)->update(['completed' => $completed]);
    }

    public function showConfirmation($id)
    {
        $this->taskId = $id;
        $this->showDeleteModalConfirmation = true;
    }
}
