<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Todos extends Component
{
    use WithPagination;
    public $done = 0;
    public $search = '';

    public function falseTodos()
    {
        $this->resetPage();
        $this->done = 0;
    }

    public function trueTodos()
    {
        $this->resetPage();
        $this->done = 1;
    }

    #[On('todo-created')]
    public function updateList($todo)
    {
    }
    public function changeStatus($id)
    {
        $todo = Todo::find($id);
        $todo->done = !$todo->done;
        $todo->save();
    }
    public function render()
    {
        $todos = Todo::where([
            ['done', '=', $this->done],
            ['title', 'like', "%{$this->search}%"]
        ])->paginate(3);
        return view('livewire.todos', [
            'todos' => $todos,
            'done' => $this->done
        ]);
    }
}
