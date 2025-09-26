<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use App\Util;
use Livewire\Component;

class Index extends Component
{
    use Util;

    public function view(int $appointmentId)
    {
        $appointment = Appointment::where('id', $appointmentId)->first();
        $this->redirectRoute('appointments.create', [
            'complaintId' => $this->encrypt($appointment->complaint_id),
            'appointmentId' => $this->encrypt($appointmentId),
            'view' => 'view',
        ]);
    }

    public function edit(int $appointmentId)
    {
        $appointment = Appointment::where('id', $appointmentId)->first();
        $this->redirectRoute('appointments.create', [
            'complaintId' => $this->encrypt($appointment->complaint_id),
            'appointmentId' => $this->encrypt($appointmentId),
        ]);
    }

    public function delete(int $id)
    {
        Appointment::where('id', $id)->delete();

        session()->flash('success', 'Appointment Deleted Successfully');
        $this->redirectRoute('appointments.index');
    }

    public function render()
    {
        $appointments = Appointment::all();
        return view('livewire.appointment.index', compact('appointments'));
    }
}
