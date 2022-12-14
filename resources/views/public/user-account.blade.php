@extends('layouts.public')
@section('title')
    Account Management
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 register-header" style="background-image: url('{{ asset('img/register.jpg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-12 text-center pt-5">
                    <h1 class="pt-5">COMPLETE YOUR REGISTRATION</h1>
                </div>
                <div class="col-md-9 ftco-animate ">
                    <p class="breadcrumbs"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 mb-5 register-summit">
        <div class="container">
            <div class="card padding-card">
                <div class="row">
                    <div class="col-md-12 form-right">
                        <form id="register_form" action="{{ route('user.account.update') }}" method="POST">
                            @csrf
                            <h3>Step 2 of 2</h3>
                            <p>
                                <small>
                                    <span class="text-danger">**</span> Before you submit the form, please ensure that all
                                    the information you have entered is
                                    correct. You will not be able to edit your information after you have submitted the
                                    form. After you have submitted the form, you will receive an email with further
                                    instructions.<span class="text-danger">**</span>
                                </small>
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">{{ session('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->count() > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <ul class="list-unstyled">
                                                    <li>{{ $error }}</li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label required">Attendee
                                            Type</label>
                                        <select class="form-control" name="attendee_type" id="attendee_type" required>
                                            <option disabled selected value="">-- Attendee Type -- </option>
                                            <option value="Physical">Physical</option>
                                            <option value="Virtual">Virtual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label required">Title</label>
                                        <select class="form-control" name="title" id="title" required>
                                            <option value="" selected disabled>-- Title -- </option>
                                            <option value="Mr."> Mr. </option>
                                            <option value="Mrs."> Mrs. </option>
                                            <option value="Ms."> Ms. </option>
                                            <option value="Dr."> Dr. </option>
                                            <option value="Prof."> Prof. </option>
                                            <option value="Rev."> Rev. </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label required">Full name</label>
                                        <input type="text" class="form-control" name="name" required
                                            value="{{ old('name', auth()->user()->name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="organization" class="form-label required">Company /
                                            Organization</label>
                                        <input type="text" class="form-control" id="organization" name="organization"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label required">Country</label>
                                        <select class="form-control" name="country_id" id="country_id" required>
                                            <option disabled selected value="">-- Country -- </option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name ?? '' }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label required">Phone
                                            Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">I have read and accepted the
                                            <a href="" class="main-color">Privacy Policy.</a></label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
