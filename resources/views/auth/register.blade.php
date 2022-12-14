@extends('layouts.public')
@section('title')
    DELEGATE REGISTRATION FORM
@endsection
@section('description')
    Register for the Africa Direct Selling Forum 2023
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 register-header" style="background-image: url('{{ asset('img/register.jpg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-12 text-center pt-5">
                    <h1 class="pt-5">DELEGATE REGISTRATION FORM</h1>
                </div>
                <div class="col-md-9 ftco-animate ">
                    <p class="breadcrumbs"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 mb-5 register-summit">
        <div class="container">
            <div class="register-instruction card">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-center">Before you register please note the following:</h5>
                    </div>
                    <div class="col-md-12 m-auto">
                        <ul>
                            <li><strong class="text-uppercase">Africa Direct Selling Forum</strong> 2023 is now Hybrid
                            </li>
                            <li>
                                Registration is <span class="main-color text-bold">free</span>
                            </li>
                            <li>
                                The registration process should take no more than <strong>3 minutes </strong>
                            </li>
                            <li>
                                Registration confirmation and all relevant communication related to the event will be
                                forwarded to your registered email address entered below.
                            </li>
                            <li>
                                During the registration process, you will be prompted to create a password. Please make
                                a note
                                of
                                this as it will enable you to return to your registration at a later date to amend any
                                details
                                if
                                necessary and to select conference sessions.
                            </li>
                            <li>
                                All fields marked with an asterisk (<span class="text-danger">*</span>) throughout this
                                registration form are mandatory.
                            </li>
                            <li class="main-color">
                                Before proceeding to step two of the registration process, you have to confirm your email
                                address through the link sent to your email address.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if (session('message'))
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="register-img-wrapper">
                            <div class="bg-light-dark">
                                <div class="register-content">
                                    <h2 class="text-white text-uppercase">Africa Direct Selling Forum</h2>
                                    <h4 class="text-white">Transfrom | Build</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-right">
                        <form id="register_form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <h3>Step 1 of 2</h3>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label required">Full Name</label>
                                <input type="text" name="name"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" autofocus required
                                    placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label required">Email address</label>
                                <input type="email" name="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                    placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label required">Password</label>
                                <input type="password" name="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                    placeholder="{{ trans('global.login_password') }}">
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label required">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required
                                    placeholder="{{ trans('global.login_password_confirmation') }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Continue</button>
                        </form>
                        {{-- <p class="pt-3">
                            Already have an account? <a class="main-color" href="{{ route('login') }}">Login</a>
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
