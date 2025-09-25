<?php

namespace App\Livewire\Complaint;

use App\Models\Complaint;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $vehicle_name = '';
    public $vehicle_vin = '';
    public $vehicle_make = '';
    public $vehicle_model = '';
    public $vehicle_year = '';
    public $vehicle_mileage = '';
    #[Validate(['vehicle_images.*' => 'image|max:2048|mimes:jpeg,png,jpg,gif,svg,avif,webp',])]
    public $complaint_images = [];
    public $complaint_description = '';
    private $paths = [];

    public function save()
    {
        foreach ($this->complaint_images as $complaint_image) {
            if (config('app.env') === 'local') {
                $this->paths[] = 'storage/' . $complaint_image->store(path: 'images/complaints');
            } else {
                $this->paths[] = 'storage/app/public' . $complaint_image->store(path: 'images/complaints');
            }
        }

        try {
            Complaint::create([
                'user_id' => auth()->id(),
                'vehicle_name' => $this->vehicle_name,
                'vehicle_vin' => $this->vehicle_vin,
                'vehicle_make' => $this->vehicle_make,
                'vehicle_model' => $this->vehicle_model,
                'vehicle_year' => $this->vehicle_year,
                'vehicle_mileage' => $this->vehicle_mileage,
                'complaint_images' => implode('|', $this->paths),
                'complaint_description' => $this->complaint_description,
            ]);

            $this->reset();
            session()->flash('success', 'Vehicle complaint created successfully.');

            $this->redirectRoute('vehicles.create');
        } catch (\Exception $e) {
            session()->flash('error', "Something went wrong: {$e->getMessage()}");
            $this->redirectRoute('vehicles.create');
    }

    }

    public function render()
    {
        return view('livewire.complaint.create');
    }
}
