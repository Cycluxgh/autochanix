<x-slot:title>Book Appointment</x-slot>
<x-slot:page_title>Book Appointment</x-slot>
<div>
    @if (!$view)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form wire:submit="@if($appointmentId) update @else save @endif">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label">Vehicle Complaint</label> <span class="text-danger">*</span>
                                    <textarea class="form-control" required placeholder="Vehicle complaint" readonly>{{ $complaint?->complaint_description }}</textarea>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label">Pick a date</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="basic-datepicker" required placeholder="Select date" wire:model="date">
                                    @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label">Pick a Time</label> <span class="text-danger">*</span>
                                    <input id="basic-timepicker" type="text" class="form-control" required placeholder="Select time" wire:model="time">
                                    @error('time')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">
                            @if ($appointmentId) Save @else Book Appointment @endif
                            <span class="spinner-grow spinner-grow-sm" aria-hidden="true" wire:loading></span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endif
    @if ($view)
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Booked Date:</label>&nbsp;&nbsp;<strong>{{ \Carbon\Carbon::parse($date)->toFormattedDayDateString() }}</strong>
                    </div>
                    <div class="col-6">
                        <label>Booked Time:</label>&nbsp;&nbsp;<strong>{{ \Carbon\Carbon::parse($time)->toTimeString() }}</strong>
                    </div>
                    <div class="col-6">
                        <label>Vehicle Complaint:</label>&nbsp;&nbsp;<strong>{{ $complaint?->complaint_description }}</strong>
                    </div>
                    <div class="col-6">
                        <label>Booked Status:</label>&nbsp;&nbsp;<strong class="@if($appointment->status === \App\StatusEnum::Approved->value) text-success @else text-warning @endif">{{ ucfirst($appointment->status) }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
