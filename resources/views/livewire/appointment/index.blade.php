<x-slot:title>Booked Appointments</x-slot>
<x-slot:page_title>Booked Appointments</x-slot>
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
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Complaint</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ ucfirst($appointment?->complaint?->complaint_description) }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->date)->toFormattedDayDateString() }}</td>
                            <td>{{ $appointment->time }}</td>
                            <td><span class="text-{{ $appointment->status === \App\StatusEnum::Pending->value ? 'warning' : 'success' }}">{{ ucfirst($appointment->status) }}</span></td>
                            <td>
                                <span>
                                    <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                        <i class="mdi mdi-eye-outline fs-16 align-middle text-info" style="cursor: pointer" wire:click="view({{ $appointment->id }})"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                        <i class="mdi mdi-pencil fs-16 align-middle text-primary" style="cursor: pointer" wire:click="edit({{ $appointment->id }})"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                        <i class="mdi mdi-trash-can-outline fs-16 align-middle text-danger" style="cursor: pointer" wire:click="delete({{ $appointment->id }})"></i>
                                    </button>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
