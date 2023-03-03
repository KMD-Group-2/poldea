<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Staff Management</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15 new-staff-form"><i class="fa fa-plus-circle"></i> Add New Staff</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="padding-bottom:30px;">
                            <div class="col-md-5 align-self-center">
                                <img src="{{ asset('assets/images/selector.svg') }}"/> <img src="{{ asset('assets/images/downarrow.svg') }}"/> Selected (1) <img src="{{ asset('assets/images/divider.svg') }}" style="padding-left:20px;"/>
                                <span class="btn"><i class="ti-trash"></i> Delete Staff</span>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <span>1-10 of 70</span> <img class="btn" src="{{ asset('assets/images/backwardarrow.svg') }}"/> <img class="btn" src="{{ asset('assets/images/forwardarrow.svg') }}" style="padding-left:0px"/>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Job Title</th>
                                        <th>Status</th>
                                        <th>Created Date <i class="fas fa-sort-amount-down"></i></th>
                                        <th>Last Activity Date <i class="fas fa-sort-amount-down"></i></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><img src="http://localhost/poldea/public/assets/images/default-user.png" alt="user" class="" style="width:36px;"> Zaw Moe Sann</td>
                                        <td>zms@gmail.com</td>
                                        <td>Admission</td>
                                        <td>Marketing Manager</td>
                                        <td><span class="btn waves-effect waves-light btn-sm btn-success" style="width:80px;">Active</span></td>
                                        <td>2020-03-02</td>
                                        <td>2023-03-05 23:23:23</td>
                                        <td class="right-side-toggle btn"><img src="{{ asset('assets/images/edit.svg') }}"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><img src="http://localhost/poldea/public/assets/images/default-user.png" alt="user" class="" style="width:36px;"> Zaw Moe Sann</td>
                                        <td>zms@gmail.com</td>
                                        <td>Admission</td>
                                        <td>Marketing Manager</td>
                                        <td><span class="btn waves-effect waves-light btn-sm btn-light" style="width:80px;">Inactive</span></td>
                                        <td>2020-03-02</td>
                                        <td>2023-03-05 23:23:23</td>
                                        <td class="right-side-toggle btn"><img src="{{ asset('assets/images/edit.svg') }}"/></td>
                                    </tr>
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
            <div class="rpanel-title"> Staff Info <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">

                </ul>
                <ul class="m-t-20 chatonline">

                </ul>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModalNewStaff">
        <div class="modal-dialog" style="max-width: 100% !important;">
            <div class="modal-content" style="width: 33%;top: 29px;margin-left: 33%;">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Staff<span id="total_records" style="font-weight:bold;"> </span></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-primary">
                                    <div class="overlay white" id="loading" style="display:none;position: absolute;width: 100%;height: 100%;z-index: 10000;">
                                        <i class="fas fa-3x fa-sync-alt rotate360"  style="margin: 70px 45%;"></i>
                                    </div>
                                    <form role="form" id="frmNewStaff">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="text-align: center;">
                                                        <input style="display:none" name="file" id="input-image-hidden" onchange="document.getElementById('previewing').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png" >
                                                        <img id="previewing" name="previewing" src="{{ asset('assets/images/default-user.png') }}" style="height:200px; width:auto;cursor:pointer;" onclick="HandleBrowseClick('input-image-hidden');" title="Click to Change the Photo.">
                                                    </div>
                                                    <div class="form-group" style="margin-bottom: 5px">
                                                        <label class="col-form-label" style="text-align: right;">Department:</label>
                                                        <select class="form-control" id="cboDepartment" style="text-align:right">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="margin-bottom: 5px">
                                                        <label class="col-form-label" style="text-align: right;">Job Title:</label>
                                                        <select class="form-control" id="cboJobTitle" style="text-align:right">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="margin-bottom: 5px">
                                                        <label class="col-form-label" style="text-align: right;">Name:</label>
                                                        <input type="text" class="form-control" id="txtStaffName">
                                                    </div>
                                                    <div class="form-group" style="margin-bottom: 5px">
                                                        <label class="col-form-label" style="text-align: right;">Email:</label>
                                                        <input type="text" class="form-control" id="txtEmail">
                                                    </div>
                                                    <div class="form-group row" style="margin-bottom: 0px;">
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-light btn-block" onclick="">Cancel</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-info btn-block" onclick="add()">Add New</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>	
            </div>
        </div>
    </div>
    <script>
        $( ".new-staff-form" ).click(function() {
            $("#myModalNewStaff").modal('show');
        });
        function HandleBrowseClick(input_image){
            var fileinput = document.getElementById(input_image);
            fileinput.click();
        } 
    </script>
</x-app-layout>
