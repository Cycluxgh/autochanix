<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Complaint\Report;
use App\Models\Appointment;
use App\Models\Complaint;
use App\Models\Mechanic;
use Livewire\Component;

class Statistics extends Component
{
    public $totalComplaints = 0;
    public $totalMechanics = 0;
    public $totalAppointments = 0;
    public $totalReports = 0;

    public function render()
    {
        $this->totalComplaints = Complaint::count();
        $this->totalMechanics = Mechanic::count();
        $this->totalAppointments = Appointment::count();
//        $this->totalReports = Report::count();

        return view('livewire.dashboard.statistics');
    }
}
