<x-app-layout>
    <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Ideas</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <a class="btn btn-info d-none d-lg-block m-l-15" href="create_idea"><i class="fa fa-plus-circle"></i>  Create New Idea</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="card-body inbox-panel">
                                    <div class="list-group b-0 mail-list">
                                        <h3 class="card-title m-t-40">Filter Setting</h3>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>
                                            All
                                         </a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Financial (0)</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Development (0)</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Category 3</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Category 4</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Category 5</a>
                                         <h3 class="card-title m-t-40">Academic Years</h3>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>2023</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>2022</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>2021</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>2020</a>
                                         <a href="javascript:void(0)" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>2019</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 bg-light border-left">
                                <div class="card-body">

                                    <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">

                                        <button type="button" class="btn btn-secondary font-18">Sort by</button>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary font-18 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Latest idea </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Latest idea</a> <a class="dropdown-item" href="javascript:void(0)">Oldest idea</a> <a class="dropdown-item" href="javascript:void(0)">Most popular</a> <a class="dropdown-item" href="javascript:void(0)">Least popular</a>  </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body p-t-0">
                                    <div class="card b-all shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <h5 class="card-title m-b-0">Your message title goes here Your message title goes here</h5>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <span class="label label-info m-r-10">Information Technology</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <hr class="m-t-0">
                                        </div>
                                        <div class="card-body p-t-0">
                                            <div class="row m-b-10">
                                                <div class="col-md-8 d-flex">
                                                    <div class="align-self-center">
                                                        <a href="javascript:void(0)"><img src="{{ asset('assets/images/default-user.png') }}" alt="user" width="40" class="img-circle" /></a>
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h6 class="m-b-0">Eugene W. Petersontt</h6>
                                                        <small class="text-muted">From: ewp@domain.com</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <small class="text-muted">Created: 12 JUN 2023  |  Close : 12 JUN 2023</small>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis mnesarchum ius in. Eu diceret suscipiantur eum. Usu cibo iriure in, natum inimicus ad sea. Stet impetus scripserit et est, amet consequat mei ei, eius postea nostrud nam ne. Augue democritum necessitatibus an duo, solum probatus ocurreret ut sit. Nec prima moderatius ex, </p>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-comment-alt text-info"></i>  2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-thumbs-up text-info"></i> 5 Likes</a>  <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-eye text-cyan"></i> 5 </a> </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <a class="text-info" href="create_idea"><span class="hide-menu">View Detail</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card b-all shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <h5 class="card-title m-b-0">Your message title goes here Your message title goes here</h5>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <span class="label label-warning m-r-10">Financial Management</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <hr class="m-t-0">
                                        </div>
                                        <div class="card-body p-t-0">
                                            <div class="row m-b-10">
                                                <div class="col-md-8 d-flex">
                                                    <div class="align-self-center">
                                                        <a href="javascript:void(0)"><img src="data:image/jpeg;base64,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"  alt="user" width="40" class="img-circle" /></a>
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h6 class="m-b-0">Mr. Wilford Peterson</h6>
                                                        <small class="text-muted">From: ewp@domain.com</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <small class="text-muted">Created: 12 JUN 2023  |  Close : 12 JUN 2023</small>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis mnesarchum ius in. Eu diceret suscipiantur eum. Usu cibo iriure in, natum inimicus ad sea. Stet impetus scripserit et est, amet consequat mei ei, eius postea nostrud nam ne. Augue democritum necessitatibus an duo, solum probatus ocurreret ut sit. Nec prima moderatius ex, </p>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-comment-alt text-info"></i>  2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-thumbs-up text-info"></i> 5 Likes</a>  <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-eye text-cyan"></i> 5 </a> </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <a class="text-info" href="create_idea"><span class="hide-menu">View Detail</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card b-all shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <h5 class="card-title m-b-0">Your message title goes here Your message title goes here</h5>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <span class="label label-info m-r-10">Information Technology</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <hr class="m-t-0">
                                        </div>
                                        <div class="card-body p-t-0">
                                            <div class="row m-b-10">
                                                <div class="col-md-8 d-flex">
                                                    <div class="align-self-center">
                                                        <a href="javascript:void(0)"><img src="{{ asset('assets/images/default-user.png') }}" alt="user" width="40" class="img-circle" /></a>
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h6 class="m-b-0">Mr. Wilford Peterson</h6>
                                                        <small class="text-muted">From: ewp@domain.com</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <small class="text-muted">Created: 12 JUN 2023  |  Close : 12 JUN 2023</small>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis mnesarchum ius in. Eu diceret suscipiantur eum. Usu cibo iriure in, natum inimicus ad sea. Stet impetus scripserit et est, amet consequat mei ei, eius postea nostrud nam ne. Augue democritum necessitatibus an duo, solum probatus ocurreret ut sit. Nec prima moderatius ex, </p>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-comment-alt text-info"></i>  2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-thumbs-up text-info"></i> 5 Likes</a>  <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-eye text-cyan"></i> 5 </a> </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <a class="text-info" href="create_idea"><span class="hide-menu">View Detail</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card b-all shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <h5 class="card-title m-b-0">Your message title goes here Your message title goes here</h5>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <span class="label label-info m-r-10">Information Technology</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <hr class="m-t-0">
                                        </div>
                                        <div class="card-body p-t-0">
                                            <div class="row m-b-10">
                                                <div class="col-md-8 d-flex">
                                                    <div class="align-self-center">
                                                        <a href="javascript:void(0)"><img src="{{ asset('assets/images/default-user.png') }}" alt="user" width="40" class="img-circle" /></a>
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h6 class="m-b-0">Mr. Wilford Peterson</h6>
                                                        <small class="text-muted">From: ewp@domain.com</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <small class="text-muted">Created: 12 JUN 2023  |  Close : 12 JUN 2023</small>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis mnesarchum ius in. Eu diceret suscipiantur eum. Usu cibo iriure in, natum inimicus ad sea. Stet impetus scripserit et est, amet consequat mei ei, eius postea nostrud nam ne. Augue democritum necessitatibus an duo, solum probatus ocurreret ut sit. Nec prima moderatius ex, </p>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 align-self-center">
                                                    <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-comment-alt text-info"></i>  2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-thumbs-up text-info"></i> 5 Likes</a>  <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-eye text-cyan"></i> 5 </a> </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <a class="text-info" href="create_idea"><span class="hide-menu">View Detail</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
</x-app-layout>
