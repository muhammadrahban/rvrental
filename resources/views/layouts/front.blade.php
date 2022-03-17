<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - RV WALA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />


    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/fontawesome/css/font-awesome.min.css') }}">
    @yield('page-style')
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <style>
        .desktop-header{
            position: fixed;
            width: 100%;
            padding:10px 0;
            left: 0;
            top: 0;
            z-index: 1000;
            transform: none;
            margin: 0;
            padding: 0;
        }
        .desktop-header .list-unstyled li+li{
            margin-left:30px
        }
        .menu li.active a {
            color: #ffba5a;
            text-decoration-line: none;
        }
        .menu li a:hover {
            color: #ff9a0e;
        }
        .menu li a {
            color: white;
        }
        .dropdown-menu.dropdown-menu-end > a:hover {
            color: #ff9a0e !important;
        }
    </style>
  </head>
  <body>
    <header class="desktop-header d-none d-md-block">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-3">
              <a href="{{url('/')}}"> <img src="{{url('').'/assets/img/RV-logo1.png'}}" alt="RV WALA" height="70" srcset=""> </a>
            </div>
          <div class="col-md-9 ml-auto mr-0 ">

            <div class="">
              <nav role="navigation">
                <div class="container">
                    <ul class="list-unstyled menu d-flex justify-content-end m-0">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                        @auth
                            <li class="{{ (request()->is('list-rvs')) ? 'active' : '' }}"><a href="{{route('web-myrvs')}}">List My RV</a></li>
                        @endauth
                        <li class="{{ (request()->is('about-us')) ? 'active' : '' }}"><a href="{{route('about-us')}}">About Us</a></li>
                        <li class="{{ (request()->is('list-destinations') || request()->is('list-rv')) ? 'active' : '' }}"><a href="{{route('list-destinations')}}">Destinations</a></li>
                        <li class="nav-item dropdown ms-auto {{ request()->is('affiliate_market') || request()->is('join_term') || request()->is('blogs') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('affiliate_market') }}" class="dropdown-item text-black {{ (request()->is('affiliate_market')) ? 'active' : ''}}">Affiliate Marketing</a>
                                <a href="{{ route('blogs') }}" class="dropdown-item text-black {{ (request()->is('blogs')) ? 'active' : ''}}">Blog</a>
                                <a href="{{ route('join_term') }}" class="dropdown-item text-black {{ (request()->is('join_term')) ? 'active' : ''}}">Join a Team</a>
                            </div>
                        </li>
                        @auth
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="{{ (request()->is('web/login')) ? 'active' : ''}}" style="background-color: #f3a232; padding: 3px 12px; border-radius: 5px;"><a href="{{route('web-login')}}">Login</a></li>
                            <li class="{{ (request()->is('web/register')) ? 'active' : ''}}" style="background-color: #f3a232; padding: 3px 12px; border-radius: 5px;"><a href="{{route('web-register')}}">Sign Up</a></li>
                        @endauth
                    </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <header class="site-header js-site-header d-block d-md-none">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-3 col-lg-4 site-logo" data-aos="fade">
              <a href="{{url('/')}}"> <img src="{{url('').'/assets/img/RV-logo1.png'}}" alt="RV WALA" height="70" srcset=""> </a>
            </div>
          <div class="col-9 col-lg-8">

            <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                        <ul class="list-unstyled menu d-flex flex-column justify-content-end m-0">
                            <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                            @auth
                                <li class="{{ (request()->is('list-rvs')) ? 'active' : '' }}"><a href="{{route('web-myrvs')}}">List My RV</a></li>
                            @endauth
                            <li class="{{ (request()->is('search')) ? 'active' : '' }}"><a href="#">Search</a></li>
                            <li class="{{ (request()->is('list-destinations') || request()->is('list-rv')) ? 'active' : '' }}"><a href="{{route('list-destinations')}}">Destinations</a></li>
                            <li class="nav-item dropdown ms-auto">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('affiliate_market') }}" class="dropdown-item text-black">Affiliate Marketing</a>
                                    <a href="{{ route('blogs') }}" class="dropdown-item text-black">Blog</a>
                                    <a href="{{ route('join_term') }}" class="dropdown-item text-black">Join a Team</a>
                                </div>
                            </li>
                            @auth
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li><a href="{{route('web-login')}}">Login</a></li>
                                <li><a href="{{route('web-register')}}">Sign Up</a></li>
                            @endauth
                        </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <!--Main Content Wrap Start-->
    @section('content')

    @show

    <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-4 mb-5">
              <ul class="list-unstyled link">
                {{-- <li><a href="{{route('about-us')}}">About Us</a></li> --}}
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-5">
              <ul class="list-unstyled link">
                <li><a href="{{route('web-myrvs')}}">Listing RV's</a></li>
                <li><a href="{{route('about-us')}}">About Us</a></li>
                <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                <li><a href="{{route('list-destinations')}}">Destinations</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-5 pr-md-5 contact-info">
              <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
              <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-white"></span>Address:</span> <span> Saskatoon,
                Saskatchewan, Canada</span></p>
              <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-white"></span>Phone:</span> <a href="tel:+13062410969" data-rel="external"><span> (+1) 306-241-0969</span></a></p>
              <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-white"></span>Email:</span> <a href="mailto:contact@rvwala.com"><span> contact@rvwala.com</span></a></p>
            </div>
            {{-- <div class="col-md-3 mb-5">
              <p>Sign up for our newsletter</p>
              <form action="#" class="footer-newsletter">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email...">
                  <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                </div>
              </form>
            </div> --}}
          </div>
          <div class="row">
            <p class="col-md-4 text-left social">
                <a href="#"><span style="font-size: 22px;padding-right: 10px;" class="fa fa-facebook"></span></a>
                <a href="#"><span style="font-size: 22px;padding-right: 10px;" class="fa fa-instagram"></span></a>
                <a href="#"><span style="font-size: 22px;padding-right: 10px;" class="fa fa-google"></span></a>
            </p>
            <p class="col-md-6 text-left">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
          </div>
        </div>
      </footer>

      <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}"></script>
      <script src="{{ asset('front/js/popper.min.js') }}"></script>
      <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
      <script src="{{ asset('front/js/jquery.fancybox.min.js') }}"></script>


      <script src="{{ asset('front/js/aos.js') }}"></script>

      <script src="{{ asset('front/js/bootstrap-datepicker.js') }}"></script>
      <script src="{{ asset('front/js/jquery.timepicker.min.js') }}"></script>



      <script src="{{ asset('front/js/main.js') }}"></script>
      <script >
        $( document ).ready(function(){
            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
                $('.desktop-header').css('background-color','#CB5644');
            }else{
                $('.scroll-top-wrapper').removeClass('show');
                $('.desktop-header').css('background-color','transparent');
            }
        })
        $(function(){
            $(document).on( 'scroll', function(){
                if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
                $('.desktop-header').css('background-color','#CB5644');
                } else {
                $('.scroll-top-wrapper').removeClass('show');
                $('.desktop-header').css('background-color','transparent');
                }
            });
            $('.scroll-top-wrapper').on('click', scrollToTop);
        });
        function scrollToTop() {
            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            element = $('body');
            offset = element.offset();
            offsetTop = offset.top;
            $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
        }
      </script>
    </body>
  </html>

