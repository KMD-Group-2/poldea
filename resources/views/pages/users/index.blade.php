<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">User Management</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                        data-target="#add-new-user-modal"><i class="fa fa-plus-circle"></i> Add New User</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="padding-bottom:30px;">
                            <div class="col-md-5 align-self-center">
                                <img src="{{ asset('assets/images/selector.svg') }}" /> <img
                                    src="{{ asset('assets/images/downarrow.svg') }}" /> Selected (1) <img
                                    src="{{ asset('assets/images/divider.svg') }}" style="padding-left:20px;" />
                                <span class="btn"><i class="ti-trash"></i> Delete User</span>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <span>Showing
                                        {{ ($users->currentPage() - 1) * $users->perPage() + ($users->total() ? 1 : 0) }}
                                        to
                                        {{ ($users->currentPage() - 1) * $users->perPage() + count($users) }} of
                                        {{ $users->total() }} results</span>

                                        {{ $users->links('vendor.pagination.custom') }}
                                    </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>User Name</th>
                                        <th>Role</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Created Date <i class="fas fa-sort-amount-down"></i></th>
                                        <th>Last Activity Date <i class="fas fa-sort-amount-down"></i></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->total() > 0)
                                        @foreach ($users as $user)
                                            <tr data-all="{{ $user }}">
                                                <td><input type="checkbox"></td>
                                                <td><img src="{{ $user->staff->photo ?? '' }}" alt="user"
                                                        class="" style="width:36px;"> {{ $user->username }}</td>
                                                <td><span class="btn waves-effect waves-light btn-sm btn-secondary"
                                                        style="width:100px;">{{ $user->getRoleNames()[0] }}</span></td>
                                                <td>{{ $user->staff->department->name }}</td>
                                                <td>{{ $user->staff->position->name }}</td>
                                                <td><span
                                                        class="btn waves-effect waves-light btn-sm {{ $user->active == 1 ? 'btn-success' : 'btn-danger' }}"
                                                        style="width:80px;">{{ $user->active == 1 ? 'Active' : 'Inactive' }}</span>
                                                </td>
                                                <td>{{ Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</td>
                                                <td>2023-03-05 23:23:23</td>
                                                <td class="right-side-toggle"><button type="button"
                                                        class="btn icon-pencil" title="Edit"></button></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9">No Data Avaliable!</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <span><i class="ti-close right-side-toggle"></i></span> --}}
    <div class="right-sidebar" style="margin-top: 67px;">
        <div class="slimscrollright">
            <div class="rpanel-title bg-white text-dark"> <b>User Details</b> </div>
            <div class="r-panel-body mb-5">
                <input type="hidden" name="key" disabled>

                <div class="d-flex align-items-center w-100">
                    <img src="" alt="" class="rounded-circle user-image" width="50px">
                    <div class="d-flex flex-column pl-2">
                        <h5 class="username"><b>Username</b></h5>
                        <span class="text-muted position">Position</span>
                    </div>
                    <span class="active">Active</span>
                </div>

                <div class="d-flex flex-column mt-4">
                    <span class="text-muted">Last Activity Date:</span>
                    <span class="h5 mt-2 last-activity-at">10-10-23/ 02:43 PM</span>
                </div>

                <div class="d-flex flex-column mt-4">
                    <span class="text-muted">Account Create Date:</span>
                    <span class="h5 mt-2 created-at">10-10-23/ 02:43 PM</span>
                </div>

                <form action="{{ route('admin.user.update', ['user' => ':id']) }}" method="PUT" id="UpdateUserForm">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="form-group" style="margin-bottom: 5px">
                                <label class="col-form-label">User Role:</label>
                                <select class="form-control custom-select w-100" name="role_id">
                                    <option value="">---Select Role---</option>
                                    @if (count($roles) > 0)
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group" style="margin-bottom: 5px">
                                <label class="col-form-label">Department:</label>
                                <input type="text" name="department" class="form-control" value="Department"
                                    disabled>
                            </div>

                            <div class="form-group" style="margin-bottom: 5px">
                                <label class="col-form-label">Position:</label>
                                <input type="text" name="position" class="form-control" value="Position" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mt-4 w-100 align-items-center">
                        <h4 class="text-muted">Account Status:</h4>
                        <div class="d-flex ml-auto align-items-center">
                            <span style="color:#0561FC" class="mr-2 status-show">Activated</span>
                            <label class="switch mb-0">
                                <input type="checkbox" name="active">
                                <span class="slider slider-round"></span>
                            </label>
                        </div>
                    </div>
                </form>

                <form action="{{ route('admin.user.destroy', ['user' => ':id']) }}" method="DELETE"
                    id="DeleteUserForm">
                    @csrf
                    <div class="row justify-content-center mt-4">
                        <div class="col-10">
                            <hr>
                            <h4 class="text-center text-muted">Account Deletion</h4>
                            <hr>
                        </div>
                    </div>


                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-outline-danger">Delete Account</button>
                        </div>
                    </div>
                </form>

                <hr>

                <div class="d-flex w-100">
                    <button type="button"
                        class="btn btn-default ml-auto rounded btn-block close-sidebar">Cancel</button>
                    <button type="submit" class="btn btn-primary mr-auto rounded btn-block" form="UpdateUserForm"
                        id="UpdateFormBtn">Save</button>
                </div>

            </div>
        </div>
    </div>

    <div id="add-new-user-modal" class="modal" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">Add New User<span id="total_records" style="font-weight:bold;"></h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.user.store') }}" method="POST" id="StoreUserForm">
                        @csrf
                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" style="text-align: right;">Staff:</label>
                            <select class="select2 form-control custom-select" name="staff_id" style="width: 100%;">
                                <option value="">---Select Staff---</option>
                                @if (count($staffs) > 0)
                                    @foreach ($staffs as $staff)
                                        <option value="{{ $staff->id }}">{{ $staff->name }} ( Dept - {{$staff->department->name}} / Position - {{$staff->position->name}} )</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label">User Role:</label>
                            <select class="form-control custom-select w-100" name="role_id">
                                <option value="">---Select Role---</option>
                                @if (count($roles) > 0)
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="username">User Name:</label>
                            <input type="text" name="username" class="form-control" id="username">
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="password">Password:</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="password_confirmation">Confirm Password:</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light" form="StoreUserForm"
                        id="StoreUserBtn">Add New
                        User</button>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $("#StoreUserForm").on('submit', function(e) {
                e.preventDefault();

                $("#StoreUserBtn").attr('disabled', true);

                $(".error-message").remove();

                var formData = $(this).serialize();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            location.reload();
                        }
                    },
                    error: function(err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue

                            // display errors on each form field
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span class="text-danger error-message">' + error[0] +
                                    '</span>'));
                            });
                        }
                    }
                })
            })

            $("#UpdateUserForm").on('submit', function(e) {
                e.preventDefault();

                $("#UpdateFormBtn").attr('disabled', true);
                let action = $(this).attr('action');
                let formAction = action.replace(':id', $(document).find('.r-panel-body input[name=key]').val());

                $(".error-message").remove();
                var formData = $(this).serializeArray();

                if (!$(this).find('input[name=active]').is(":checked")) {
                    formData.push({
                        name: 'active',
                        value: "off"
                    });
                }

                $.ajax({
                    url: formAction,
                    method: $(this).attr('method'),
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            location.reload();
                        }
                    },
                    error: function(err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue

                            // display errors on each form field
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span class="text-danger error-message">' + error[0] +
                                    '</span>'));
                            });
                        }
                    }
                })
            })

            $("#DeleteUserForm").on('submit', function(e) {
                e.preventDefault();

                $(this).find('button[type=submit]').attr('disabled', 'disabled');

                let action = $(this).attr('action');
                let formAction = action.replace(':id', $(document).find('.r-panel-body input[name=key]').val());

                $(".error-message").remove();
                var formData = $(this).serializeArray();

                $.ajax({
                    url: formAction,
                    method: $(this).attr('method'),
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            location.reload();
                        }
                    },
                    error: function(err) {
                        console.log(err);
                    }
                })
            })

            $("#add-new-user-modal").on("hidden.bs.modal", function() {
                $(".error-message").remove();
            });
        </script>
    </x-slot>
</x-app-layout>
