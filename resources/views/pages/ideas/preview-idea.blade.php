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
                        <form action="#" class="validation-wizard wizard-circle">
                            <!-- Step 1 -->
                            <h6>Add Information</h6>
                            <section></section>
                            <!-- Step 2 -->
                            <h6>Upload files</h6>
                            <section></section>
                            <!-- Step 3 -->
                            <h6>Preview Post</h6>
                            <section>
                                <div class="card radius mb-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8 align-self-center">
                                                <h5 class="card-title">{{ $idea->title ?? '' }}</h5>
                                            </div>
                                            <div class="col-md-4 align-self-center text-md-right">
                                                <span
                                                    class="card-title label label-info">{{ $idea->category->name ?? '' }}</span>
                                            </div>
                                        </div>
                                        <hr class="m-t-0">
                                        <div class="p-t-0">
                                            <div class="row m-b-10">
                                                <div class="col-md-8 d-flex">
                                                    <div class="align-self-center">
                                                        <a href="javascript:void(0)"><img
                                                                src="{{ asset('assets/images/default-user.png') }}"
                                                                alt="user" width="40" class="img-circle" /></a>
                                                    </div>
                                                    <div class="p-l-10">
                                                        <h6 class="m-b-0">{{ Auth::user()->staff->name ?? '' }}
                                                        </h6>
                                                        <small
                                                            class="text-muted">{{ Auth::user()->staff->position->name ?? '' }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 align-self-center text-right">
                                                    <small class="text-muted">Created:
                                                        {{ Carbon\Carbon::parse($idea->created_at)->format('d M Y') }}
                                                    </small>
                                                </div>
                                            </div>
                                            <div>{!! $idea->description ?? '' !!}</div>

                                            <div class="d-flex mt-4 justify-content-end">
                                                <a href="" class="text-info">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="m-b-0 mt-4">Academic Closure Date <i class="fas fa-info-circle"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Idea can be publish before academic year closure date."></i></h6>
                                <div class="row my-2">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex">
                                            <input type="date" class="form-control bg-white" style="opacity: 1"
                                                value="{{ $idea->academic_year->closure_date }}" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="card radius my-4 term-condition">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <h5 class="card-title">Term & Conditions</h5>
                                            </div>
                                        </div>
                                        <hr class="m-t-0">
                                        <div class="content">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!Lorem ipsum dolor sit
                                            amet consectetur adipisicing elit. Ipsum ea aliquam
                                            quia sequi deleniti, eveniet laborum qui, asperiores hic, maiores nisi. Aut
                                            in dolor magnam modi perferendis, aliquid corrupti sed!
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                        <input type="checkbox" class="custom-control-input" id="checkbox0" name="term-condition">
                                        <label class="custom-control-label" for="checkbox0">I agree Terms and Conditions</label>
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

    <x-slot name="script">
        <script>
            var form = $(".validation-wizard").show();

            $(".validation-wizard").steps({
                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Publish <i class='fas fa-angle-up'></i> ",
                    previous: "<i class='fas fa-angle-left'></i> Previous",
                },
                startIndex: 2,
                onStepChanging: function(event, currentIndex, newIndex) {
                    if (newIndex == 0) {
                        let url = "{{ route('staff.idea.add-info', ['idea' => ':id']) }}";
                        url = url.replace(':id', "{{ $idea->id }}");
                        window.location.href = url;
                    } else if (newIndex == 1) {
                        let url = "{{ route('staff.idea.upload-file', ['idea' => ':id']) }}";
                        url = url.replace(':id', "{{ $idea->id }}");
                        window.location.href = url;
                    }

                    return false;
                },
            })

            $('.validation-wizard .actions li:last-child a').attr('href','javascript:void(0)').addClass('disabled');

            $('input[name=term-condition]').on('click',function(){
                if($(this).is(':checked')) {
                    $('.validation-wizard .actions li:last-child a').attr('href','#finish').removeClass('disabled');
                } else{
                    $('.validation-wizard .actions li:last-child a').attr('href','javascript:void(0)').addClass('disabled');
                }
            })
        </script>
    </x-slot>

</x-app-layout>
