<x-app-layout>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=" m-4">
            <div class="col-md-5 align-self-center">
                <h4 class="font-bold">Create Idea Post </h4>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <!-- Validation wizard -->
        <div class="row" id="validation">
            <div class="col-12">
                <div class="wizard-content">
                    <div>
                        <form action="#" class="validation-wizard wizard-circle">
                            <!-- Step 1 -->
                            <h6>Add Information</h6>
                            <section>
                                <div class="card radius">
                                    <div class="card-body  mt-4 mb-4 mr-5 ml-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Category : <span class="danger">*</span>
                                                    </label>
                                                    <select class="custom-select form-control required" id="wlocation2"
                                                        name="location">
                                                        <option value="">Select Category</option>
                                                        <option value="India">Technology</option>
                                                        <option value="USA">Finicial</option>
                                                        <option value="Dubai">Management</option>
                                                        <option value="Dubai">Educations</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wdate2">Academic Year :</label>
                                                    <input type="date" class="form-control required" id="wdate2"
                                                        value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="wtitle"> Title : <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" id="wtitle"
                                                        name="title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Description : <span
                                                            class="danger">*</span>
                                                    </label>
                                                    <textarea class="textarea_editor form-control " id="wdescription" name="description" rows="7"
                                                        placeholder="Enter text description..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h6>Upload files</h6>
                            <section>
                                <div class="card radius">
                                    <div class="card-body  mt-4 mb-4 mr-5 ml-5">

                                        <div class="card b-all shadow-none">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-8 align-self-center">
                                                        <h5 class="card-title">Your message title goes here
                                                            Your message title goes here</h5>
                                                    </div>
                                                    <div class="col-md-4 align-self-center text-right">
                                                        <span class="label label-info">Information
                                                            Technology</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            <div class=" p-t-0">
                                                <div class="row m-b-10">
                                                    <div class="col-md-8 d-flex">
                                                        <div class="align-self-center">
                                                            <a href="javascript:void(0)"><img
                                                                    src="{{ asset('assets/images/default-user.png') }}"
                                                                    alt="user" width="40"
                                                                    class="img-circle" /></a>
                                                        </div>
                                                        <div class="p-l-10">
                                                            <h6 class="m-b-0">Eugene W. Petersontt</h6>
                                                            <small class="text-muted">From: ewp@domain.com</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 align-self-center text-right">
                                                        <small class="text-muted">Created: 12 JUN 2023 | Close : 12
                                                            JUN 2023</small>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis
                                                    mnesarchum ius in. Eu diceret suscipiantur eum. Usu cibo iriure
                                                    in, natum inimicus ad sea. Stet impetus scripserit et est, amet
                                                    consequat mei ei, eius postea nostrud nam ne. Augue democritum
                                                    necessitatibus an duo, solum probatus ocurreret ut sit. Nec
                                                    prima moderatius ex, </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="d-flex">
                                                    <a class="btn btn-info d-none d-lg-block m-l-15" href="#"><i
                                                            class="fa far fa-images"></i>
                                                        Upload
                                                        Image </a>
                                                </div>
                                                <div class="d-flex">
                                                    <a class="btn btn-info d-none d-lg-block m-l-15" href="#"><i
                                                            class="fa fa-upload"></i> Upload
                                                        File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex">
                                                    <input type="date" class="form-control"
                                                        value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5 ">

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h6>Preview Post</h6>
                            <section>
                                <div class="card radius">
                                    <div class="card-body  mt-4 mb-4 mr-5 ml-5">

                                        <div class="card b-all shadow-none">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-8 align-self-center">
                                                        <h5 class="card-title">Your message title goes here
                                                            Your message title goes here</h5>
                                                    </div>
                                                    <div class="col-md-4 align-self-center text-right">
                                                        <span class="label label-info">Information
                                                            Technology</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            <div class=" p-t-0">
                                                <div class="row m-b-10">
                                                    <div class="col-md-8 d-flex">
                                                        <div class="align-self-center">
                                                            <a href="javascript:void(0)"><img
                                                                    src="{{ asset('assets/images/default-user.png') }}"
                                                                    alt="user" width="40"
                                                                    class="img-circle" /></a>
                                                        </div>
                                                        <div class="p-l-10">
                                                            <h6 class="m-b-0">Eugene W. Petersontt</h6>
                                                            <small class="text-muted">From: ewp@domain.com</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 align-self-center text-right">
                                                        <small class="text-muted">Created: 12 JUN 2023 | Close : 12
                                                            JUN 2023</small>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis
                                                    mnesarchum ius in. Eu diceret suscipiantur eum. Usu cibo iriure
                                                    in, natum inimicus ad sea. Stet impetus scripserit et est, amet
                                                    consequat mei ei, eius postea nostrud nam ne. Augue democritum
                                                    necessitatibus an duo, solum probatus ocurreret ut sit. Nec
                                                    prima moderatius ex, </p>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                            <input type="checkbox" class="custom-control-input" id="checkbox0"
                                                value="check">
                                            <label class="custom-control-label" for="checkbox0">Post as
                                                Anonymous</label>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis mnesarchum
                                            ius in. Eu diceret suscipiantur eum. Usu cibo iriure in, natum inimicus ad
                                            sea. Stet impetus scripserit et est, </p>

                                        <h6 class="m-b-0 mt-5">Idea Closure Date</h6>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex">
                                                    <input type="date" class="form-control"
                                                        value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5 ">

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</x-app-layout>
