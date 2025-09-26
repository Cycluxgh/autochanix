<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\Complaint;
use App\Util;
use Livewire\Attributes\Url;
use Livewire\Component;

class Create extends Component
{
    use Util;

    public $date;
    public $time;

    #[Url]
    public string $appointmentId;
    #[Url]
    public string $view;

    public Complaint $complaint;
    public Appointment $appointment;

    public function mount(string $complaintId)
    {
        $this->complaint = Complaint::where('id', $this->decrypt($complaintId))
            ->first();
    }

    public function save()
    {
        try {
            Appointment::create([
                'date' => $this->date,
                'time' => $this->time,
                'user_id' => auth()->id(),
                'complaint_id' => $this->complaint->id ?? null,
            ]);

            session()->flash('success', 'Appointment booked successfully.');
            $this->reset();

            $this->redirectRoute('appointments.create', [
                'complaintId' => $this->encrypt($this->complaint->id),
            ]);

        } catch (\Exception $e) {
            session()->flash('error', "An error occurred: {$e->getMessage()}");
            $this->redirectRoute('appointments.index');
        }
    }

    public function update()
    {
        $_appointment = Appointment::where('id', $this->decrypt($this->appointmentId))
            ->first();
        $_appointment->update([
            'date' => $this->date,
            'time' => $this->time,
        ]);

        session()->flash('success', 'Appointment updated successfully.');
        $this->reset();

        $this->redirectRoute('appointments.create', [
            'complaintId' => $this->encrypt( $_appointment->complaint->id),
            'appointmentId' => $this->encrypt($_appointment->id),
        ]);
    }

    public function render()
    {
        if ($this->appointmentId) {
            $this->appointment = Appointment::where('id', $this->decrypt($this->appointmentId))
                ->first();
            $this->date = $this->appointment->date;
            $this->time = $this->appointment->time;
        }

        return view('livewire.appointment.create');
    }
}
