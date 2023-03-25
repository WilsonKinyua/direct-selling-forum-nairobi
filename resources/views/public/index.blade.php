@extends('layouts.public')

@section('content')
    <section class="hero-wrap" style="background-image:url({{ asset('img/bg-home.jpeg') }});">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate text-center pt-5 mt-5">
                    <h1 class="mb-4 mt-2">
                        AFRICA <br> <span>DIRECT</span> <span>SELLING</span> <br> FORUM
                    </h1>
                    <p class="loc-date">
                        <span><i class="fa fa-map-marker"></i> Nairobi, Kenya</span>
                        <span><i class="fa fa-calendar"></i> May 15<sup>th</sup> & 16<sup>th</sup>
                            2023</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-pattern"></div>
    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex align-items-center align-self-stretch justify-content-center"
                                style="background-image:url({{ asset('img/about-event.jpeg') }})">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3 pt-md-5">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">About the event</span>
                                    <p>
                                        The Direct Selling Forum is a continental-wide stakeholder engagement
                                        platform that seeks to bring together key players within the Direct Selling
                                        industry, to explore the economic benefits of the Direct Selling Business on the
                                        African continent and the impact it can have on improving citizens' lives.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="ftco-section ftco-team">
        <div class="overlay"></div>
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-md-7 col-lg-6 heading-section heading-section-white text-center ftco-animate">
                    <h2 class="mb-4">Our Event Speakers</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($speakers as $speaker)
                    <div class="col-sm-12 col-md ftco-animate d-flex mb-3">
                        <div class="speaker-wrap-details">
                            <a data-toggle="modal" data-target="#{{ str_replace(' ', '', $speaker->name) }}">
                                @if ($speaker->avatar)
                                    <img src="{{ $speaker->avatar->getUrl() }}"
                                        alt="{{ $speaker->name ?? 'Speaker Profile Picture' }}" lazy="loading">
                                @endif
                            </a>
                            <div class="text w-100 pt-3 px-3 pb-4 text-center">
                                <h3>
                                    <a data-toggle="modal"
                                        data-target="#{{ str_replace(' ', '', $speaker->name) }}">{{ $speaker->name ?? '' }}</a>
                                </h3>
                                <span class="position"><a data-toggle="modal"
                                        data-target="#{{ str_replace(' ', '', $speaker->name) }}">{{ $speaker->organization ?? '' }}</a></span>
                                <ul class="ftco-footer-social list-unstyled mt-2">
                                    @if (!empty($speaker->facebook))
                                        <li class="ftco-animate">
                                            <a target="_blank" href="{{ $speaker->facebook }}">
                                                <span class="fab fa-facebook"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty($speaker->twitter))
                                        <li class="ftco-animate">
                                            <a target="_blank" href="{{ $speaker->twitter }}">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty($speaker->linkedin))
                                        <li class="ftco-animate">
                                            <a target="_blank" href="{{ $speaker->linkedin }}">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty($speaker->website))
                                        <li class="ftco-animate">
                                            <a target="_blank" href="{{ $speaker->website }}">
                                                <span class="fa fa-globe"></span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="{{ str_replace(' ', '', $speaker->name) }}" tabindex="-1"
                        aria-labelledby="{{ str_replace(' ', '', $speaker->name) }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body speaker-details">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            @if ($speaker->avatar)
                                                <img src="{{ $speaker->avatar->getUrl() }}"
                                                    alt="{{ $speaker->name ?? 'Speaker Profile Picture' }}"
                                                    class="img-fluid" lazy="loading">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $speaker->name ?? '' }}</h5>
                                                <h6>{{ $speaker->organization ?? '' }}</h6>
                                                <hr>
                                                <p class="card-text">
                                                    {!! $speaker->bio ?? '' !!}
                                                </p>
                                                <ul class="ftco-footer-social list-unstyled mt-2">
                                                    @if (!empty($speaker->facebook))
                                                        <li class="ftco-animate">
                                                            <a target="_blank" href="{{ $speaker->facebook }}">
                                                                <span class="fab fa-facebook"></span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (!empty($speaker->twitter))
                                                        <li class="ftco-animate">
                                                            <a target="_blank" href="{{ $speaker->twitter }}">
                                                                <span class="fab fa-twitter"></span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (!empty($speaker->linkedin))
                                                        <li class="ftco-animate">
                                                            <a target="_blank" href="{{ $speaker->linkedin }}">
                                                                <span class="fab fa-linkedin"></span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (!empty($speaker->website))
                                                        <li class="ftco-animate">
                                                            <a target="_blank" href="{{ $speaker->website }}">
                                                                <span class="fa fa-globe"></span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <section class="discover-nairobi" style='background-image: url("{{ asset('img/nairobi.jpeg') }}");'>
        <div class="discover-nairobi-bg">
            <div class="container">
                <div class="discover-nairobi-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2>Discover Nairobi</h2>
                            <p>
                                This year, we welcome you to Nairobi, Kenya, for the first ever Africa Direct Selling
                                Forum. This will be a once-in-a-lifetime event, and we are excited to share it with the
                                rest of the world. We are excited for your trip to Nairobi.
                            </p>
                            <a href="{{ route('discover.nairobi') }}" class="btn btn-primary btn-lg">DISCOVER MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="col-md-12 heading-section ftco-animate">
            <span class="subheading text-center pt-5">Companies in attendance</span>
        </div>
        <div class="row align-items-center partners-section">
            <div class="col-md-12">
                <p class="text-center mb-5 mt-4">
                    <a class="convenor_image_main">
                        <img src="{{ asset('img/companies/Enzo Graziano Associates.png') }}"
                            alt="Enzo Graziano Associates">
                    </a>
                    <a class="convenor_image_main">
                        <img src="{{ asset('img/companies/Ong_anya Ombo Advocates.png') }}"
                            alt="Ong_anya Ombo Advocates">
                    </a>
                    <a class="convenor_image_main">
                        <img src="{{ asset('img/companies/PassionProfit.jpg') }}" alt="PassionProfit">
                    </a>
                    <a class="convenor_image_main">
                        <img src="{{ asset('img/companies/Weslene Logo.png') }}" alt="Weslene">
                    </a>
                    <a class="convenor_image_main">
                        <img src="{{ asset('img/companies/Wylde International.jpg') }}" alt="Wylde International">
                    </a>
                    <a class="convenor_image_main">
                        <img src="{{ asset('img/companies/newmark.png') }}" alt="Newmark IMC">
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
