<x-slot:title>Complains Reports</x-slot>
<x-slot:page_title>Complains Reports</x-slot>
<!-- Button Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Vehicle</th>
                        <th>Complaint</th>
                        <th>Report Analysis</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Smith</td>
                        <td>BMW</td>
                        <td>Engine break down</td>
                        <td>Can be overheating</td>
                        <td>
                            <span>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                    <i class="mdi mdi-eye-outline fs-16 align-middle text-info" style="cursor: pointer"></i>
                                </button>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                    <i class="mdi mdi-pencil fs-16 align-middle text-primary" style="cursor: pointer"></i>
                                </button>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                    <i class="mdi mdi-trash-can-outline fs-16 align-middle text-danger" style="cursor: pointer"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Emily Davis</td>
                        <td>Toyota</td>
                        <td>Brake failure</td>
                        <td>Brake fluid issue can cause that</td>
                        <td>
                            <span>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                    <i class="mdi mdi-eye-outline fs-16 align-middle text-info" style="cursor: pointer"></i>
                                </button>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                    <i class="mdi mdi-pencil fs-16 align-middle text-primary" style="cursor: pointer"></i>
                                </button>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                    <i class="mdi mdi-trash-can-outline fs-16 align-middle text-danger" style="cursor: pointer"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Michael Brown</td>
                        <td>Benz</td>
                        <td>Tyre problem</td>
                        <td>Over used without replacement</td>
                        <td>
                            <span>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                    <i class="mdi mdi-eye-outline fs-16 align-middle text-info" style="cursor: pointer"></i>
                                </button>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                    <i class="mdi mdi-pencil fs-16 align-middle text-primary" style="cursor: pointer"></i>
                                </button>
                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                    <i class="mdi mdi-trash-can-outline fs-16 align-middle text-danger" style="cursor: pointer"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
