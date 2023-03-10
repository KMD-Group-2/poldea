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
                <h4 class="font-bold">Idea Submission Form </h4>
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
                        <form action="{{ route('staff.idea.upload-file.store') }}" method="POST" class="validation-wizard wizard-circle" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="idea_id" value="{{ $idea->id }}">
                            <!-- Step 1 -->
                            <h6>Add Information</h6>
                            <section></section>
                            <!-- Step 2 -->
                            <h6>Upload files</h6>
                            <section>
                                <div class="card radius">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8 align-self-center">
                                                <h5 class="card-title">{{ $idea->title ?? '' }}</h5>
                                            </div>
                                            <div class="col-md-4 align-self-center text-md-right">
                                                <span class="card-title label label-info">{{ $idea->category->name ?? '' }}</span>
                                            </div>
                                        </div>
                                        <hr class="m-t-0">
                                        <div class="p-t-0">
                                            <div class="row m-b-10">
                                                <div class="col-md-8 d-flex">
                                                    <div class="align-self-center">
                                                        <a href="javascript:void(0)"><img
                                                                src="{{ asset('assets/images/default-user.png') }}"
                                                                alt="user" width="40"
                                                                class="img-circle" /></a>
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h6 class="m-b-0">{{ Auth::user()->staff->name ?? '' }}</h6>
                                                        <small class="text-muted">{{ Auth::user()->staff->position->name ?? '' }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <small class="text-muted">Created: {{ Carbon\Carbon::parse($idea->created_at)->format('d M Y') }} </small>
                                                </div>
                                            </div>
                                            <div>{!! $idea->description ?? '' !!}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="row justify-content-end">
                                                    <div class="d-flex">
                                                        <a class="btn btn-info d-none d-lg-block m-l-15" href="#" class="rounded-lg"><i
                                                                class="fa far fa-images"></i>
                                                            Upload
                                                            Image </a>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a class="btn btn-info d-none d-lg-block m-l-15" href="#" class="rounded-lg"><i
                                                                class="fa fa-upload"></i> Upload
                                                            File</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h6>Preview Post</h6>
                            <section></section>
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

    <x-slot name="script">
        <script>
            var form = $(".validation-wizard").show();

            $(".validation-wizard").steps({
                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    next: "<i class='fas fa-angle-right'></i> Next",
                    previous: "<i class='fas fa-angle-left'></i> Previous",
                },
                startIndex: 1,
                onStepChanging: function(event, currentIndex, newIndex) {
                    if(newIndex == 0)
                    {
                        let url = "{{ route('staff.idea.add-info', ['idea' => ':id']) }}";
                        url = url.replace(':id', "{{ $idea->id }}");
                        window.location.href = url;
                    }else if(newIndex == 2) {
                        let url = "{{ route('staff.idea.preview-idea', ['idea' => ':id']) }}";
                        url = url.replace(':id', "{{ $idea->id }}");
                        window.location.href = url;
                    }

                    return false;
                },
            })
        </script>
    </x-slot>

</x-app-layout>
