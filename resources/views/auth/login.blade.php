@extends('layouts.public')
@section('title')
    Login to access account
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 register-header" style="background-image: url('{{ asset('img/register.jpg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-12 text-center pt-5">
                    <h1 class="pt-5">LOGIN TO ACCESS ACCOUNT</h1>
                </div>
                <div class="col-md-9 ftco-animate ">
                    <p class="breadcrumbs"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 mb-5 register-summit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mx-4 mt-5">
                        <div class="card-body p-4">

                            @if (session('message'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label required">Email address</label>
                                    <input id="email" name="email" type="text"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                        autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}"
                                        value="{{ old('email', null) }}">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <label for="exampleInputPassword1" class="form-label required">Password</label>
                                    <input id="password" name="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                        placeholder="{{ trans('global.login_password') }}">
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">
                                            {{ trans('global.login') }}
                                        </button>
                                    </div>
                                    {{-- <div class="col-6 text-right">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                                {{ trans('global.forgot_password') }}
                                            </a><br>
                                        @endif
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
