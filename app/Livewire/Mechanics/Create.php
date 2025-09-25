<?php

namespace App\Livewire\Mechanics;

use App\Models\Mechanic;
use App\RoleEnum;
use Livewire\Component;

class Create extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $specialties = '';
    public $address = '';

    public function save()
    {
        try {
            $mechanic = Mechanic::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'specialties' => $this->specialties,
                'address' => $this->address,
                'user_id' => auth()->id(),
            ]);

            if (auth()->user()->role->name === RoleEnum::Mechanic->value)
                auth()->user()->update(['mechanic_id' => $mechanic->id]);

            session()->flash('success', 'Mechanic created successfully.');
            $this->reset();

            $this->redirectRoute('mechanics.create');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            $this->redirectRoute('mechanics.create');
        }
    }

    public function render()
    {
        return view('livewire.mechanics.create');
    }
}
