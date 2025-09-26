<x-slot:title>Mechanics</x-slot>
<x-slot:page_title>Mechanics List</x-slot>

<!-- Button Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>Email</th>
                        <th>Specialties</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mechanics as $mechanic)
                        <tr>
                            <td>{{ ucfirst($mechanic->name) }}</td>
                            <td>{{ $mechanic->phone }}</td>
                            <td>{{ $mechanic?->email ?? 'No email' }}</td>
                            <td>{{ $mechanic->specialties }}</td>
                            <td>{{ ucfirst($mechanic->address) }}</td>
                            <td>
                                <span>
                                    <i class="mdi mdi-eye-outline fs-16 align-middle text-info" style="cursor: pointer"></i>
                                    <i class="mdi mdi-file-edit-outline fs-16 align-middle text-primary" style="cursor: pointer"></i>
                                    <i class="mdi mdi-trash-can-outline fs-16 align-middle text-danger" style="cursor: pointer"></i>
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
