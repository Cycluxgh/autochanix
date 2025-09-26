<?php

namespace App\Livewire\Complaints;

use App\Models\Complaint;
use App\Util;
use Livewire\Component;

class Index extends Component
{
    use Util;

    public function edit(int $complaint_id)
    {
        $this->redirectRoute('complaints.create', [
            'complaintId' => $this->encrypt($complaint_id),
        ]);
    }

    public function delete(int $complaint_id)
    {
        Complaint::where('id', $complaint_id)->delete();

        session()->flash('success', 'Complaint deleted successfully.');

        $this->redirectRoute('complaints.index');
    }

    public function render()
    {
        $complaints = Complaint::all();
        return view('livewire.complaints.index', compact('complaints'));
    }
}
