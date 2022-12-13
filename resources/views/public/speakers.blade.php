@extends('layouts.public')
@section('title')
    Our Speakers
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('img/speaker.jpg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Speakers <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Our Speakers</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-team">
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
                    {{-- speaker modal --}}
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
    </section>
@endsection
