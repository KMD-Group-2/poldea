<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-5 align-self-center">
                <h4 class="text-themecolor">Staff Management</h4>
            </div>
            <div class="col-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-lg-block m-l-15" data-toggle="modal"
                        data-target="#AddNewStaffModal"><i class="fa fa-plus-circle"></i> Add New Staff</button>
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
                                    action="{{ route('admin.staff.massDestroy') }}" method="POST"><i
                                        class="ti-trash"></i> Delete
                                    Staff</button>
                                <span class="ids-message"></span>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <span>Showing
                                        {{ ($staffs->currentPage() - 1) * $staffs->perPage() + ($staffs->total() ? 1 : 0) }}
                                        to
                                        {{ ($staffs->currentPage() - 1) * $staffs->perPage() + count($staffs) }} of
                                        {{ $staffs->total() }} results</span>

                                    {{ $staffs->links('vendor.pagination.custom') }}
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped selected-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Staff Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Created Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($staffs->total() > 0)
                                        @foreach ($staffs as $staff)
                                            <tr data-entry="{{ $staff }}">
                                                <td><input type="checkbox" class="select-checkbox mt-2"></td>
                                                <td><img src="{{ $staff->photo ?? '' }} " alt="staff" class=""
                                                        style="width:36px;"> {{ $staff->name }}</td>
                                                <td>{{ $staff->email }}</td>
                                                <td>{{ $staff->department->name }}</td>
                                                <td>{{ $staff->position->name }}</td>
                                                <td>{{ $staff->phone }}</td>
                                                <td>{{ $staff->address }}</td>
                                                <td>{{ Carbon\Carbon::parse($staff->created_at)->format('Y-m-d') }}
                                                </td>
                                                <td class="right-side-toggle">
                                                    <button type="button" class="btn" title="Edit">
                                                        <svg width="19" height="19" viewBox="0 0 19 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16.3 6.925L12.05 2.725L13.45 1.325C13.8333 0.941667 14.3043 0.75 14.863 0.75C15.421 0.75 15.8917 0.941667 16.275 1.325L17.675 2.725C18.0583 3.10833 18.2583 3.571 18.275 4.113C18.2917 4.65433 18.1083 5.11667 17.725 5.5L16.3 6.925ZM14.85 8.4L4.25 19H0V14.75L10.6 4.15L14.85 8.4Z"
                                                                fill="#B6B6BB" />
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td> colspan="9">No data Available!</td>
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
            <div class="rpanel-title bg-white text-dark"> <b>Staff Details</b> </div>
            <div class="r-panel-body mb-5">
                <form action="{{ route('admin.staff.update', ['staff' => ':id']) }}" method="PUT"
                    id="UpdateStaffForm">
                    @csrf

                    <input type="hidden" name="key" disabled>

                    <div class="form-group text-center" style="margin-bottom: 5px">
                        <label for="col-form-label" id="UpdateUploadPhoto">
                            <img id="UpdateUserPhoto"
                                src=""
                                class="rounded" style="height:100px; width:100px; cursor:pointer;"
                                title="Click to Change the Photo.">
                        </label>
                        <input class="d-none" name="photo" id="UpdatePhoto" type="file"
                            accept="image/jpeg, image/png">
                        <input type="hidden" name="old_photo">
                    </div>

                    <div class="form-group" style="margin-bottom: 5px">
                        <label class="col-form-label" for="txtStaffName">Name:</label>
                        <input type="text" class="form-control" id="txtStaffName" name="name">
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                        <label class="col-form-label" for="txtEmail">Email:</label>
                        <input type="email" class="form-control" id="txtEmail" name="email">
                    </div>

                    <div class="form-group" style="margin-bottom: 5px">
                        <label class="col-form-label">Department:</label>
                        <select class="form-control" name="department_id">
                            <option value="">---Select Department---</option>
                            @if (count($departments) > 0)
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                        <label class="col-form-label">Job Title:</label>
                        <select class="form-control" name="position_id">
                            <option value="">---Select Job Title---</option>
                            @if (count($positions) > 0)
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 5px">
                        <label class="col-form-label" for="txtPhone">Phone:</label>
                        <input type="text" class="form-control" id="txtPhone" name="phone">
                    </div>

                    <div class="form-group" style="margin-bottom: 5px">
                        <label class="col-form-label" for="txtAddress">Address:</label>
                        <textarea name="address" id="txtAddress" class="form-control" rows="3"></textarea>
                    </div>
                </form>

                <div class="row justify-content-center">
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
                            action="{{ route('admin.staff.destroy', ['staff' => ':id']) }}" method="DELETE">Delete
                            Account</button>
                    </div>
                </div>

                <hr>

                <div class="d-flex w-100">
                    <button type="button"
                        class="btn btn-default ml-auto rounded btn-block close-sidebar">Cancel</button>
                    <button type="submit" class="btn btn-primary mr-auto rounded btn-block" form="UpdateStaffForm"
                        id="UpdateFormBtn">Save</button>
                </div>

            </div>
        </div>
    </div>

    <div id="AddNewStaffModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">Add New Staff</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.staff.store') }}" method="POST" id="StoreStaffForm"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group text-center" style="margin-bottom: 5px">
                            <label for="col-form-label" id="upload-photo">
                                <img id="user-photo"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cP4oUQRSHPxYFxWjxAIKJKwaaeARD7yDoATyCZh3suBcQvICp6wnMzFwDA83FbF1MVihpaGFYx6me6qr9VXX/Pnhpz3vv6/rTUFNgjDHGGGOMMcYYY4wxxhjzL3eBV8AJcAaEhccZ8AlYAQclX5irwBFwXkHRodI4H0RcKdH89xUUGBqJ49wSjiooKjQW/UjINud72mFnAX3P7uQQ4Lef5FFwmEPASQXDOTQa/e5oMj8rKCQ0Gqc5BMR+ZOmE0v2xgO1YgBgLEGMBYixAjAWIsQAxFiDGAsRYgBgLEGMBYixAjAWIsQAxFiDGAsRYgBgLEGMBI3gOPKEMFhDhMfB7OER7j/xYwBYeXjjB/Rm4QV4s4D/cBr5vaNAb8mIBG7gJfNnSnFLrQRFaOxd0HfgQybnUetCsgGdAl+E5e8DbkccGS6wHTQq4D/wantVd8knu3OtBcwL2ga8XntdN2OunHKCtnlIF7A1/5dn0zC5xr28BO/Ay0rAuca/vETCCRyPf2C5xr+8paAu3gB87NKlL3OvnWgPka0jOBK4BHxOa1CXs9S1gA68nNKpL2Ot7BKzxNEOzXhT41+ZlzgBJ5EjgwdrHVm0xewH9x9a3Chodlihg28dWqCRK1p+FKQnEPrZCBVGy/izIExAjr1+egBh5/fIExMjrlycgRl6/PAEx8vrlCYiR1y9PQIy8fnkCYuT1n45IQhkx1PlNFlj7lWUxmhewqiDJsGQBB5VfWxmjeQG1j4IYsxDQX8P7roJkw1IF/JWwqnA6ijEbAetrwuFwKWkNd4rGmJ2ApRHcQC0WIMYCxFiAGAsQYwFiLECMBYixADEWIMYCxFiAGAsQYwFiLIAZC/gDCOC6gupql84AAAAASUVORK5CYII="
                                    class="rounded" style="height:100px; width:100px; cursor:pointer;"
                                    title="Click to Change the Photo.">
                            </label>
                            <input class="d-none" name="photo" id="filePhoto" type="file"
                                accept="image/jpeg, image/png">
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="txtStaffName">Name:</label>
                            <input type="text" class="form-control" id="txtStaffName" name="name">
                        </div>
                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="txtEmail">Email:</label>
                            <input type="email" class="form-control" id="txtEmail" name="email">
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label">Department:</label>
                            <select class="form-control" name="department_id">
                                <option value="">---Select Department---</option>
                                @if (count($departments) > 0)
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label">Job Title:</label>
                            <select class="form-control" name="position_id">
                                <option value="">---Select Job Title---</option>
                                @if (count($positions) > 0)
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="txtPhone">Phone:</label>
                            <input type="text" class="form-control" id="txtPhone" name="phone">
                        </div>

                        <div class="form-group" style="margin-bottom: 5px">
                            <label class="col-form-label" for="txtAddress">Address:</label>
                            <textarea name="address" id="txtAddress" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light" form="StoreStaffForm"
                        id="StoreStaffBtn">Add New
                        Staff</button>
                </div>
            </div>
        </div>
    </div>

    <div id="DeleteStaffModal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" method="" id="DeleteStaffForm" data-delete="">
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
            $("#StoreStaffForm").on('submit', function(e) {
                e.preventDefault();

                $("#StoreStaffBtn").attr('disabled', true);

                $(".error-message").remove();

                var formData = $(this).serializeArray();

                $.each($(this).find("#filePhoto")[0].files, function(i, file) {
                    formData.push({
                        name: 'photo',
                        value: file
                    });
                })

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
                            $("#StoreStaffBtn").attr('disabled', false);
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

            $("#UpdateStaffForm").on('submit', function(e) {
                e.preventDefault();

                $("#UpdateFormBtn").attr('disabled', true);
                let action = $(this).attr('action');
                let formAction = action.replace(':id', $(this).find('input[name=key]').val());

                $(".error-message").remove();
                var formData = $(this).serializeArray();

                $.each($(this).find("#filePhoto")[0].files, function(i, file) {
                    formData.push({
                        name: 'photo',
                        value: file
                    });
                })

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

            $("#DeleteStaffForm").on('submit', function(e) {
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

            $("#AddNewStaffModal").on("hidden.bs.modal", function() {
                $(".error-message").remove();
            });

            $('.select2').on('select2:select', function(e) {
                if (e.params.data.id != "") {
                    let email = $(this).find(':selected').data('email');

                    $(".system-info").removeClass('d-none');
                    $(".system-info .staff-email").html(email);
                } else {
                    $(".system-info").addClass('d-none');
                    $(".system-info .staff-email").html("");
                }
            });

            $(".right-side-toggle").click(function () {
                $(".error-message").remove();

                $(".right-sidebar").slideDown(50);
                $(".right-sidebar").toggleClass("shw-rside");

                var data = $(this).closest("tr").data("entry");

                var _side = $(document)
                    .find(".right-sidebar");

                _side.find('input[name=key]').val(data.id);
                _side.find('#UpdateUserPhoto').attr('src', data.photo);
                _side.find('input[name=old_photo]').val(data.photo);
                _side.find('input[name=name]').val(data.name);
                _side.find('input[name=email]').val(data.email);
                _side.find('input[name=phone]').val(data.phone);
                _side.find('textarea[name=address]').val(data.address);
                _side.find('.created-at').html(new Date(data.created_at).toLocaleString("en-US"));
                _side.find('select[name=department_id]').val(data.department.id);
                _side.find('select[name=position_id]').val(data.position.id);
            });

            function showDeleteModal(_this) {
                var el = $(document).find('.ids-message');
                el.html('');
                if ($(_this).data('delete') == 'selected' && !$('.selected-table .select-checkbox:checked').length > 1) {
                    el.html($('<span class="text-danger error-message">Select At Least Two Rows!</span>'));
                    return false;
                }
                $('#DeleteStaffModal').modal('show');
                $('#DeleteStaffModal form').attr('action', $(_this).attr('action')).attr('method', $(_this).attr('method'))
                    .attr(
                        'data-delete', $(_this).data('delete'));
            }

                // ==============================================================
                // Image Selector
                // ==============================================================
                $("#upload-photo").on("click", function () {
                    $("#filePhoto").click();
                });
                let imgInp = document.getElementById("filePhoto");

                if (imgInp) {
                    let img = document.getElementById("user-photo");
                    imgInp.onchange = (evt) => {
                        const [file] = imgInp.files;
                        if (file) {
                            img.src = URL.createObjectURL(file);
                        }
                    };
                }

                $("#UploadPhoto").on("click", function () {
                    $("#UpdatePhoto").click();
                });
                let imgInput = document.getElementById("UpdatePhoto");

                if (imgInput) {
                    let img1 = document.getElementById("UpdateUserPhoto");
                    imgInput.onchange = (evt) => {
                        const [file] = imgInput.files;
                        if (file) {
                            img1.src = URL.createObjectURL(file);
                        }
                    };
                }
        </script>
    </x-slot>
</x-app-layout>
