<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Complaints\Show;
use App\Livewire\Dashboard\Statistics;
use App\Livewire\Complaints\Create;
use App\Livewire\Complaints\Report;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/forgot-password', ForgotPassword::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/users/profile', \App\Livewire\Users\Profile::class)->name('users.profile');
    Route::get('/dashboard/statistics', Statistics::class)->name('dashboard.statistics');
    Route::get('complaints', \App\Livewire\Complaints\Index::class)->name('complaints.index');
    Route::get('complaints/create', Create::class)->name('complaints.create');
    Route::get('complaints/{complaintId}', Show::class)->name('complaints.show');
    Route::get('complaints/report', Report::class)->name('complaints.report');
    Route::get('appointments', \App\Livewire\Appointments\Index::class)->name('appointments.index');
    Route::get('appointments/create/{complaintId}', \App\Livewire\Appointments\Create::class)->name('appointments.create');
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
