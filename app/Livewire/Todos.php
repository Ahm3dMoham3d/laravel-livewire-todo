<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Todos extends Component
{
    
    public function render()
    {
        $todos = Todo::all();
        return view('livewire.todos' , compact('todos'));
    }
}
