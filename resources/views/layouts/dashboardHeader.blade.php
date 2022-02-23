<div class="sticky">
    <div class="d-lg-flex">
        <div class="relative indigo lighten-2 brand-wrapper">
            <div class="d-flex">
                <div class="text-xs-center">
                    <div class="w-80px mt-3 mb-3 ml-3">
                        <img src="{{asset('assets/img/basic/logo-white.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-fill">
            <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow ">
                <div>
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <!--Top Menu Start -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages-->
                        <li class="dropdown custom-dropdown messages-menu">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <i class="icon-message"></i>
                                <span class="badge badge-success badge-mini rounded-circle">4</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu pl-2 pr-2">
                                        <!-- start message -->
                                        <li>
                                            <a href="#">
                                                <div class="avatar float-left">
                                                    <img src="{{asset('assets/img/dummy/u4.png')}}" alt="">
                                                    <span class="avatar-badge busy"></span>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <!-- start message -->
                                        <li>
                                            <a href="#">
                                                <div class="avatar float-left">
                                                    <img src="{{asset('assets/img/dummy/u1.png')}}" alt="">
                                                    <span class="avatar-badge online"></span>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <!-- start message -->
                                        <li>
                                            <a href="#">
                                                <div class="avatar float-left">
                                                    <img src="{{asset('assets/img/dummy/u2.png')}}" alt="">
                                                    <span class="avatar-badge idle"></span>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <!-- start message -->
                                        <li>
                                            <a href="#">
                                                <div class="avatar float-left">
                                                    <img src="{{asset('assets/img/dummy/u3.png')}}" alt="">
                                                    <span class="avatar-badge busy"></span>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown custom-dropdown notifications-menu">
                            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-notifications "></i>
                                <span class="badge badge-danger badge-mini rounded-circle">4</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer p-2 text-center"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                            aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                                <i class=" icon-search3 "></i>
                            </a>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown custom-dropdown user user-menu ">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                @if (Auth::user()->profile != Null)
                                    <img src="{{ asset('image/'.Auth::user()->profile) }}" class="user-image" alt="User Image">
                                @else
                                    <span class="avatar-letter avatar-letter-{{substr(Auth::user()->name, 0, 1)}} circle"></span>
                                @endif
                            </a>
                            <div class="dropdown-menu p-4 dropdown-menu-right">
                                <div class="row box justify-content-between my-4">
                                    <div class="col"><a href="#">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a></div>
                                    <div class="col">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                            <div class="pt-1">logout</div>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
