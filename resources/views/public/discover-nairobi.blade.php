@extends('layouts.public')
@section('title')
    Discover Nairobi
@endsection
@section('description')
    This year, we welcome you to Nairobi, Kenya, for the first ever Africa Direct Selling
    FORUM. This will be a once-in-a-lifetime event, and we are excited to share it with the
    rest of the world. We are excited for your trip to Nairobi.
@endsection
@section('content')
    <section class="discover-nairobi discover-nairobi-top-header"
        style='background-image: url("{{ asset('img/nairobi.jpeg') }}");'>
        <div class="discover-nairobi-bg">
            <div class="container">
                <div class="discover-nairobi-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Discover Nairobi</h1>
                            <p>
                                This year, we welcome you to Nairobi, Kenya, for the first ever Africa Direct Selling
                                FORUM. This will be a once-in-a-lifetime event, and we are excited to share it with the
                                rest of the world. We are excited for your trip to Nairobi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-5 pb-5">
                    <h2 class="text-white text-bold">ENJOY THE FORUM IN NAIROBI!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-nairobi-carousel">
        <div class="container">
            <div class="owl-carousel mb-4">
                <div class="card mb-3 mt-5">
                    <a href="{{ route('discover.sightseeing') }}">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing.jpeg') }}" class="img-fluid rounded-start"
                                    alt="Sightseeing">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Sightseeing</h3>
                                    <p class="card-text mt-5">
                                        Nairobi is Kenya's capital and largest city. It is Kenya's commercial,
                                        financial,
                                        and
                                        cultural center. Nairobi is also known as the Safari Capital of the World
                                        because of
                                        the
                                        numerous parks and sanctuaries that can be found within the city.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">Sightseeing guide</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a href="{{ route('discover.restaurants') }}">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/restaurants.jpeg') }}" class="img-fluid rounded-start"
                                    alt="Restaurants">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Restaurants</h3>
                                    <p class="card-text mt-5">
                                        The dining scene in this city is versatile; you can dress up and enjoy a fine
                                        dining experience, or you can explore the street foods like a local.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">Restaurants guide</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a href="{{ route('discover.shopping') }}">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/shopping.jpeg') }}" class="img-fluid rounded-start" alt="Shopping">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Shopping</h3>
                                    <p class="card-text mt-5">
                                        Shopping in Nairobi is an art form. We have several shopping malls to choose
                                        from, including:
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">Shopping guide</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
