<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Component;

class MakeTodo extends Component
{


    #[Validate('required|unique:todos')]
    public $title = '';

    #[Validate('required')]
    public $description = '';

    public function addNewTask()
    {
        $validated = $this->validate();
        $todo = Todo::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        $this->reset();
        // $this->session()->flash('status', 'Todo created successfully.');
        $this->dispatch('todo-created', $todo);
    }

    public function render()
    {
        return view('livewire.make-todo');
    }
}
