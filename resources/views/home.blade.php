@extends('layouts.dashboard')

@section('content')

<div class="has-sidebar-left">
    {{-- <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort my-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="card r-0 b-0 shadow">
                        <div class="card-body">
                            <span class="s-36 my-3" >28<small class="font-weight-light">℃</small></span>
                            <div>
                                <div>
                                    <strong>United Kingdom</strong>
                                </div>
                                <small>5000+ Visitor in a month</small>
                            </div>
                        </div>
                        <div class="p-0 b-0">
                            <div class="lightSlider" data-item="5" data-item-xl="4" data-item-md="2" data-item-sm="1" data-pause="7000" data-pager="false" data-controls="false" data-slide-margin="0" data-auto="true"
                                data-loop="true">
                                <div class="p-5 indigo darken-1 text-white text-center">
                                    <h5 class="font-weight-normal s-14">Monday</h5>
                                    <i class="s-48 icon-cloud-rain"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                                <div class="p-5 indigo darken-2 lighten-1 text-white text-center">
                                    <h5 class="font-weight-normal s-14">Tuesday</h5>
                                    <i class="s-48 icon-cloud-sun-rain"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                                <div class="p-5 indigo text-white text-center">
                                    <h5 class="font-weight-normal s-14">Wednesday</h5>
                                    <i class="s-48 icon-cloud-rain"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                                <div class="p-5 indigo lighten-1 text-white text-center">
                                    <h5 class="font-weight-normal s-14">Thursday</h5>
                                    <i class="s-48 icon-sun"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                                <div class="p-5 indigo lighten-2 text-white text-center">
                                    <h5 class="font-weight-normal s-14">Friday</h5>
                                    <i class="s-48 icon-cloud-fog"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                                <div class="p-5  indigo lighten-3 text-white text-center">
                                    <h5 class="font-weight-normal s-14">Saturday</h5>
                                    <i class="s-48 icon-cloud-lightning"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                                <div class="p-5 indigo lighten-4 text-white text-center">
                                    <h5 class="font-weight-normal s-14">Sunday</h5>
                                    <i class="s-48 icon-moon-stars"></i>
                                    <div class="mt-2">
                                        <span >28 ℃</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header white">
                            <h4 class="mt-2">Temperature Report</h4>
                            <div class="row justify-content-end">
                                <div class="col">
                                    <ul id="myTab4" role="tablist" class="nav nav-tabs card-header-tabs nav-material float-right">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="tab1" data-toggle="tab" href="#v-pills-tab1" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">This Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab2" data-toggle="tab" href="#v-pills-tab2" role="tab" aria-controls="tab2" aria-selected="false">Last Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab3" data-toggle="tab" href="#v-pills-tab3" role="tab" aria-controls="tab3" aria-selected="false">This Month</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="w8-tab1" role="tabpanel" aria-labelledby="w8-tab1">
                                    <div class="my-2" style="height: 400px">
                                        <canvas
                                                data-chart="bar"
                                                data-dataset="[
                                        [21, 90, 55, 0, 59, 77, 12,21, 90, 55, 0, 59, 77, 12,21, 90, 55, 0, 59, 77, 12],
                                        [12, 40, 16, 17, 89, 0, 12,12, 0, 55, 60, 79, 99, 12,12, 0, 55, 60, 79, 99, 12],
                                        [12, 40, 16, 17, 89, 0,12, 40, 16, 17, 89, 0, 12,12, 40, 16, 17, 89, 0, 12],
                                        ]"
                                                data-labels="['Blue','Yellow','Green','Purple','Orange','Red','Indigo','Blue','Yellow','Green','Purple','Orange','Red','Indigo','Blue','Yellow','Green','Purple','Orange','Red','Indigo']"
                                                data-dataset-options="[
                                    {
                                        label: 'HTML',
                                        backgroundColor: '#7986cb',
                                        borderWidth: 0,

                                    },
                                    {
                                        label: 'Wordpress',
                                        backgroundColor: '#88e2ff',
                                        borderWidth: 0,

                                    },
                                    {
                                        label: 'Laravel',
                                        backgroundColor: '#e2e8f0',
                                        borderWidth: 0,

                                    }
                                    ]"
                                                data-options="{
                                    legend: { display: true,},
                                    scales: {
                                        xAxes: [{
                                            stacked: true,
                                            barThickness:5,
                                            gridLines: {
                                                zeroLineColor: 'rgba(255,255,255,0.1)',
                                                color: 'rgba(255,255,255,0.1)',
                                                display: false,},
                                            }],
                                        yAxes: [{
                                                stacked: true,
                                                    gridLines: {
                                                        zeroLineColor: 'rgba(255,255,255,0.1)',
                                                        color: 'rgba(255,255,255,0.1)',
                                                    }
                                    }]

                                    }
                                }"
                                        >
                                        </canvas>
                                    </div>
                                </div>
                                <div class="tab-pane fade text-center p-5" id="w8-tab2" role="tabpanel" aria-labelledby="w8-tab2">
                                    <h4 class="card-title">Tab 2</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="tab-pane fade text-center p-5" id="w8-tab3" role="tabpanel" aria-labelledby="w8-tab3">
                                    <h4 class="card-title">Tab 3</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card shadow b-0 r-0">
                        <div class="card-body p-5">
                            <h4>Welcome,</h4>
                            <p>
                                Get Started using Paper Panel made using bootstrap4 and gulp.
                            </p>
                            <a href="#" class="btn btn-primary shadow btn-sm">Get Started</a>
                        </div>
                    </div>
                    <div class="card-deck">
                        <!-- Social Widget Start -->
                        <div class="card my-3 shadow b-0 r-0">
                            <div class="card-header white">
                                <strong> SOCIAL MEDIA </strong>
                            </div>
                            <div class="card-body">
                                <ul class="social">
                                    <li>
                                        <a href="#" class="youtube mr-3">
                                            <i class="icon-youtube"></i>
                                        </a>Youtube
                                        <span class="float-right mt-2 font-weight-bold">20%</span>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter mr-3">
                                            <i class="icon-twitter"></i>
                                        </a>Twitter
                                        <span class="float-right mt-2 font-weight-bold">50%</span>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram mr-3">
                                            <i class="icon-instagram"></i>
                                        </a>Instagram
                                        <span class="float-right mt-2 font-weight-bold">5%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Social Widget End -->
                        <!-- Product Widget Start -->
                        <div class="card my-3 shadow b-0 r-0">
                            <div class="lightSlider"  data-item="1" data-pause="3000" data-pager="false" data-controls="false" data-slide-margin="0" data-auto="true"
                                data-loop="true">
                            <div class="card-body indigo lighten-2 text-white">
                                <!-- Big Heading -->
                                <div class="text-center">
                                    <h3 class="my-3">$25,000</h3>
                                    <i class="icon-angle-double-up yellow avatar avatar-lg"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>
                                            <i class="icon-circle-o text-red mr-2"></i>Sales
                                        </p>
                                        <p>
                                            <i class="icon-circle-o text-green mr-2"></i>Last Month
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            <i class="icon-angle-double-down text-red mr-2"></i>1,4,348
                                        </p>
                                        <p>
                                            <i class="icon-angle-double-up text-green mr-2"></i>1,11,5
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Big Heading -->
                                <div class="text-center">
                                    <h3 class="my-3">$25,000</h3>
                                    <i class="icon-angle-double-up yellow avatar avatar-lg"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>
                                            <i class="icon-circle-o text-red mr-2"></i>Sales
                                        </p>
                                        <p>
                                            <i class="icon-circle-o text-green mr-2"></i>Last Month
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            <i class="icon-angle-double-down text-red mr-2"></i>1,4,348
                                        </p>
                                        <p>
                                            <i class="icon-angle-double-up text-green mr-2"></i>1,11,5
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Product Widget End -->
                    </div>
                    <div class="card shadow b-0 r-0">
                        <div class="card-body">
                            <div class="jvmap" data-options='{"map":"usa_en","backgroundColor":null,"color":"#7986cb","enableZoom":true,"showTooltip":true,"selectedColor":null,"hoverColor":null,"colors":{"mo":"#03a9f4","fl":"#303f9f","or":"#303f9f"}}'
                                style="height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid relative animatedParent animateOnce p-lg-4">
        <div class="row my-2">
            <div class="col-lg-3">
                <a href="{{route('user.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-users s-48"></span>

                        <h6 class="counter-title mt-2">All Users</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('role.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-add_circle s-48"></span>

                        <h6 class="counter-title mt-2">All Roles</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('permission.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-eye3 s-48"></span>

                        <h6 class="counter-title mt-2">All Permissions</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('user.vendor')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-user-plus s-48"></span>

                        <h6 class="counter-title mt-2">All Vendors</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-lg-3">
                <a href="{{route('user.vendor')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-user-o s-48"></span>

                        <h6 class="counter-title mt-2">All Customers</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('destination.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-location-arrow s-48"></span>

                        <h6 class="counter-title mt-2">All Destinations</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('rvs.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-directions_car s-48"></span>

                        <h6 class="counter-title mt-2">All RVs</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('blog.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-newspaper-o s-48"></span>

                        <h6 class="counter-title mt-2">All Blogs</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-lg-3">
                <a href="{{route('booking.index')}}">
                    <div class="counter-box p-4 white shadow2 r-5 text-center">
                        <div class="float-right">
                        </div>
                        <span class="icon icon-bookmark-add2 s-48"></span>

                        <h6 class="counter-title mt-2">All Booking</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
