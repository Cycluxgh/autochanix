<?php

namespace App\Livewire\Complaints;

use App\Models\Complaint;
use App\Util;
use Livewire\Component;

class Show extends Component
{
    use Util;

    public string $complaintId;
    public ?Complaint $complaint;

    public function mount(string $complaintId)
    {
        $this->complaint = Complaint::where('id', $this->decrypt($complaintId))->first();
    }

    public function render()
    {
        return view('livewire.complaints.show');
    }
}
