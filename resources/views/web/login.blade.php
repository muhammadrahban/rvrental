@extends('layouts.front')
@section('title', 'Login')

@section('page-style')

<style>
    .fa.fa-github.fa-fw {
        font-size: 48px;
    }

    .fa.fa-google-plus.fa-fw {
        font-size: 48px;
        }

    .fa.fa-facebook.fa-fw {
        font-size: 48px;
    }

    .circle {
        padding: 10px;
        width: 54px;
    }

    .social {
        padding: 10px;
    }
    .site-header{
        padding:10px 0px !important;
        background: #CB5644 !important;
    }
    header.desktop-header.d-none.d-md-block{
        background-color: rgb(203, 86, 68) !important;

    }
    .menu li.active a{
        color: #ffdfb5 !important;
        text-decoration-line: none;

    }

</style>


@endsection
@section('content')

<section class="section contact-section" id="next">
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h3>Log in with your email</h3>
                <form action="{{route('login')}}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control ">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Passowrd</label>
                            <input type="password" id="password" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Login"
                                class="btn btn-primary text-white font-weight-bold">

                        </div>
                    </div>
                    Don't have an account yet?
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <a href="{{route('web-register')}}">
                                <button type="button" class="btn btn-primary text-white font-weight-bold">
                                    Register Now
                                </button>
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
