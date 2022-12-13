@extends('layouts.public')
@section('title')
    About Direct Selling Forum
@endsection
@section('description')
    The Direct Selling Forum is a continental-wide stakeholder engagement
    platform that seeks to bring together key players within the Direct Selling
    industry, to explore the economic benefits of the Direct Selling Business on the
    African continent and the impact it can have on improving citizens' lives.
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('img/about.jpeg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>About the event <i
                                class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-0 bread">About the event</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row d-flex">
                        <div class="col-md-12">
                            <div class="row pb-3 pt-md-5">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading text-center">Welcome</span>
                                    <h2 class="mb-4 text-center text-primary">AFRICA DIRECT SELLING FORUM</h2>
                                    <p>
                                        The Direct Selling Forum is a continental-wide stakeholder engagement
                                        platform that seeks to bring together key players within the Direct Selling
                                        industry, to explore the economic benefits of the Direct Selling Business on the
                                        African continent and the impact it can have on improving citizens' lives.
                                    </p>
                                    <p>
                                        This year’s forum will be a two-day forum, which will take place in Nairobi
                                        Kenya, and will see the congregation of innovators within the industry,
                                        customers, decision-makers in the government and much more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row d-flex">
                        <div class="col-md-12">
                            <div class="row pb-3 pt-md-5">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading text-center">WHY ATTEND THE Forum?</span>
                                    <h2 class="mb-4 text-center text-primary">Expected Outcomes</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row why-attend mb-4">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/about/1.jpeg') }}" class=" card-img-top"
                                    alt="Learn how to successfully launch or relaunch your direct selling enterprise">
                                <div class="card-body">
                                    <p class="card-text">
                                        Learn how to successfully launch or relaunch your direct selling enterprise.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/about/2.jpeg') }}" class="card-img-top"
                                    alt="Master your online brand and combine personal selling">
                                <div class="card-body">
                                    <p class="card-text">
                                        Master your online brand and combine personal selling with the most recent
                                        digital marketing tools.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/about/3.jpeg') }}" class="card-img-top"
                                    alt="Get clear, actionable advice on how to thrive">
                                <div class="card-body">
                                    <p class="card-text">
                                        Get clear, actionable advice on how to thrive in today's legal and
                                        regulatory environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/about/4.jpeg') }}" class="card-img-top"
                                    alt="Learn about emerging strategies">
                                <div class="card-body">
                                    <p class="card-text">
                                        Learn about emerging strategies, cutting-edge technologies, and best
                                        practices for taking your business to the next level.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/about/5.jpeg') }}" class="card-img-top"
                                    alt="Make contact with other direct selling company owners">
                                <div class="card-body">
                                    <p class="card-text">
                                        Make contact with other direct selling company owners.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/about/6.jpeg') }}" class="card-img-top"
                                    alt="Learn what you should avoid doing that will harm your business">
                                <div class="card-body">
                                    <p class="card-text">
                                        Learn what you should avoid doing that will harm your business.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
