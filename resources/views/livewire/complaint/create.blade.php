<x-slot:title>Add Complaint</x-slot>
<x-slot:page_title>Add Vehicle Complaint</x-slot>
<div>
    <div class="row">
        <div class="col-xl-12">
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
                            {{ session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form class="novalidated" wire:submit="save">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Vehicle Name</label> <span class="text-danger">*</span>
                                    <input class="form-control @error('vehicle_name') is-invalid @enderror" id="name" placeholder="Enter vehicle name" required value="{{ old('vehicle_name') }}" wire:model="vehicle_name">
                                    @error('vehicle_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class=" mb-3">
                                    <label class="form-label" for="vin">VIN</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('vehicle_vin') is-invalid @enderror" id="vin" placeholder="Enter vehicle identification number" required value="{{ old('vehicle_vin') }}" wire:model="vehicle_vin">
                                    @error('vehicle_vin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="make" class="form-label">Make</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('vehicle_make') is-invalid @enderror" aria-label="vehicle make" placeholder="Enter make" required value="{{ old('vehicle_make') }}" wire:model="vehicle_make">
                                    @error('vehicle_make')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="model" class="form-label">Model</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('vehicle_model') is-invalid @enderror" aria-label="vehicle model" placeholder="Enter model" required value="{{ old('vehicle_model') }}" wire:model="vehicle_model">
                                    @error('vehicle_model')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6"><div class="mb-3">
                                    <label for="year" class="form-label">Year</label> <span class="text-danger">*</span>
                                    <input type="number" class="form-control @error('vehicle_year') is-invalid @enderror" aria-label="vehicle year" placeholder="Enter year" required value="{{ old('vehicle_year') }}" wire:model="vehicle_year">
                                    @error('vehicle_year')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div></div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="mileage" class="form-label">Mileage</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('vehicle_mileage') is-invalid @enderror" aria-label="vehicle maileage" placeholder="Enter mileage" required value="{{ old('vehicle_mileage') }}" wire:model="vehicle_mileage">
                                    @error('vehicle_mileage')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="images" class="form-label">Attach Images</label>
                                    <input type="file" class="form-control @error('complaint_images') is-invalid @enderror" aria-label="compliant images" accept="image/*" value="{{ old('complaint_images') }}" multiple wire:model="complaint_images">
                                    @error('complaint_images.*')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="complaint" class="form-label">Complaint</label> <span class="text-danger">*</span>
                                    <textarea class="form-control @error('complaint_description') is-invalid @enderror" aria-label="complaint" placeholder="Enter complaints" wire:model="complaint_description" required>{{ old('complaint_description') }}</textarea>
                                    @error('complaint_description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary float-end" type="submit">Submit Complain <span class="spinner-grow spinner-grow-sm" aria-hidden="true" wire:loading></span></button>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card p-3">
                <div class="card-title">
                    <h5>Complaint Diagnostics Report</h5>
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </div>
</div>
