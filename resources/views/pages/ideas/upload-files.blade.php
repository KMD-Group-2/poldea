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
                        <form action="{{ route('staff.idea.upload-file.store') }}" method="POST"
                            class="validation-wizard wizard-circle" enctype="multipart/form-data">
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
                                                        <h6 class="m-b-0">{{ Auth::user()->staff->name ?? '' }}</h6>
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
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-end">
                                                    <a class="btn btn-info d-none d-lg-block m-l-15" href="#"
                                                        class="rounded-lg"><i class="fa far fa-images"></i>
                                                        Upload
                                                        Image </a>
                                                    <a class="btn btn-info d-none d-lg-block m-l-15"
                                                        href="javascript:void(0)" onclick="$('[name=file]').click();"
                                                        class="rounded-lg"><i class="fa fa-upload"></i> Upload
                                                        File</a>
                                                    <input type="file" name="file" class="d-none"
                                                        accept=".pdf, .doc, .docx" onchange="OnChangeFile(this)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-5 ">
                                            <div class="col-12">
                                                <!-- carousel content -->
                                                <div class="carousel-content">
                                                    <div class="container-fluid">
                                                        <div id="carousel-uploaded" class="carousel slide"
                                                            data-ride="carousel">
                                                            <div class="carousel-inner w-100 mx-auto" role="listbox">
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=1') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img1">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=2') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img2">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=3') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img3">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=4') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img4">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=5') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img5">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=6') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img6">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=7') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img7">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=8') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img8">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=9') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img8">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=10') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img8">
                                                                </div>
                                                                <div
                                                                    class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <img src="{{ asset('//via.placeholder.com/200x200?text=11') }}"
                                                                        class="img-fluid mx-auto d-block"
                                                                        alt="img8">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carousel-uploaded"
                                                                role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span>
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
                                        </div>

                                        <div class="row my-5 files-area">
                                            @foreach ($idea->documents as $file)
                                                <div class="file-area col-md-6 col-lg-4 col-xl-3 mb-4"
                                                    data-entry-id="{{ $file->id }}">
                                                    <div class="file-tag border">
                                                        <div class="d-flex no-block py-2 px-3">
                                                            <div
                                                                class="file-image rounded-circle d-flex no-block align-items-center justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                                                    y="0px" width="20" height="20"
                                                                    viewBox="0 0 48 48">
                                                                    <path fill="#469CE0"
                                                                        d="M40 45L8 45 8 3 30 3 40 13z">
                                                                    </path>
                                                                    <path fill="#E1F5FE" d="M38.5 14L29 14 29 4.5z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="d-flex flex-column ml-3 no-block"
                                                                style="flex-grow: 1">
                                                                <p class="mb-0 file-name">
                                                                    {{ $file->file_name . '.' . $file->type }}</p>
                                                                <span
                                                                    class="text-muted created-at">{{ Carbon\Carbon::parse($file->created_at)->format('d M Y, g:i A') }}</span>
                                                            </div>
                                                            <div
                                                                class="delete-file-content d-flex no-block align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="ml-auto text-danger bg-transparent border-0"
                                                                    onclick="OnDeleteFile(this)"><i
                                                                        class="far fa-times-circle icon-2x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h6>Preview Post</h6>
                            <section></section>
                        </form>
                        <form action="{{ route('staff.idea.upload-file.delete') }}" id="DeleteFileForm"
                            method="POST">@csrf</form>
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
                    if (newIndex == 0) {
                        let url = "{{ route('staff.idea.add-info', ['idea' => ':id']) }}";
                        url = url.replace(':id', "{{ $idea->id }}");
                        window.location.href = url;
                    } else if (newIndex == 2) {
                        let url = "{{ route('staff.idea.preview-idea', ['idea' => ':id']) }}";
                        url = url.replace(':id', "{{ $idea->id }}");
                        window.location.href = url;
                    }

                    return false;
                },
            })

            function OnDeleteFile(button) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        let id = $(button).closest('.file-area').data('entry-id'),
                            deleteForm = $("#DeleteFileForm"),
                            formData = new FormData(deleteForm[0]);

                        formData.append('id', id);

                        $.ajax({
                            type: deleteForm.attr('method'),
                            url: deleteForm.attr('action'),
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                        }).done(function(res) {
                            deleteForm.trigger('reset');
                            ReloadFiles(id);
                        });
                    }
                })
            }

            function OnChangeFile(input) {
                if (input.value.length > 0) {
                    let allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;

                    if (!allowedExtensions.exec(input.value)) {
                        Swal.fire({
                            type: 'error',
                            title: 'Please upload file having extensions!',
                            text: 'Allow extensions are .pdf,.doc,.docx only!',
                        })
                        input.value = '';
                        return false;
                    } else {
                        let formData = new FormData(form[0]);

                        $.ajax({
                            beforeSend: function() {
                                UploadProgressFile();
                                $('.progress .progress-bar').css('width', '99%');
                            },
                            type: $(form).attr('method'),
                            url: $(form).attr('action'),
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                        }).done(function(res) {
                            $(form).trigger('reset');
                            $('.progress .progress-bar').removeClass('bg-info').css('width', '100%').addClass('bg-success');
                            setTimeout(() => {
                                UploadFileCompleted(res.file);
                            }, 3000);
                        });
                    }
                }
            }

            function ReloadFiles(id) {
                $('.files-area .file-area').each(function(i, el) {
                    if ($(el).data('entry-id') == id) {
                        $(el).remove();
                    }
                })
            }

            function UploadProgressFile() {
                var html = `<div class="file-area-preview col-md-6 col-lg-4 col-xl-3 mb-4" data-entry-id="">
                                <div class="file-tag border">
                                    <div class="d-flex no-block py-2 px-3">
                                        <div
                                            class="file-image rounded-circle d-flex no-block align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                                y="0px" width="20" height="20"
                                                viewBox="0 0 48 48">
                                                <path fill="#469CE0"
                                                    d="M40 45L8 45 8 3 30 3 40 13z">
                                                </path>
                                                <path fill="#E1F5FE" d="M38.5 14L29 14 29 4.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column ml-3 no-block"
                                            style="flex-grow: 1">
                                            <p class="mb-0 file-name">
                                                Processing...</p>
                                            <span
                                                class="text-muted created-at"></span>
                                        </div>
                                        <div
                                            class="delete-file-content d-none align-items-center justify-content-end">
                                            <button type="button"
                                                class="ml-auto text-danger bg-transparent border-0"
                                                onclick="OnDeleteFile(this)"><i
                                                    class="far fa-times-circle icon-2x"></i></button>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info wow animated progress-animated"
                                            style="width: 0%; height:6px;" role="progressbar"> <span
                                                class="sr-only"></span> </div>
                                    </div>
                                </div>
                            </div>`;

                $(".files-area").append(html);
            }

            function UploadFileCompleted(data) {
                let content = $('.files-area .file-area-preview');

                content.removeClass('file-area-preview').addClass('file-area');
                content.data('entry-id',data.id);
                content.find('.file-name').html(data.file_name + '.' + data.type);
                content.find('.created-at').html(data.carbon_created_at);
                content.find('.delete-file-content').removeClass('d-none').addClass('d-flex no-block');

                content.find('.progress').remove();
            }
        </script>
    </x-slot>

</x-app-layout>
