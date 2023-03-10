<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/default-user.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- page css -->
    <link href="{{ asset('css/pages/inbox.css') }}" rel="stylesheet">

    <link href="{{ asset('css/pages/contact-app-page.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    @if ($select2 ?? false)
        <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    @endif
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/page.css') }}">

    <!-- Custom CSS for Stepper Form -->
    <link href="{{ asset('css/pages/steps/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css') }}" rel="stylesheet" />
    <!-- Carousel css -->
    <link href="{{ asset('css/pages/carousel.css') }}" rel="stylesheet" type="text/css" />


    @if ($high_chart ?? false)
        <style>
            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 320px;
                max-width: 660px;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

            .highcharts-credits {
                display: none;
            }
        </style>
    @endif
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Poldea</p>
        </div>
    </div>

    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.navigation')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @if (auth()->user()->hasRole('Admin'))
            @include('layouts.sidebars.admin')
        @elseif (auth()->user()->hasRole('QA-Manager'))
            @include('layouts.sidebars.qa-manager')
        @elseif (auth()->user()->hasRole('QA-Coordinator'))
            @include('layouts.sidebars.qa-coordinator')
        @elseif (auth()->user()->hasRole('Staff'))
            @include('layouts.sidebars.staff')
        @else
            Side Bar Error ( Role Undefined )
        @endif
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- User Dashboard Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        {{-- @include('layouts.idea.sidebar') --}}
        <!-- ============================================================== -->
        <!-- End User Dashboard Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- Page Content -->
        <div class="page-wrapper">
            {{ $slot }}
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.validate.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <!--Stepper Form JS -->
    <script src="{{ asset('assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>


    <script>
        $(document).ready(function() {

            $('.textarea_editor').wysihtml5();


        });
    </script>

    <!--Stepper Form JS -->
    <script src="{{ asset('assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script>
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onFinished: function(event, currentIndex) {
                Swal.fire("Form Submitted!",
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                );

            }
        });

        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onStepChanging: function(event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (
                    currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error")
                        .remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                    form
                    .validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function(event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function(event, currentIndex) {
                Swal.fire("Form Submitted!",
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                );
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('assets/plugins/html5-editor/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('assets/plugins/html5-editor/bootstrap-wysihtml5.js') }}"></script>




    <script>
        // console.log($(document).find('.right-side-toggle'));
    </script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!--High Charts -->
    @if ($high_chart ?? false)
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    @endif

    @if ($select2 ?? false)
        <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
        <script>
            $(".select2").select2();
        </script>
    @endif

    {{ $script ?? false }}

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
