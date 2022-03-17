@extends('layouts.front')
@section('title', 'About Us')
@section('content')

<section class="site-hero inner-page overlay" style="background-image: url({{url('')}}/uploads/{{$blog->img}})" data-stellar-background-ratio="0.5">
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
        {{-- <img class="text-center" src="{{ asset('uploads/'.$blog->img) }}" alt="{{$blog->img}}" height="200">
        <hr>
        <h2>{{$blog->title}}</h2>
        <hr>
        <p>{!!$blog->desc!!}</p> --}}

        <article>
            <img src="{{ asset('uploads/'.$blog->img) }}" alt="{{$blog->img}}" class="img-fluid mb30">
            <div class="post-content">
                <h3>{{$blog->title}}</h3>
                <ul class="post-meta list-inline">
                    <li class="list-inline-item">
                        <i class="fa fa-calendar-o"></i> <a href="#">{{ $blog->created_at->diffForHumans() }}</a>
                    </li>
                </ul>
                <p>{!!$blog->desc!!}</p>
                {{-- <ul class="list-inline share-buttons">
                    <li class="list-inline-item">Share Post:</li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul> --}}
                {{-- <hr class="mb40">
                <h4 class="mb40 text-uppercase font500">About Author</h4>
                <div class="media mb40">
                    <i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary"></i>
                    <div class="media-body">
                        <h5 class="mt-0 font700">Jane Doe</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <hr class="mb40">
                <h4 class="mb40 text-uppercase font500">Comments</h4>
                <div class="media mb40">
                    <i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i>
                    <div class="media-body">
                        <h5 class="mt-0 font400 clearfix">
                                    <a href="#" class="float-right">Reply</a>
                                    Jane Doe</h5> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <div class="media mb40">
                    <i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i>
                    <div class="media-body">
                        <h5 class="mt-0 font400 clearfix">
                                    <a href="#" class="float-right">Reply</a>
                                    Jane Doe</h5> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <div class="media mb40">
                    <i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i>
                    <div class="media-body">
                        <h5 class="mt-0 font400 clearfix">
                                    <a href="#" class="float-right">Reply</a>
                                    Jane Doe</h5> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <hr class="mb40">
                <h4 class="mb40 text-uppercase font500">Post a comment</h4>
                <form role="form">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="john@doe.com">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" rows="5" placeholder="Comment"></textarea>
                    </div>
                    <div class="clearfix float-right">
                        <button type="button" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form> --}}
            </div>
        </article>
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
