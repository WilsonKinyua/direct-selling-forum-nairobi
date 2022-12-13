@extends('layouts.public')
@section('title')
    Discover Nairobi | Nairobi's must-see sights
@endsection
@section('description')
    Nairobi is Kenya's capital and largest city. It is Kenya's commercial, financial, and
    cultural center. Nairobi is also known as the Safari Capital of the World because of the
    numerous parks and sanctuaries that can be found within the city.
@endsection
@section('content')
    <section class="discover-nairobi discover-nairobi-top-header"
        style='background-image: url("{{ asset('img/nairobi.jpeg') }}");'>
        <div class="discover-nairobi-bg">
            <div class="container">
                <div class="discover-nairobi-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Nairobi's must-see sights</h1>
                            <p>
                                Nairobi is Kenya's capital and largest city. It is Kenya's commercial, financial, and
                                cultural center. Nairobi is also known as the Safari Capital of the World because of the
                                numerous parks and sanctuaries that can be found within the city.
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
                    <h2 class="text-white text-bold text-uppercase">An ancient city – a global hub</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-nairobi-carousel">
        <div class="container">
            <div class="owl-carousel mb-4">
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="http://www.kws.go.ke/parks/nairobi-national-park">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing/Nairobi National Park.jpg') }}"
                                    class="img-fluid rounded-start" alt="Nairobi National Park">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Nairobi National Park</h3>
                                    <p class="card-text mt-5">
                                        Kenya's first national park, established in 1946, is surrounded by city
                                        skyscrapers and is home to several animal sanctuaries. Nairobi National Park,
                                        only 10 kilometers from the city, is home to a diverse range of wildlife.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://www.giraffecentre.org">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing/Girrafe Centre.jpg') }}" class="img-fluid rounded-start"
                                    alt="Giraffe Center">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Giraffe Center</h3>
                                    <p class="card-text mt-5">
                                        In the tall observation towers of the Giraffe Center, local and international
                                        visitors can get up close and personal with the world's tallest species, the
                                        giraffe. It allows for personal interaction by allowing guests to feed the
                                        giraffes.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="http://www.sheldrickwildlifetrust.org/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing/Sheldrick Elephant Orpahnage.jpg') }}"
                                    class="img-fluid rounded-start" alt="Sheldrick Elephant Orphanage">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Sheldrick Elephant Orphanage</h3>
                                    <p class="card-text mt-5">
                                        The David Sheldrick Wildlife Trust runs the Sheldrick Elephant Orphanage, which
                                        takes in elephant calves orphaned by poachers. It is usually open for an hour
                                        per day, and visitors get to see the tiny elephants playing in the mud with
                                        their keepers. When the elephants reach the appropriate age, they are released
                                        into the Tsavo National Park.
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="http://www.museums.or.ke/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing/Nairobi National Museum.png') }}"
                                    class="img-fluid rounded-start" alt="Nairobi National Museum">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Nairobi National Museum</h3>
                                    <p class="card-text mt-5">
                                        Kenya's National Museum has a long and intriguing history. It traces the history
                                        of the country through a series of fascinating exhibits, including paintings,
                                        tribal artifacts, and even skeletons. The geology exhibits at the museum provide
                                        an exciting introduction to the forces that shaped the Rift Valley. What better
                                        way to end your museum visit than with a visit to the snake park?
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank" href="https://kicc.co.ke/">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing/KICC_nairobi_kenya.jpg') }}"
                                    class="img-fluid rounded-start" alt="Kenyatta International Convention Center (KICC)">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Kenyatta International Convention Center (KICC)</h3>
                                    <p class="card-text mt-5">
                                        The iconic KICC tower was built in the 1970s and is the cutting edge of
                                        architecture. Nothing beats standing proud in the Nairobi skyline and taking in
                                        the view of the city. On a clear day, you can even spot big game roaming around
                                        the Nairobi National Park
                                    </p>
                                    <button class="btn btn-outline-primary text-uppercase">read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3 mt-5">
                    <a target="_blank">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/sightseeing/Nairobi Railway Museum.jpg') }}"
                                    class="img-fluid rounded-start" alt="Nairobi Railway Museum">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title pt-5">Nairobi Railway Museum</h3>
                                    <p class="card-text mt-5">
                                        The Nairobi Railway Museum is privately run and preserves colonial history. The
                                        museum contains photographs, relics, and memorabilia from the Uganda Railway,
                                        dubbed the Lunatic Express by British colonialists due to the massive investment
                                        required to construct it. It also has a collection of grounded old trains, among
                                        them is the Mountain Class locomotive, one of the most powerful ever built.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
