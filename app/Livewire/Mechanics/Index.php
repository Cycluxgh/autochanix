<?php

namespace App\Livewire\Mechanics;

use App\Models\Mechanic;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $mechanics = Mechanic::all();
        return view('livewire.mechanics.index', compact('mechanics'));
    }
}
