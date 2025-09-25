<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard\Statistics;
use App\Livewire\Complaint\Create;
use App\Livewire\Complaint\Report;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/forgot-password', ForgotPassword::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/users/profile', \App\Livewire\Users\Profile::class)->name('users.profile');
    Route::get('/dashboard/statistics', Statistics::class)->name('dashboard.statistics');
    Route::get('vehicles', \App\Livewire\Complaint\Index::class)->name('vehicles.index');
    Route::get('vehicles/create', Create::class)->name('vehicles.create');
    Route::get('vehicles/report', Report::class)->name('vehicles.report');
    Route::get('appointments', \App\Livewire\Appointment\Index::class)->name('appointments.index');
    Route::get('appointments/create/{complaintId}', \App\Livewire\Appointment\Create::class)->name('appointments.create');
    Route::get('/mechanics/create', \App\Livewire\Mechanics\Create::class)->name('mechanics.create');
    Route::get('/mechanics', \App\Livewire\Mechanics\Index::class)->name('mechanics.index');
    Route::get('/mechanics/create', \App\Livewire\Mechanics\Create::class)->name('mechanics.create');
});

Route::get('/logout', function() {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerate();
    return redirect('/');
})->middleware('auth');
