@extends('layouts.front')
@section('title', 'Contact Us')
@section('content')


<section class="site-hero inner-page overlay" style="background-image: url({{url('')}}/front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">Contact</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="index.html">Home</a></li>
            <li>&bullet;</li>
            <li>Contact</li>
          </ul>
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

  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <p style="text-align: center;margin-bottom:60px;">
            " Family travel gets exciting if you work out at your speed and time. Rent our RVs to decide where to go and which path you want. You can embark on your unforgettable journey with us. Explore around the way you want, at your own pace.
            Get in touch with us, whichever way you want" .
        </p>

        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control ">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="btn btn-primary text-white font-weight-bold">
              </div>
            </div>
          </form>

        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span class="d-block">Address:</span> <span> Saskatoon, Saskatchewan, Canada</span></p>
              <p><span class="d-block">Dial us:</span> <a href="tel:+13062410969" data-rel="external"><span> (+1) 306-241-0969</span></a></p>
              {{-- <p><span class="d-block">Email us:</span> <a href="mailto:contact@rvwala.com"><span> contact@rvwala.com</span></a></p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
