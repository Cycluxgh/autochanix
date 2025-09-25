<?php

namespace App\Livewire\Auth;

use App\Models\Role;
use App\Models\User;
use App\RoleEnum;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Validate('required', message: 'Please, provider your name')]
    public $name = '';

    #[Validate('required', message: 'Please, provider your email')]
    public $email = '';

    #[Validate('required', message: 'Please, provider your password')]
    public $password = '';

    public function register()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => Role::where('name', RoleEnum::User->value)->first()->id,
        ]);

        $this->reset();
        $this->redirectRoute('vehicles.create');
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth');
    }
}
