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
                                                    <a class="btn btn-info d-none d-lg-block m-l-15"
                                                        href="javascript:void(0)" data-type="image"
                                                        onclick="onClickFile(this)" class="rounded-lg"><i
                                                            class="fa far fa-images"></i>
                                                        Upload
                                                        Image </a>
                                                    <a class="btn btn-info d-none d-lg-block m-l-15"
                                                        href="javascript:void(0)" data-type="file"
                                                        onclick="onClickFile(this)" class="rounded-lg"><i
                                                            class="fa fa-upload"></i> Upload
                                                        File</a>
                                                    <input type="file" name="file" class="d-none"
                                                        onchange="OnChangeFile(this)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <!-- Carousel -->
                                                <div class="carousel-wrap">
                                                    <div class="owl-carousel owl-theme">
                                                        @php
                                                            $index = 0;
                                                        @endphp
                                                        @foreach ($idea->documents->whereIn('type', ['png', 'jpg', 'jpeg'])->sortByDesc('id') as $image)
                                                            <div class="item">
                                                                <a href="{{ asset($image->file_path) }}"
                                                                    title="{{ $image->file_name }}.{{ $image->type }}"
                                                                    id="{{ $image->id }}" class="zoom-popup">
                                                                    <img src="{{ asset($image->file_path) }}"
                                                                        class="mx-auto d-block rounded"
                                                                        alt="{{ $image->file_name }}" width="200px"
                                                                        height="200px">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-5 files-area">
                                            @foreach ($idea->documents->whereIn('type', ['doc', 'docx', 'pdf']) as $file)
                                                <div class="file-area col-md-6 col-lg-4 col-xl-4 mb-4"
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
                                                                    {{ $file->file_name }}.{{ $file->type }}</p>
                                                                <span
                                                                    class="text-muted created-at">{{ Carbon\Carbon::parse($file->created_at)->format('d M Y, g:i A') }}</span>
                                                            </div>
                                                            <div
                                                                class="delete-file-content d-flex no-block align-items-center justify-content-end">
                                                                <button type="button"
                                                                    class="ml-auto text-danger bg-transparent border-0"
                                                                    onclick="OnDeleteFile(this)" data-delete="file"><i
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
                        <form action="{{ route('staff.idea.upload-file.delete') }}" id="DeleteFileForm" method="POST">
                            @csrf</form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <div class="d-none preview-area">
            <div class="file-preview">
                <div class="file-area-preview col-md-6 col-lg-4 col-xl-4 mb-4" data-entry-id="">
                    <div class="file-tag border">
                        <div class="d-flex no-block py-2 px-3">
                            <div
                                class="file-image rounded-circle d-flex no-block align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                    height="20" viewBox="0 0 48 48">
                                    <path fill="#469CE0" d="M40 45L8 45 8 3 30 3 40 13z">
                                    </path>
                                    <path fill="#E1F5FE" d="M38.5 14L29 14 29 4.5z">
                                    </path>
                                </svg>
                            </div>
                            <div class="d-flex flex-column ml-3 no-block" style="flex-grow: 1">
                                <p class="mb-0 file-name">
                                    Processing...</p>
                                <span class="text-muted created-at"></span>
                            </div>
                            <div class="delete-file-content d-none align-items-center justify-content-end">
                                <button type="button" class="ml-auto text-danger bg-transparent border-0"
                                    data-delete="file" onclick="OnDeleteFile(this)"><i
                                        class="far fa-times-circle icon-2x"></i></button>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info wow animated progress-animated"
                                style="width: 0%; height:6px;" role="progressbar"> <span class="sr-only"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-preview">
                <div class="item item-preview">
                    <div
                        class="image-preload mx-auto rounded d-flex flex-column align-items-center justify-content-center">
                        <div class="lds-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <p class="text-main">Processing...</p>
                    </div>
                    <a href="" title="" id="" class="zoom-popup">
                        <img src="" class="mx-auto d-none rounded" alt="" width="200px"
                            height="200px">
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    <x-slot name="script">
        <script>
            var filetype,
                form = $(".validation-wizard").show();

            $(document).ready(function() {
                var owl = $('.owl-carousel').owlCarousel({
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
                    navText: ["<div class='nav-btn prev-slide'></div>",
                        "<div class='nav-btn next-slide'></div>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        },
                        1300: {
                            items: 4
                        },
                        1400: {
                            items: 5
                        }
                    }
                })

                $('.owl-carousel').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    image: {
                        verticalFit: true,
                        titleSrc: function(item) {
                            return item.el.attr('title') +
                                ' &middot; <a class="image-source-link" href="javascript:void(0)" data-delete="image" data-id="' +
                                item.el.attr('id') + '" onclick="OnDeleteFile(this)" index="' + item.index + '">Delete Image</a>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300, // don't foget to change the duration also in CSS
                        opener: function(element) {
                            return element.find('img');
                        }
                    }
                });
            })


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

            function onClickFile(tag) {
                filetype = $(tag).data('type');
                if (filetype == 'image') {
                    $('[name=file]').attr('accept', '.png, .jpg, .jpeg');
                } else {
                    $('[name=file]').attr('accept', '.pdf, .doc, .docx');
                }

                $('[name=file]').click();
            }

            function OnChangeFile(input) {
                if (input.value.length > 0) {

                    if (filetype == 'image') {
                        var allowedExtensions = /(\.png|\.jpg|\.jpeg)$/i,
                            errorText = 'Allow extensions are .png,.jpg,.jpeg only!';
                    } else {
                        var allowedExtensions = /(\.pdf|\.doc|\.docx)$/i,
                            errorText = 'Allow extensions are .pdf,.doc,.docx only!';
                    }

                    if (!allowedExtensions.exec(input.value)) {
                        Swal.fire({
                            type: 'error',
                            title: 'Please upload file having extensions!',
                            text: errorText,
                        })
                        input.value = '';
                        return false;
                    } else {
                        let formData = new FormData(form[0]);

                        $.ajax({
                            beforeSend: function() {
                                UploadProgressFile();
                            },
                            type: $(form).attr('method'),
                            url: $(form).attr('action'),
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                        }).done(function(res) {
                            $(form).trigger('reset');

                            setTimeout(() => {
                                UploadFileCompleted(res.file);
                            }, 3000);
                        });
                    }
                }
            }

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
                        let type = $(button).data('delete');
                        if (type == 'image') {
                            var id = $(button).data('id');
                        } else {
                            var id = $(button).closest('.file-area').data('entry-id');
                        }

                        var deleteForm = $("#DeleteFileForm"),
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
                            if (type == 'image') {
                                $.magnificPopup.close();

                                $(".owl-carousel").trigger('remove.owl.carousel', $(button).attr('index'))
                                    .trigger('refresh.owl.carousel');
                            } else {
                                ReloadFiles(id);
                            }
                        });
                    }
                })
            }

            function UploadProgressFile() {
                var html;

                if (filetype == 'image') {
                    html = $('.preview-area .image-preview').html();

                    $('.owl-carousel').trigger('to.owl.carousel', [0, 500])
                    $(".owl-carousel").trigger('add.owl.carousel', [html, 0])
                        .trigger('refresh.owl.carousel');
                } else {
                    $('.progress .progress-bar').css('width', '99%');

                    html = $('.preview-area .file-preview').html();

                    $(".files-area").append(html);
                }
            }

            function UploadFileCompleted(data) {
                if (filetype == 'image') {
                    let content = $('.owl-carousel .item-preview');

                    content.removeClass('item-preview');
                    content.find('a').attr('href', {!! json_encode(url('/')) !!} + data.file_path);
                    content.find('a').attr('title', data.file_name + '.' + data.type);
                    content.find('a').attr('id', data.id);
                    content.find('img').attr('src', {!! json_encode(url('/')) !!} + data.file_path);
                    content.find('.image-preload').remove();
                    content.find('img').removeClass('d-none').addClass('d-block');
                } else {
                    $('.progress .progress-bar').removeClass('bg-info').css('width', '100%').addClass(
                        'bg-success');

                    let content = $('.files-area .file-area-preview');

                    content.removeClass('file-area-preview').addClass('file-area');
                    content.data('entry-id', data.id);
                    content.find('.file-name').html(data.file_name + '.' + data.type);
                    content.find('.created-at').html(data.carbon_created_at);
                    content.find('.delete-file-content').removeClass('d-none').addClass('d-flex no-block');

                    content.find('.progress').remove();
                }
            }

            function ReloadFiles(id) {
                $('.files-area .file-area').each(function(i, el) {
                    if ($(el).data('entry-id') == id) {
                        $(el).remove();
                    }
                })
            }
        </script>
    </x-slot>

</x-app-layout>
