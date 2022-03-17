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

    <link rel="stylesheet" media="all" href="{{asset('assets/detail/css/application-8f17b1737ca3785d412ae7c182645c896fbe8180830064503bcea7493d6b7025.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('assets/detail/css/graha-green-ea6302c34f500a5993a07c6bc338c1bac851267883cb89d4c0a6cc6a5142b938.css')}}" />
    {{-- <script src="{{asset('assets/detail/js/jquery.star-rating-svg.min-7301e29b7e588e3f195de44c534917c9e09c50b3ce8eae6505a2cfcc9453b6e6.js')}}"></script> --}}
    <link rel="stylesheet" media="all" href="{{asset('assets/detail/css/jquery.star-rating-svg-0e46fefe1653f4f21d2d119fd5c60b8dd3e55315ea1bcbbd6d78b42e40a087c1.css')}}" />

    <link rel="stylesheet" media="all"
        href="{{asset('assets/detail/css/thumb-ninja-1f7f398b5864c8342bb0325ba5aa17def5db042a8af819d7857ceaae60c24d41.css')}}" />
    <link rel="stylesheet" media="all"
        href="{{asset('assets/detail/css/newninja-slider-e89f4a9f889bfdc69309245cde5fa9b8204c2e8b4e8cd39ffd9dfd29aa4c7219.css')}}" />
    <script src="{{asset('assets/detail/js/thumb-ninja-bc0e1176a6df2bf303cc65e60278579a719ba60d8e14755374bc5650ce7bf1a5.js')}}"></script>
    <script src="{{asset('assets/detail/js/newninja-slider-b5cb71a1ba78d38ae50ae91c5c23339b80290e8f7ae3e8e8a0f6a373691f54ba.js')}}"></script>

    <link rel="stylesheet" media="all"
        href="{{asset('assets/detail/css/hover-effects-060a26a1bf531b2a11a965ff4df56de0a4334f282222a6f67c209d19b7578743.css')}}" />
    <link rel="stylesheet" media="all"
        href="{{asset('assets/detail/css/reservation_form-bba3541600b204c0abd6d2c9c4db302de3d073ba85d44ebdd23d8d99319359c4.css')}}" />


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
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>

    <style>
        @media screen and (max-width: 992px) {
            label {
                font-size: 14px
            }
        }
        @media screen and (max-width: 600px) {
            label {
                font-size: 12px;
            }
            .host-rules {
                width: 20px !important;
                height: 20px !important;
            }
            .vehicle-title h1 {
                line-height: 130%
            }
            .alert a,
            .alert a:visited {
                color: #FFFFFF;
            }
            .text-xs-center {
                text-align: center;
                margin-top: 15px;
            }
            .g-recaptcha {
                display: inline-block;
                margin-top: 15px;
            }
        }
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

{{-- <header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-3 col-lg-4 site-logo" data-aos="fade"><a href="{{url('/')}}"> <img src="{{url('').'/assets/img/RV-logo1.png'}}" alt="RV WALA" height="70" srcset=""> </a></div>
        <div class="col-9 col-lg-8">


          <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
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
                    <ul class="list-unstyled menu">
                      <li class="active"><a href="{{url('/')}}">Home</a></li>
                      @auth
                          <li><a href="{{route('web-myrvs')}}">List My RV</a></li>
                      @endauth
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Destinations</a></li>
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
</header> --}}

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
                        <li style="background-color: #c9ac84;padding: 2px 5px;border-radius: 5px;"><a href="{{route('web-login')}}">Login</a></li>
                        <li style="background-color: #c9ac84;padding: 2px 5px;border-radius: 5px;"><a href="{{route('web-register')}}">Sign Up</a></li>
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
  <!--4 END head -->
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
            {{-- <li><a href="{{route('list-rv')}}">Listing RV's</a></li> --}}
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
        <p class="col-md-6 text-left">
            <p class="col-md-6 text-right social">
                <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-google"></span></a>
            </p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        </p>

      </div>
    </div>
  </footer>



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
        $(function(){
            $(document).on( 'scroll', function(){
                if ($(window).scrollTop() > 100) {
                    $('.scroll-top-wrapper').addClass('show');
                    $('header').addClass('scrolled');
                } else {
                    $('.scroll-top-wrapper').removeClass('show');
                    $('header').removeClass('scrolled');
                }
            });
            $('.scroll-top-wrapper').on('click', scrollToTop);
        });
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
                }else{
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
        $(document).ready(function(){
            $('*[data-aos]').removeAttr('data-aos');
        });
      </script>
</body>
</html>
