<?php

namespace App\Livewire\Complaint;

use App\Models\Complaint;
use App\Util;
use Livewire\Component;

class Index extends Component
{
    use Util;

    public function render()
    {
        $complaints = Complaint::all();
        return view('livewire.complaint.index', compact('complaints'));
    }
}
