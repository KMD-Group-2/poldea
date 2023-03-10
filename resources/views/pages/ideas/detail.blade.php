<x-app-layout>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row mt-4 mr-2 ">
            <div class="col-md-5 align-self-center">
                <a class="m-l-15 text-body" href="create-idea"><i class="fa fa-angle-left mr-2"></i>
                    Back</a>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <a class="btn btn-info d-none d-lg-block m-l-15" href="create-idea"><i class="fa fa-plus-circle"></i>
                        Create New Idea</a>
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
                <div class="">
                    <div class="p-t-0">
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 align-self-center">
                                        <h5 class="card-title m-b-0">Your message title goes here Your message
                                            Idea Post ID: {{ $id }}</h5>
                                    </div>
                                    <div class="col-md-4 align-self-center text-right">
                                        <span class="label label-info m-r-10"><i class="fa fa-paperclip mr-2"></i>10
                                            photos
                                            ,1 file </span>
                                        <span class="label label-info m-r-10">Information Technology</span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-t-0">
                                <div>
                                    <hr class="m-t-0">
                                </div>
                                <div class="row m-b-10">
                                    <div class="col-md-8 d-flex">
                                        <div class="align-self-center">
                                            <a href="javascript:void(0)"><img
                                                    src="{{ asset('assets/images/default-user.png') }}" alt="user"
                                                    width="40" class="img-circle" /></a>
                                        </div>
                                        <div class="p-l-10">
                                            <h6 class="m-b-0">Eugene W. Petersontt</h6>
                                            <small class="text-muted">From: ewp@domain.com</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center text-right">
                                        <small class="text-muted">Created: 12 JUN 2023 | Close : 12 JUN
                                            2023</small>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, pri utroque tincidunt in, maiestatis mnesarchum
                                    ius in. Eu diceret suscipiantur eum. Usu cibo iriure in, natum inimicus ad
                                    sea. Stet impetus scripserit et est, amet consequat mei ei, eius postea
                                    nostrud nam ne. Augue democritum necessitatibus an duo, solum probatus
                                    ocurreret ut sit. Nec prima moderatius ex, </p>


                                <div class="row m-t-40">
                                    <!-- carousel content -->
                                    <div class="carousel-content">
                                        <div class="container-fluid p-0">
                                            <div id="carousel-uploaded" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=1') }}"
                                                            class="img-fluid mx-auto d-block" alt="img1">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=2') }}"
                                                            class="img-fluid mx-auto d-block" alt="img2">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=3') }}"
                                                            class="img-fluid mx-auto d-block" alt="img3">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=4') }}"
                                                            class="img-fluid mx-auto d-block" alt="img4">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=5') }}"
                                                            class="img-fluid mx-auto d-block" alt="img5">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=6') }}"
                                                            class="img-fluid mx-auto d-block" alt="img6">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=7') }}"
                                                            class="img-fluid mx-auto d-block" alt="img7">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=8') }}"
                                                            class="img-fluid mx-auto d-block" alt="img8">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=9') }}"
                                                            class="img-fluid mx-auto d-block" alt="img8">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=10') }}"
                                                            class="img-fluid mx-auto d-block" alt="img8">
                                                    </div>
                                                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                        <img src="{{ asset('//via.placeholder.com/200x200?text=11') }}"
                                                            class="img-fluid mx-auto d-block" alt="img8">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-uploaded"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-uploaded"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon"
                                                        aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="card card-body p-10 rounded-lg">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-lg-3 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-file.svg') }}"
                                                            width="41" alt="docs"
                                                            class="img-circle img-fluid"></a>
                                                </div>
                                                <div class="col-md-6 col-lg-7">
                                                    <small class="text-muted">Policy Document 2.pdf</small>
                                                    <small class="text-muted">11 Aug 2023 , 02:20 AM</small>
                                                </div>
                                                <div class="col-md-2 col-lg-2 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-download.svg') }}"
                                                            width="18" alt="docs-download"
                                                            class=" img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="card card-body p-10 rounded-lg">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-lg-3 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-file.svg') }}"
                                                            width="41" alt="docs"
                                                            class="img-circle img-fluid"></a>
                                                </div>
                                                <div class="col-md-6 col-lg-7">
                                                    <small class="text-muted">Policy Document 2.pdf</small>
                                                    <small class="text-muted">11 Aug 2023 , 02:20 AM</small>
                                                </div>
                                                <div class="col-md-2 col-lg-2 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-download.svg') }}"
                                                            width="18" alt="docs-download"
                                                            class=" img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="card card-body p-10 rounded-lg">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-lg-3 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-file.svg') }}"
                                                            width="41" alt="docs"
                                                            class="img-circle img-fluid"></a>
                                                </div>
                                                <div class="col-md-6 col-lg-7">
                                                    <small class="text-muted">Policy Document 2.pdf</small>
                                                    <small class="text-muted">11 Aug 2023 , 02:20 AM</small>
                                                </div>
                                                <div class="col-md-2 col-lg-2 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-download.svg') }}"
                                                            width="18" alt="docs-download"
                                                            class=" img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="card card-body p-10 rounded-lg">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-lg-3 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-file.svg') }}"
                                                            width="41" alt="docs"
                                                            class="img-circle img-fluid"></a>
                                                </div>
                                                <div class="col-md-6 col-lg-7">
                                                    <small class="text-muted">Policy Document 2.pdf</small>
                                                    <small class="text-muted">11 Aug 2023 , 02:20 AM</small>
                                                </div>
                                                <div class="col-md-2 col-lg-2 text-center">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/ic-doc-download.svg') }}"
                                                            width="18" alt="docs-download"
                                                            class=" img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <hr class="m-t-0 m-t-40">
                                </div>
                                {{-- Like Comment Start --}}
                                <div class="row m-t-30 m-l-5">
                                    <div class="col-md-8 align-self-center">
                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-comment-alt text-info mr-2"></i> 2 comment</a> <a
                                                href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-thumbs-up text-info mr-2"></i> 5 Likes</a> <a
                                                href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-eye text-cyan mr-2"></i> 5 </a> </div>
                                    </div>
                                </div>
                                {{-- Like Comment End --}}
                                {{-- commented-section start --}}
                                <div class="row d-flex justify-content-center mt-100 mb-100 m-t-30">
                                    <div class="col-lg-12">
                                        <div class="coment-bottom bg-white p-2 px-4">
                                            <div class="d-flex flex-row add-comment-section mt-4 mb-4"><img
                                                    class="img-fluid img-responsive rounded-circle mr-2"
                                                    src="https://i.imgur.com/qdiP4DB.jpg" width="38"><input
                                                    type="text" class="form-control mr-3"
                                                    placeholder="Add comment"><button class="btn btn-primary"
                                                    type="button">Comment</button></div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body text-start">
                                                <h5 class="card-title">Comments (10)</h5>
                                            </div>
                                            <div class="comment-widgets">
                                                <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row m-t-0">
                                                    <div class="p-2"><img src="https://i.imgur.com/Ur43esv.jpg"
                                                            alt="user" width="50" class="rounded-circle">
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">James Thomas</h6>
                                                        <span class="text-muted float-right">April 14, 2019</span>
                                                        <span class="m-b-15 d-block">This is awesome website. I would
                                                            love to comeback again. </span>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row">
                                                    <div class="p-2"><img src="https://i.imgur.com/8RKXAIV.jpg"
                                                            alt="user" width="50" class="rounded-circle">
                                                    </div>
                                                    <div class="comment-text active w-100">
                                                        <h6 class="font-medium">Michael Hussey</h6>
                                                        <span class="text-muted float-right">May 10, 2019</span> <span
                                                            class="m-b-15 d-block">Thanks bbbootstrap.com for providing
                                                            such useful snippets. </span>

                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row">
                                                    <div class="p-2"><img src="https://i.imgur.com/J6l19aF.jpg"
                                                            alt="user" width="50" class="rounded-circle">
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                                        <span class="text-muted float-right">August 1, 2019</span>
                                                        <span class="m-b-15 d-block">Great industry leaders are not the
                                                            real heroes of stock market. </span>

                                                    </div>
                                                </div>
                                            </div> <!-- Card -->
                                        </div>
                                    </div>
                                </div>
                                {{-- commented-section end --}}
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>

</x-app-layout>
