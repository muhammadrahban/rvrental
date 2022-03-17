@extends('layouts.front')
@section('title', 'Home')
@section('content')


<section class="site-hero overlay" style="background-image: url({{ asset('front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg') }})"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span class="custom-caption text-uppercase text-white d-block  mb-3">Thousands of camper vans, RVs, travel trailers, and more.<span
                        class="fa fa-star text-primary"></span></span>
                <h1 class="heading">Book your RV rental and go </h1>
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

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                {{-- <figure class="img-absolute">
                    <img src="{{ asset('front/images/silvio-bergamo-DsiXCAerbjM-unsplash.jpg') }}" alt="Image" class="img-fluid">
                </figure> --}}
                <img src="{{url('').'/front/images/ingo-doerrie-Fkwj-xk6yck-unsplash.jpg'}}" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h2 class="heading">Introduction!</h2>
                <p class="mb-4">RV Wala is a brand located in Canada to provide you with a whole new experience. We
                    offer well-maintained rental services at a pretty affordable price to our customers. RV Wala has its
                    focus fixed on providing the best holidays and vacations.
                    Inviting you all to hire our services makes us feel happy. Also, we strive to make your experience
                    stress-free with our assistance with a sincere commitment towards our customers..</p>
                <p><a href="{{route('about-us')}}" class="btn btn-primary text-white py-2 mr-3">Learn More</a> </p>
            </div>

        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-10">
                <h3 class="heading" data-aos="fade-up"> Top RV Rental Locations</h3>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($destinations as $destination)
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <a href="{{route('list-rv', $destination->id)}}" class="room">
                    <figure class="img-wrap">
                        <img src="{{ asset('uploads/'. $destination->image) }}" alt="Free website template"
                            class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                        <h2>{{$destination->name}}</h2>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- End Section --}}
<section class="section bg-image overlay" style="background-image: url('{{ asset('front/images/blake-wisz-TcgASSD5G04-unsplash.jpg')}} ');">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading text-white" data-aos="fade">
                    How does it work</h2>
                {{-- <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> --}}
            </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains"
                        role="tab" aria-controls="mains" aria-selected="true">Rent an RV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab"
                        aria-controls="desserts" aria-selected="false">RV Listing</a>
                </li>
            </ul>
            <div class="tab-content py-5" id="myTabContent">


                <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">SEARCH FOR AN RV</span>
                                <p class="text-white text-opacity-7">Enter your camping destination. Choose an RV from
                                    the list of RVs available at your location</p>
                            </div>
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">PROCESS FOR BOOKING</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">Fish Moilee</a></h3> --}}
                                <p class="text-white text-opacity-7">Once you choose an RV, you can select dates for
                                    your booking and proceed</p>
                            </div>
                            <div class="food-menu mb-5">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">HIT THE ROAD</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3> --}}
                                <p class="text-white text-opacity-7">It's time to start your adventure with our 24/7
                                    road assistance to ensure your smooth ride.</p>
                            </div>
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">RV RETURN</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3> --}}
                                <p class="text-white text-opacity-7">After your vacation, return RV, and don't forget to
                                    rate them on our platform. Reviews can help others to plan a jovial vacation.</p>
                            </div>
                            {{-- <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$22.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div> --}}
                        </div>
                    </div>


                </div> <!-- .tab-pane -->

                <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">LISTING WITH CONFIDENCE</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3> --}}
                                <p class="text-white text-opacity-7">You may think listing an RV comes with a cost to
                                    pay. With our platform, you can list your RV for free just by submitting a few
                                    details about your vehicle.</p>
                            </div>
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">RENTAL REQUESTS</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3> --}}
                                <p class="text-white text-opacity-7">Receive rental requests from people visiting our
                                    platform and start rental on your RV with laid preferences.</p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">MANAGE PICK-UP/DROP-OFF</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3> --}}
                                <p class="text-white text-opacity-7">Meet customers renting your RV and share with us
                                    pictures through your listing profile</p>
                            </div>
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">START EARNING</span>
                                {{-- <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3> --}}
                                <p class="text-white text-opacity-7">Start your journey of earning passive income. Also,
                                    we are here to help you in case you need our guidance</p>
                            </div>
                            {{-- <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$7.35</span>
                  <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$22.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div> --}}
                        </div>
                    </div>
                </div> <!-- .tab-pane -->
            </div>
        </div>
    </div>
</section>

<!-- END section -->

{{-- <section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Photos</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-1.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-1.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-2.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-2.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-3.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-3.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-4.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-4.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-5.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-5.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-6.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-6.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{ ('front/images/slider-7.jpg') }}" data-fancybox="images"
                            data-caption="Caption for this image"><img src="{{ ('front/images/slider-7.jpg') }}"
                                alt="Image placeholder" class="img-fluid"></a>
                    </div>
                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section> --}}
<!-- END section -->


<section class="section testimonial-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">People Says</h2>
            </div>
        </div>
        <div class="row">
            <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{ asset('front/images/person_1.jpg') }}" alt="Image placeholder"
                            class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; Jean Smith</em></p>
                </div>

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{ asset('front/images/person_2.jpg') }}" alt="Image placeholder"
                            class="rounded-circle mx-auto">
                    </div>
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; John Doe</em></p>
                </div>

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{ asset('front/images/person_3.jpg') }}" alt="Image placeholder"
                            class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on
                            the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                            of her own road, the Line Lane.&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; John Doe</em></p>
                </div>


                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{ asset('front/images/person_1.jpg') }}" alt="Image placeholder"
                            class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; Jean Smith</em></p>
                </div>

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{ asset('front/images/person_2.jpg') }}" alt="Image placeholder"
                            class="rounded-circle mx-auto">
                    </div>
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; John Doe</em></p>
                </div>

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{ asset('front/images/person_3.jpg') }}" alt="Image placeholder"
                            class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on
                            the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                            of her own road, the Line Lane.&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; John Doe</em></p>
                </div>

            </div>
            <!-- END slider -->
        </div>

    </div>
</section>


{{-- <section class="section blog-post-entry bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Events</h2>
                <p data-aos="fade-up">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                    the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="{{ asset('front/images/img_1.jpg') }}"
                            alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post">February 26, 2018</span>
                        <h2 class="mt-0 mb-3"><a href="#">Travel Hacks to Make Your Flight More Comfortable</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="{{ asset('front/images/img_2.jpg') }}"
                            alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post">February 26, 2018</span>
                        <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The
                                World</a></h2>
                        <p>Separated they live in Bookmarksgrove r


                            ight at the coast of the Semantics, a large language
                            ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="{{ asset('front/images/img_3.jpg') }}"
                            alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post">February 26, 2018</span>
                        <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            t is a paradisematic country, in which roasted parts of sentences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="section bg-image overlay" style="background-image: url('{{ asset('front/images/kevin-schmid--grs8iMGqQE-unsplash.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                <a href="" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
        </div>
    </div>
</section>


@endsection
