<?php

namespace App\Livewire\Complaints;

use App\Models\Complaint;
use App\Util;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads, Util;

    public $vehicle_name;
    public $vehicle_vin;
    public $vehicle_make;
    public $vehicle_model;
    public $vehicle_year;
    public $vehicle_mileage;
    #[Validate(['vehicle_images.*' => 'image|max:2048|mimes:jpeg,png,jpg,gif,svg,avif,webp'])]
    public $complaint_images = [];
    public $complaint_description;
    private $paths = [];

    #[Url]
    public string $complaintId;

    public function update()
    {
        if (count($this->complaint_images) > 0) {
            foreach ($this->complaint_images as $complaint_image) {
                if (config('app.env') === 'local') {
                    $this->paths[] = 'storage/' . $complaint_image->store(path: 'images/complaints');
                } else {
                    $this->paths[] = 'storage/app/public' . $complaint_image->store(path: 'images/complaints');
                }
            }
        }

        $complaint = Complaint::where('id', $this->decrypt($this->complaintId))->first();
        $complaint->update([
            'vehicle_name' => $this->vehicle_name,
            'vehicle_vin' => $this->vehicle_vin,
            'vehicle_make' => $this->vehicle_make,
            'vehicle_model' => $this->vehicle_model,
            'vehicle_year' => $this->vehicle_year,
            'vehicle_mileage' => $this->vehicle_mileage,
            'complaint_images' => count($this->paths) > 0 ? implode('|', $this->paths) : $complaint->complaint_images,
            'complaint_description' => $this->complaint_description,
        ]);

        session()->flash('success', 'Vehicle complaints updated successfully');

        $this->redirect(route('complaints.create', ['complaintId' => $this->encrypt($complaint->id)]));
    }

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
            session()->flash('success', 'Vehicle complaints created successfully.');

            $this->redirectRoute('complaints.create');
        } catch (\Exception $e) {
            session()->flash('error', "Something went wrong: {$e->getMessage()}");
            $this->redirectRoute('complaints.create');
    }

    }

    public function render()
    {
        if ($this->complaintId) {
            $complaint = Complaint::where('id', $this->decrypt($this->complaintId))->first();
            $this->vehicle_name = $complaint->vehicle_name;
            $this->vehicle_vin = $complaint->vehicle_vin;
            $this->vehicle_make = $complaint->vehicle_make;
            $this->vehicle_model = $complaint->vehicle_model;
            $this->vehicle_year = $complaint->vehicle_year;
            $this->vehicle_mileage = $complaint->vehicle_mileage;
            $this->complaint_description = $complaint->complaint_description;
        }

        return view('livewire.complaints.create');
    }
}
