@extends('layouts.public')
@section('title')
    Event Program
@endsection
@section('description')
    This year’s forum will be a two-day forum, which will take place in Nairobi Kenya, and will see the congregation of
    innovators within the industry, customers, decision-makers in the government and much more.
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ 'img/program.jpg' }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Program <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Program</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Event Program</h2>
                </div>
            </div>
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">Day 01
                                <span>13<sup>th</sup> February 2023</span></a>
                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                role="tab" aria-controls="v-pills-2" aria-selected="false">Day 02 <span>14<sup>th</sup>
                                    February
                                    2023</span></a>
                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="day-1-tab">
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">8:30 AM – 9:00 AM</span>
                                        <h2><a>Arrival and registration of guests</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">9:00 AM – 9:15 AM</span>
                                        <h2><a>Opening ceremony</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">9:15 AM – 9:25 AM</span>
                                        <h2><a>Opening remarks by QNet</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">9:25 AM – 10:00 AM</span>
                                        <h2><a>Keynote remarks</a></h2>
                                    </div>
                                </div>
                                <div class="bg-main speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">10:00 AM – 10:30 AM</span>
                                        <h2><a class="text-white">Tea Break</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">10:30 AM – 10:50 AM</span>
                                        <h2><a>Keynote Address by Senior Ministry official</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">10:50 AM – 11:10 AM</span>
                                        <h2><a>Address by key stakeholder within the industry</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">11:10 AM – 11:30 AM</span>
                                        <h2><a>Address by key stakeholder within the industry</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">11:30 AM – 12:30 AM</span>
                                        <h2><a>Panel Session on first high level topic</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">12:30 PM – 1:00 PM</span>
                                        <h2><a>Summary from QNet representative</a></h2>
                                    </div>
                                </div>
                                <div class="bg-main speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">1:00 PM – 2:00 PM</span>
                                        <h2><a class="text-white">Lunch Break</a></h2>
                                    </div>
                                </div>
                                <div class="bg-secondary speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time text-white">2:00 PM – 2:15 PM</span>
                                        <h2><a class="text-white">Ice Breaker</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">2:15 PM – 3:15 PM</span>
                                        <h2><a>Group engagement(Divided into key pillars within the Direct
                                                Selling Industry)</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">3:15 PM – 4:00 PM</span>
                                        <h2><a>Presentations</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">4:00 PM</span>
                                        <h2><a>Closing and networking</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">8:30 AM – 9:00 AM</span>
                                        <h2><a>Arrival and registration of guests</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">9:00 AM – 9:10 AM</span>
                                        <h2><a>Opening, Day 1 recap</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">9:10 AM – 9:25 AM</span>
                                        <h2><a>Remarks by QNet</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">9:25 AM – 10:00 AM</span>
                                        <h2><a>Keynote remarks</a></h2>
                                    </div>
                                </div>
                                <div class="bg-main speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">10:00 AM – 10:30 AM</span>
                                        <h2><a class="text-white">Tea Break</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">10:30 AM – 10:50 AM</span>
                                        <h2><a>Senior Government official - TBC</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">10:50 AM – 11:10 AM</span>
                                        <h2><a>Senior official from Tiens</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">11:10 AM – 11:30 AM</span>
                                        <h2><a>Senior official from Oriflame</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">11:30 AM – 12:30 PM</span>
                                        <h2><a>Panel Session on second high level topic</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">12:30 PM – 1:00 PM</span>
                                        <h2><a>Session Recap </a></h2>
                                    </div>
                                </div>
                                <div class="bg-main speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">1:00 PM – 2:00 PM</span>
                                        <h2><a class="text-white">Lunch Break</a></h2>
                                    </div>
                                </div>
                                <div class="bg-secondary speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time text-white">2:00 PM – 2:15 PM</span>
                                        <h2><a class="text-white">Ice Breaker</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">2:15 PM – 3:15 PM</span>
                                        <h2><a>Group engagement(Divided into key pillars within the Direct
                                                Selling Industry)</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">3:15 PM – 4:00 PM</span>
                                        <h2><a>Presentations</a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">4:00 PM – 4:25 PM</span>
                                        <h2><a>Closing ceremony - Remarks by Kenyan Government official,
                                                Remarks by QNet CEO, Vote of thanks
                                            </a></h2>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="text pl-md-5">
                                        <span class="time">4:25 PM</span>
                                        <h2><a>Networking & departure</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
