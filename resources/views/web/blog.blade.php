@extends('layouts.front')
@section('title', 'Blogs')
@section('content')

<section class="site-hero inner-page overlay" style="background-image: url({{url('')}}/front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">Blog</h1>
          {{-- <ul class="custom-breadcrumbs mb-4 d-none">
            <li><a href="index.html">Home</a></li>
            <li>&bullet;</li>
            <li>About</li>
          </ul> --}}
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>
  <!-- END section -->

  <section class="section blog-post-entry bg-light" id="next">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        @foreach ($blogs as $blog)
            <div class="media media-custom d-block mb-4 h-100">
                <a href="{{ route('blogDetail', $blog->id) }}" class="mb-4 d-block"><img src="{{ asset('uploads/'.$blog->img)}}" alt="Image placeholder" class="img-fluid"></a>
                <div class="media-body">
                    <span class="meta-post">{{ $blog->created_at->diffForHumans() }}</span>
                    <h2 class="mt-0 mb-3"><a href="#">{{ $blog->title }}</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        @endforeach

        </div>
        {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="{{ asset('uploads/41xWaZbICwxxrkoRErZlTw4vaB0ELgzJsY3mLQnL.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The World</a></h2>
              <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="{{ asset('uploads/A8AyvH2ZQpU1WhXhzj7ksx3TtULmwLGZhLZCISBn.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="{{ asset('uploads/gJ2LtTHkMehYoQsBMZsvEkZs7liVT9rQB0WZwOhh.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3"><a href="#">Travel Hacks to Make Your Flight More Comfortable</a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="{{ asset('uploads/EIYehj0ZHhUDXN0ZIMqXoP2KwCNfm2dUrortZL4c.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The World</a></h2>
              <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="{{ asset('uploads/9fEMifb7PPD3ZDhxZI9pcU3FRa9t4mg1C3VfFEv2.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
            </div>
          </div>
        </div> --}}
      </div>

      {{-- <div class="row aos-init aos-animate" data-aos="fade">
        <div class="col-12">
          <div class="custom-pagination">
            <ul class="list-unstyled">
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><span>...</span></li>
              <li><a href="#">30</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
    </div>
  </section>

  <section class="section bg-image overlay" style="background-image: url('{{url('')}}/front/images/hero_4.jpg');">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
          <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
          <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
        </div>
      </div>
    </div>
  </section>
  @endsection
