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
                <h3>Register with your email</h3>

                <form action="{{ route('register') }}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? null}}">
                            @error('name')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" class="form-control" value="{{old('email') ?? null}}">
                            @error('email')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="2">Vendor</option>
                                <option value="3">Customer</option>
                            </select>

                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            @error('password')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Register" class="btn btn-primary text-white font-weight-bold">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
