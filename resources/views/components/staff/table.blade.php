<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="staff_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table
                            id="staff"
                            class="display nowrap table table-hover table-striped table-bordered dataTable"
                            cellspacing="0"
                            width="100%"
                            role="grid"
                        >
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Name</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Email</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Department</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Position</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Phone</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Address</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($staff->total() > 0)
                                    @php
                                        $isEven = 0;
                                    @endphp
                                    @foreach($staff as $stf)
                                        <tr role="row" class="$isEven ? even : odd">
                                            <td>{{ $stf->name }}</td>
                                            <td>{{ $stf->email }}</td>
                                            <td>{{ $stf->department->name }}</td>
                                            <td>{{ ucwords($stf->position->name) }}</td>
                                            <td>{{ $stf->phone }}</td>
                                            <td>{{ $stf->address }}</td>
                                            <td>{{ Carbon\Carbon::parse($stf->created_at)->format('d M Y') }}
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
