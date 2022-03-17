@extends('layouts.front')
@section('title', 'Search')
@section('content')
<section class="site-hero overlay" style="background-image: url({{ asset('front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg') }})"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <h1 class="heading">Search...</h1>
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


<section class="section bg-light pb-0">
    <div class="container">
        <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-4">
                            <label for="destination" class="font-weight-bold text-black">Destination</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" name="destination" id="destination" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 mb-lg-0 col-lg-3">
                            <label for="checkin_date" class="font-weight-bold text-black">Start Date</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" name="start" id="checkin_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-2 mb-lg-0 col-lg-3">
                            <label for="checkout_date" class="font-weight-bold text-black">End Date</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" name="end" id="checkout_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 align-self-end">
                            <button class="btn btn-primary text-white">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            @foreach ($rvs as $rv)
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="{{url('uploads', $rv->image)}}" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>{{$rv->name}}</h2>
                            <span class="text-uppercase letter-spacing-1">{{$rv->price}}$ / per night</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <section class="section bg-light">

    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade">Great Offers</h2>
                <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                    the Semantics, a large language ocean.</p>
            </div>
        </div>

        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
            <a href="#" class="image d-block bg-image-2" style="background-image: url('{{url('')}}/front/images/img_1.jpg');"></a>
            <div class="text">
                <span class="d-block mb-4"><span class="display-4 text-primary">$199</span> <span
                        class="text-uppercase letter-spacing-2">/ per night</span> </span>
                <h2 class="mb-4">Family Room</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>
                <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
            </div>
        </div>
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
            <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('{{url('')}}/front/images/img_2.jpg');"></a>
            <div class="text order-1">
                <span class="d-block mb-4"><span class="display-4 text-primary">$299</span> <span
                        class="text-uppercase letter-spacing-2">/ per night</span> </span>
                <h2 class="mb-4">Presidential Room</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>
                <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
            </div>
        </div>

    </div>
</section>

<section class="section bg-image overlay" style="background-image: url('{{url('')}}/front/images/hero_4.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
        </div>
    </div>
</section> --}}
@endsection
