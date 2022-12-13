@extends('layouts.public')
@section('title')
    Discover Nairobi | Spots for a shopping spree
@endsection
@section('description')
    Shopping in Nairobi is an art form. We have several shopping malls to choose from
@endsection
@section('content')
    <section class="discover-nairobi discover-nairobi-top-header"
        style='background-image: url("{{ asset('img/shopping.jpeg') }}");'>
        <div class="discover-nairobi-bg">
            <div class="container">
                <div class="discover-nairobi-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Spots for a shopping spree</h1>
                            <p>
                                Shopping in Nairobi is an art form. We have several shopping malls to choose from,
                                including:
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
                    <h2 class="text-white text-bold text-uppercase">A city made for style</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-nairobi-carousel">
        <div class="container">
            <div class="owl-carousel mb-4">
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://thewaterfrontkaren.com/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/waterfront.jpeg') }}" class="img-fluid rounded-start"
                                    alt="The Waterfront Karen">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">The Waterfront Karen</h3>
                                    <p class="card-text mt-5">
                                        The Waterfront Karen is Kenya's first mall with an Aqua park. The aqua park
                                        offers a variety of activities such as wakeboarding, stand up paddle boarding,
                                        kayaking, and bumper boats. In addition, the mall has six restaurants and over
                                        thirty stores.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://www.thehubkaren.com/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/hub.png') }}" class="img-fluid rounded-start" alt="The Hub Karen">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">The Hub Karen</h3>
                                    <p class="card-text mt-5">
                                        The Hub Karen Mall is a premier shopping mall located in the beautiful leafy
                                        suburbs of Karen Nairobi that offers unique experiences ranging from fashion to
                                        entertainment to fine dining and beyond. It is home to both local and
                                        international retailers while also supporting small businesses.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://tworivers.co.ke/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/tworivers.jpeg') }}" class="img-fluid rounded-start"
                                    alt="Two Rivers Mall">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Two Rivers Mall</h3>
                                    <p class="card-text mt-5">
                                        Two Rivers Mall (Two Rivers Lifestyle Centre) is the largest shopping center in
                                        SSA (outside of South Africa), with over 200 stores offering local and
                                        international experiences. The Two Rivers Mall offers a variety of entertainment
                                        options, including GP Karting, 4DX Cinema, the Ferris wheel, and delicious
                                        restaurants.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://villagemarket-kenya.com/the-mall/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/thevillagemarket.jpeg') }}" class="img-fluid rounded-start"
                                    alt="Village Market">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Village Market</h3>
                                    <p class="card-text mt-5">
                                        Village Market is a large retail complex with a diverse mix of stores and
                                        restaurants, as well as a sophisticated atmosphere. It has over 150 retail shops
                                        selling local and designer wear, fashion, accessories, and footwear in the
                                        lifestyle and specialty categories.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://www.westgate.co.ke/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/Westgate-Shopping-Mall.jpeg') }}" class="img-fluid rounded-start"
                                    alt="Westgate Shopping Mall">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Westgate Shopping Mall</h3>
                                    <p class="card-text mt-5">
                                        Westgate has been in business since 2007. With over 80 stores and a variety of
                                        art and craft kiosks all open, as well as entertainment outlets and restaurants
                                        open until midnight, it is East Africa's finest shopping, leisure, and pleasure
                                        destination for millions of resident and international visitors.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://sarityourcity.com/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/Sarit.jpg') }}" class="img-fluid rounded-start" alt="Sarit Center">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Sarit Center</h3>
                                    <p class="card-text mt-5">
                                        Sarit is home to numerous retailers, restaurants, entertainment venues like
                                        bowling and cinema , offices, and medical facilities. The Sarit Center Expo
                                        allows visitors to meet and do business with over 100 leading brands.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
