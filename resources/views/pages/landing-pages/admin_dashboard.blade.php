<x-app-layout>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <!-- <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div> -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-info">
                            <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                        </div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-info">10</h3>
                            <h5 class="text-muted m-b-0">Deparment</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-success">
                            <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                        </div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-success">50</h3>
                            <h5 class="text-muted m-b-0">Staff</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-inverse">
                            <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                        </div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0">90</h3>
                            <h5 class="text-muted m-b-0">User</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-10 bg-primary">
                            <h3 class="text-white box m-b-0"><i class="ti-wallet"></i></h3>
                        </div>
                        <div class="align-self-center m-l-20">
                            <h3 class="m-b-0 text-primary">100</h3>
                            <h5 class="text-muted m-b-0">Idea</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                        <div class="message-box">
                            <div class="message-widget message-scroll">
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="{{ asset('assets/images/default-user.png') }}" alt="user"
                                            class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and
                                            type setting industry. Lorem
                                            Ipsum has been.</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="{{ asset('assets/images/default-user.png') }}" alt="user"
                                            class="img-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <span class="round">A</span>
                                        <span class="profile-status away pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">Simply dummy text of the printing and typesetting
                                            industry.</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="{{ asset('assets/images/default-user.png') }}" alt="user"
                                            class="img-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="{{ asset('assets/images/default-user.png') }}" alt="user"
                                            class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Welcome to the Elite Admin</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)">
                                    <div class="user-img">
                                        <img src="{{ asset('assets/images/default-user.png') }}" alt="user"
                                            class="img-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <x-slot name="script">
        <script>
            // Data retrieved from https://netmarketshare.com/
            // Build the chart
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'variablepie'
                },
                title: {
                    text: 'Posted Ideas by Department',
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.y}</b> (<b>{point.percentage:.1f}%)</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                series: [{
                    minPointSize: 10,
                    innerSize: '20%',
                    zMin: 0,
                    name: 'Posted Idea',
                    data: [{
                        name: 'Marketing',
                        y: 505992,
                        z: 92
                    }, {
                        name: 'Finance',
                        y: 551695,
                        z: 119
                    }, {
                        name: 'Education',
                        y: 312679,
                        z: 121
                    }, {
                        name: 'Management',
                        y: 78865,
                        z: 136
                    }, {
                        name: 'Engineering',
                        y: 301336,
                        z: 200
                    }, {
                        name: 'Environmental',
                        y: 41284,
                        z: 213
                    }, {
                        name: 'Others',
                        y: 357114,
                        z: 235
                    }]
                }]
            });
        </script>
    </x-slot>
</x-app-layout>
