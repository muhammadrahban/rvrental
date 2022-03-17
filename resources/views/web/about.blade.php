@extends('layouts.front')
@section('title', 'About Us')
@section('content')

<section class="site-hero inner-page overlay" style="background-image: url({{url('')}}/front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">About Us</h1>
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


<section class="py-5 bg-light" id="next">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
          <figure class="img-absolute">
            <img src="{{url('')}}/front/images/food-1.jpg" alt="Free Website Template by Templateux" class="img-fluid">
          </figure>
          <img src="{{url('')}}/front/images/img_1.jpg" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
          <h2 class="heading">Introduction!</h2>
          <p class="mb-4">RV Wala is a brand located in Canada to provide you with a whole new experience. We offer well-maintained rental services at a pretty affordable price to our customers. RV Wala has its focus fixed on providing the best holidays and vacations.
            Inviting you all to hire our services makes us feel happy. Also, we strive to make your experience stress-free with our assistance with a sincere commitment towards our customers.</p>

        </div>

      </div>
    </div>
  </section>

  <div class="container section">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7 mb-5">
        <h2 class="heading" data-aos="fade-up">Who are we?</h2>
        <p>Are you experiencing stress due to workload? Well, we all have experienced such times in our lives when we need something refreshing. Vacations can become the best time when planned right. We hope you are doing most of your fun with your friends and family. Making your vacation a success with our RVs is our priority. Our goal is to satisfy our customers with our services.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="block-2">
          <div class="flipper">
            <div class="front" style="background-image: url({{url('')}}/front/images/person_3.jpg);">
              <div class="box">
                <h2>Will Peters</h2>
                <p>President</p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="{{url('')}}/front/images/person_3.jpg" alt="">
                </div>
                <div class="name align-self-center">Will Peters <span class="position">President</span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="block-2"> <!-- .hover -->
          <div class="flipper">
            <div class="front" style="background-image: url({{url('')}}/front/images/person_1.jpg);">
              <div class="box">
                <h2>Jane Williams</h2>
                <p>Business Manager</p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="{{url('')}}/front/images/person_1.jpg" alt="">
                </div>
                <div class="name align-self-center">Jane Williams <span class="position">Business Manager</span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="block-2">
          <div class="flipper">
            <div class="front" style="background-image: url({{url('')}}/front/images/person_2.jpg);">
              <div class="box">
                <h2>Jeffrey Neddery</h2>
                <p>Marketing Director</p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="{{url('')}}/front/images/person_2.jpg" alt="">
                </div>
                <div class="name align-self-center">Jeffrey Neddery <span class="position">Marketing Director</span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>
    </div>
  </div>
  <!-- END .block-2 -->

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
