<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">User Management</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15 right-side-toggle"><i class="fa fa-plus-circle"></i> Add New user</button>
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
                                <span class="btn"><i class="ti-trash"></i> Delete User</span>
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
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><img src="http://localhost/poldea/public/assets/images/default-user.png" alt="user" class="" style="width:36px;"> Zaw Moe Sann</td>
                                        <td><span class="btn waves-effect waves-light btn-sm btn-secondary" style="width:100px;">Coordinator</span></td>
                                        <td>Admission</td>
                                        <td>Marketing Manager</td>
                                        <td><span class="btn waves-effect waves-light btn-sm btn-success" style="width:80px;">Active</span></td>
                                        <td>2020-03-02</td>
                                        <td>2023-03-05 23:23:23</td>
                                        <td class="right-side-toggle"><button type="button" class="btn icon-pencil" title="Edit"></button></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><img src="http://localhost/poldea/public/assets/images/default-user.png" alt="user" class="" style="width:36px;"> Zaw Moe Sann</td>
                                        <td><span class="btn waves-effect waves-light btn-sm btn-secondary" style="width:100px;">Manager</span></td>
                                        <td>Admission</td>
                                        <td>Marketing Manager</td>
                                        <td><span class="btn waves-effect waves-light btn-sm btn-light" style="width:80px;">Inactive</span></td>
                                        <td>2020-03-02</td>
                                        <td>2023-03-05 23:23:23</td>
                                        <td class="right-side-toggle"><button type="button" class="btn icon-pencil" title="Edit"></button></td>
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
            <div class="rpanel-title"> User Info <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    
                </ul>
                <ul class="m-t-20 chatonline">
                    
                </ul>
            </div>
        </div>        
    </div>
</x-app-layout>