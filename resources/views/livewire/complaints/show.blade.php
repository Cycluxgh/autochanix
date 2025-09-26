<x-slot:title>View</x-slot>
<x-slot:page_title>View Complaint</x-slot>

<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Vehicle Name:</label>&nbsp;&nbsp;<strong>{{ $complaint->vehicle_name }}</strong>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Vehicle VIN:</label>&nbsp;&nbsp;<strong>{{ $complaint->vehicle_vin }}</strong>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Vehicle Make:</label>&nbsp;&nbsp;<strong>{{ $complaint->vehicle_make }}</strong>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Vehicle Model:</label>&nbsp;&nbsp;<strong>{{ $complaint->vehicle_model }}</strong>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Vehicle Year:</label>&nbsp;&nbsp;<strong>{{ $complaint->vehicle_year }}</strong>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Vehicle Mileage:</label>&nbsp;&nbsp;<strong>{{ $complaint->vehicle_mileage }}</strong>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Vehicle Complaint:</label>&nbsp;&nbsp;<strong>{{ $complaint->complaint_description }}</strong>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Status:</label>&nbsp;&nbsp;<strong class="@if($complaint->status === \App\StatusEnum::Pending->value) text-warning @else text-success @endif">{{ ucfirst($complaint->status) }}</strong>
                    </div>
                </div>
            </div>
            @php
            $paths = [];
            $imagesPaths = $complaint->complaint_images;
            if ($imagesPaths)
                $paths = explode('|', $imagesPaths);
            @endphp
            <div class="row">
                @foreach($paths as $path)
                    <div class="col-3 mb-3">
                        <img src="{{ asset($path) }}" class="img-fluid rounded" alt="complaint image" data-holder-rendered="true" width="200">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
