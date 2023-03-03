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
                                    <span>1-10 of 70</span> <img class="btn"
                                        src="{{ asset('assets/images/backwardarrow.svg') }}" /> <img class="btn"
                                        src="{{ asset('assets/images/forwardarrow.svg') }}" style="padding-left:0px" />
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
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td><img src="{{ $user->staff->photo ?? '' }}" alt="user"
                                                        class="" style="width:36px;"> {{ $user->username }}</td>
                                                <td><span class="btn waves-effect waves-light btn-sm btn-secondary"
                                                        style="width:100px;">{{ $user->getRoleNames()[0] }}</span></td>
                                                <td>{{ $user->staff->department->name }}</td>
                                                <td>{{ $user->staff->position->name }}</td>
                                                <td><span class="btn waves-effect waves-light btn-sm btn-success"
                                                        style="width:80px;">Active</span></td>
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
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> User Info <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">

                </ul>
                <ul class="m-t-20 chatonline">

                </ul>
            </div>
        </div>
    </div>

    <div id="add-new-user-modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                            <select class="select2 form-control custom-select" name="staff_id" style="width: 100%;"
                                id="cboStaff">
                                <option value="">---Select Staff</option>
                                @if (count($staffs) > 0)
                                    @foreach ($staffs as $staff)
                                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label">User Role:</label>
                            <select class="select2 form-control custom-select" name="role_id" style="width: 100%;"
                                id="cboUserRole">
                                <option value="">---Select Role</option>
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
                    <button type="submit" class="btn btn-info waves-effect waves-light" form="StoreUserForm">Add New
                        User</button>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $("#StoreUserForm").on('submit', function(e) {
                e.preventDefault();

                $(".error-message").remove();

                var formData = $(this).serialize();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: formData,
                    success: function(res) {
                        if(res.success)
                        {
                            location.reload();
                        }
                    },
                    error: function(err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            $('#success_message').fadeIn().html(err.responseJSON.message);

                            // display errors on each form field
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span class="text-danger error-message">' + error[0] + '</span>'));
                            });
                        }
                    }
                })
            })

            $("#add-new-user-modal").on("hidden.bs.modal", function () {
                $(".error-message").remove();
            });
        </script>
    </x-slot>
</x-app-layout>
