<x-slot:title>Complaints</x-slot>
<x-slot:page_title>Vehicle Complaints</x-slot>

<!-- Button Datatable -->
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
                        <th>Name</th>
                        <th>VIN</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Mileage</th>
                        <th>Complaints</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($complaints as $complaint)
                        <tr>
                            <td>{{ ucfirst($complaint->vehicle_name) }}</td>
                            <td>{{ ucfirst($complaint->vehicle_vin) }}</td>
                            <td>{{ ucfirst($complaint->vehicle_make) }}</td>
                            <td>{{ ucfirst($complaint->vehicle_model) }}</td>
                            <td>{{ $complaint->vehicle_year }}</td>
                            <td>{{ ucfirst($complaint->vehicle_mileage) }}</td>
                            <td>{{ ucfirst($complaint->complaint_description) }}</td>
                            <td><span
                                    class="text-{{ $complaint->status === \App\StatusEnum::Pending->value ? 'warning' : 'success' }}">{{ ucfirst($complaint->status) }}</span>
                            </td>
                            <td>
                                <span>
                                    <a href="{{ route('complaints.show', ['complaintId' => \App\Livewire\Complaints\Show::encrypt($complaint->id)]) }}" type="button" class="btn btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="View">
                                        <i class="mdi mdi-eye-outline fs-16 align-middle text-info"
                                           style="cursor: pointer"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit">
                                        <i class="mdi mdi-pencil fs-16 align-middle text-primary"
                                           style="cursor: pointer" wire:click="edit({{ $complaint->id }})"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete">
                                        <i class="mdi mdi-trash-can-outline fs-16 align-middle text-danger"
                                           style="cursor: pointer" wire:click="delete({{ $complaint->id }})"></i>
                                    </button>
                                    <a type="button" class="btn btn-sm"
                                       href="/appointments/create/{{\App\Livewire\Complaints\Index::encrypt($complaint->id)}}?appointmentId="
                                       data-bs-toggle="tooltip" data-bs-placement="top"
                                       data-bs-title="Book appointment">
                                        <i class="mdi mdi-calendar-outline fs-16 align-middle text-warning"
                                           style="cursor: pointer"></i>
                                    </a>
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
