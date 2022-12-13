@extends('layouts.public')
@section('title')
    Discover Nairobi | Nairobi’s Top Restaurants
@endsection
@section('description')
    The dining scene in this city is versatile; you can dress up and enjoy a fine dining
    experience, or you can explore the street foods like a local.
@endsection
@section('content')
    <section class="discover-nairobi discover-nairobi-top-header"
        style='background-image: url("{{ asset('img/nairobi.jpeg') }}");'>
        <div class="discover-nairobi-bg">
            <div class="container">
                <div class="discover-nairobi-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Our favourite Nairobi restaurants</h1>
                            <h4 class="text-white">Nairobi’s Top Restaurants</h4>
                            <p>
                                The dining scene in this city is versatile; you can dress up and enjoy a fine dining
                                experience, or you can explore the street foods like a local.
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
                    <h2 class="text-white text-bold text-uppercase">Eat your way across the city.</h2>
                    <h6 class="text-white text-bold text-uppercase">Check out some of our recommendations for the best
                        places to eat across Nairobi.</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-nairobi-carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="restaurants-list">
                        <li>
                            <a target="_blank" href="https://www.thefoodlibrary.co.ke/inti/">Inti</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.thefoodlibrary.co.ke/bambino-latin-italian/">Bambino</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.thefoodlibrary.co.ke/mercado/">Mercado</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.thefoodlibrary.co.ke/botanica-2/">Botanica</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.mawimbirestaurant.com">Mawimbi Seafood Restaurant</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.redginger.co.ke/">Red Ginger Eatery</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://thecopperivy.co.ke/">The Cooper Ivy</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://laterrazzarestaurant.co.ke/">La Terraza Restaurant</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://peppertreekenya.com/">Peppertree</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://wamaafrica.org/">Wama Africa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
