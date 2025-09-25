<x-slot:title>Add Mechanic</x-slot>
<x-slot:page_title>Add Mechanic</x-slot>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="novalidated" wire:submit="save">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label> <span class="text-danger">*</span>
                                <input class="form-control" id="name" placeholder="Enter name" required value="{{ old('name') }}" wire:model="name">
                                <div class="invalid-feedback">@error('name'){{ $message }}@enderror</div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class=" mb-3">
                                <label class="form-label" for="vin">Phone number</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control" maxlength="10" placeholder="Enter phone number" required value="{{ old('phone') }}" wire:model="phone">
                                <div class="invalid-feedback">@error('phone'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="make" class="form-label">Email</label>
                                <input type="text" class="form-control" aria-label="email" placeholder="Enter email" value="{{ old('email') }}" wire:model="email">
                                <div class="invalid-feedback">@error('email'){{ $message }}@enderror</div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="make" class="form-label">Specialties</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control" aria-label="specialties" placeholder="Enter specialties" required value="{{ old('specialties') }}" wire:model="specialties">
                                <div class="invalid-feedback">@error('specialties'){{ $message }}@enderror</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="complaint" class="form-label">Address</label> <span class="text-danger">*</span>
                                <textarea class="form-control" aria-label="address" placeholder="Enter address" wire:model="address" required>{{ old('address') }}</textarea>
                                <div class="invalid-feedback">@error('address'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary float-end" type="submit">Submit <span class="spinner-grow spinner-grow-sm" aria-hidden="true" wire:loading></span></button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

