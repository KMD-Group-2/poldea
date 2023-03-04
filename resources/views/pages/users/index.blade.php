<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">User Management</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                        data-target="#AddNewUserModal"><i class="fa fa-plus-circle"></i> Add New User</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="padding-bottom:30px;">
                            <div class="col-md-5 align-self-center">
                                <a href="javascript:void(0)" class="select-all">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        style="stroke: #494949;stroke-width: 1px;stroke-linejoin: round;"
                                        class="off-select" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 0H2C0.89 0 0 0.89 0 2V16C0 16.5304 0.210714 17.0391 0.585786 17.4142C0.960859 17.7893 1.46957 18 2 18H16C16.5304 18 17.0391 17.7893 17.4142 17.4142C17.7893 17.0391 18 16.5304 18 16V2C18 1.46957 17.7893 0.960859 17.4142 0.585786C17.0391 0.210714 16.5304 0 16 0Z"
                                            fill="#fff" />
                                    </svg>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        class="on-select" style="display: none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 10H4V8H14M16 0H2C0.89 0 0 0.89 0 2V16C0 16.5304 0.210714 17.0391 0.585786 17.4142C0.960859 17.7893 1.46957 18 2 18H16C16.5304 18 17.0391 17.7893 17.4142 17.4142C17.7893 17.0391 18 16.5304 18 16V2C18 1.46957 17.7893 0.960859 17.4142 0.585786C17.0391 0.210714 16.5304 0 16 0Z"
                                            fill="#0561FC" />
                                    </svg>
                                </a>
                                Selected (<span class="select-count">0</span>) <img
                                    src="{{ asset('assets/images/divider.svg') }}" style="padding-left:20px;" />
                                <button class="btn" data-delete="selected" onclick="showDeleteModal(this)"
                                    action="{{ route('admin.user.massDestroy') }}" method="POST"><i
                                        class="ti-trash"></i> Delete
                                    User</button>
                                <span class="ids-message"></span>
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
                            <table id="myTable" class="table table-striped selected-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>User Name</th>
                                        <th>Role</th>
                                        <th>Department</th>
                                        <th>Job Title</th>
                                        <th>Status</th>
                                        <th>Created Date <i class="fas fa-sort-amount-down"></i></th>
                                        <th>Last Activity Date <i class="fas fa-sort-amount-down"></i></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->total() > 0)
                                        @foreach ($users as $user)
                                            <tr data-entry="{{ $user }}">
                                                <td><input type="checkbox" class="select-checkbox mt-2"></td>
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
                                                <td>{{ Carbon\Carbon::parse($user->last_activity_at)->format('Y-m-d') }}
                                                </td>
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
                                <input type="text" name="position" class="form-control" value="Position"
                                    disabled>
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

                <div class="row justify-content-center mt-4">
                    <div class="col-10">
                        <hr>
                        <h4 class="text-center text-muted">Account Deletion</h4>
                        <hr>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-outline-danger" data-delete="no-select"
                            onclick="showDeleteModal(this);"
                            action="{{ route('admin.user.destroy', ['user' => ':id']) }}" method="DELETE">Delete
                            Account</button>
                    </div>
                </div>

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

    <div id="AddNewUserModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">Add New User</h4>
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
                                        <option value="{{ $staff->id }}" data-email="{{ $staff->email }}">
                                            {{ $staff->name }} (Dept: {{ $staff->department->name }} / Job Title:
                                            {{ $staff->position->name }})
                                        </option>
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

                        <div class="system-info d-none">
                            <hr>
                            <div class="d-flex flex-column">
                                <h4 class="title">System Info:</h4>
                                <p class="text-muted mt-3">After this user is created,</p>
                                <p class="text-muted">System will be sent automatically for account credentials which is including username and password to staff email address.</p>
                                <p class="text-muted">Staff Email: <span class="staff-email text-info">example@gmail.com</span></p>
                            </div>
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

    <div id="DeleteUserModal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" method="" id="DeleteUserForm" data-delete="">
                    @csrf
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="mySmallModalLabel">Deleting</h4>
                    </div>
                    <div class="modal-body text-center">
                        <i class="mdi mdi-information-outline fa-6x text-danger"></i>
                        <h3>Are You Sure, You want to delete? </h3>
                        <p>You won't be able to revert this!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <x-slot name="script">
        <script>
            var select_count = 0;

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
                            $("#StoreUserBtn").attr('disabled', false);
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
                            $("#UpdateFormBtn").attr('disabled', false);
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
                var ids = [];
                var _this = $(this);

                $(this).find('button[type=submit]').attr('disabled', true);

                var action = $(this).attr('action');
                var formData = {};

                if ($(this).data('delete') == 'no-select') {
                    action = action.replace(':id', $(document).find('.r-panel-body input[name=key]').val());

                    $(".error-message").remove();

                    formData = {
                        "_token": "{{ csrf_token() }}",
                    };
                } else {
                    $('.selected-table tbody tr.selected').each(function() {
                        ids.push($(this).data('entry').id);
                    })

                    formData = {
                        ids: ids,
                        "_token": "{{ csrf_token() }}",
                    };
                }

                $.ajax({
                    url: action,
                    method: $(this).attr('method'),
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            location.reload();
                        }
                    },
                    error: function(err) {
                        $(_this).find('button[type=submit]').attr('disabled', false);
                        console.log(err);
                    }
                })
            })

            $("#AddNewUserModal").on("hidden.bs.modal", function() {
                $(".error-message").remove();
            });

            $('.select2').on('select2:select', function(e) {
                if(e.params.data.id != "")
                {
                    let email = $(this).find(':selected').data('email');

                    $(".system-info").removeClass('d-none');
                    $(".system-info .staff-email").html(email);
                }else{
                    $(".system-info").addClass('d-none');
                    $(".system-info .staff-email").html("");
                }
            });

            function showDeleteModal(_this) {
                var el = $(document).find('.ids-message');
                el.html('');
                if ($(_this).data('delete') == 'selected' && !$('.selected-table .select-checkbox:checked').length > 1) {
                    el.html($('<span class="text-danger error-message">Select At Least Two Rows!</span>'));
                    return false;
                }
                $('#DeleteUserModal').modal('show');
                $('#DeleteUserModal form').attr('action', $(_this).attr('action')).attr('method', $(_this).attr('method')).attr(
                    'data-delete', $(_this).data('delete'));
            }
        </script>
    </x-slot>
</x-app-layout>
