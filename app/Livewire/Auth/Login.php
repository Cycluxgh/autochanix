<?php

namespace App\Livewire\Auth;

use App\RoleEnum;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email|exists:users,email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public$rememberMe = false;

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->rememberMe)) {
            request()->session()->regenerate();
            $userRole = Auth::user()->role->name;

            match($userRole) {
                RoleEnum::User->value => $this->redirectRoute('vehicles.create'),
                RoleEnum::Mechanic->value => $this->redirectRoute('mechanics.index'),
                default => $this->redirectRoute('dashboard.statistics'),
            };

            $this->reset();
        } else {
            session()->flash('error', 'Wrong email or password');
            $this->redirectIntended();
        }

    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }
}
