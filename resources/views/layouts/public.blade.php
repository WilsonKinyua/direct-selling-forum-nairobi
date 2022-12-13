<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Dalbit Petroleum - Fuel Supply & Distribution" />
    <title>
        @hasSection('title')
            Direct Selling Forum & Expo - @yield('title')
        @else
            Direct Selling Forum & Expo - Nairobi 2023
        @endif
    </title>

    <meta name="keywords"
    content="@hasSection('keywords') @yield('keywords')@else Direct, Selling, Forum, Expo, Nairobi, Kenya, 2023 @endif" />
    <meta name="title"
        content="@hasSection('title') @yield('title')@else Direct Selling Forum & Expo - Nairobi 2023 @endif">
    <meta name="description"
        content="@hasSection('description') @yield('description')@else The Direct Selling Forum is a continental-wide stakeholder engagement platform that seeks to bring together key players within the Direct Selling industry, to explore the economic benefits of the Direct Selling Business on the African continent and the impact it can have on improving citizens' lives @endif">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:title"
        content="@hasSection('title') @yield('title')@else Direct Selling Forum & Expo - Nairobi 2023 @endif">
    <meta property="og:description"
        content="@hasSection('description') @yield('description')@else The Direct Selling Forum is a continental-wide stakeholder engagement platform that seeks to bring together key players within the Direct Selling industry, to explore the economic benefits of the Direct Selling Business on the African continent and the impact it can have on improving citizens' lives @endif">
    <meta property="og:image"
        content="@hasSection('image') @yield('image')@else{{ asset('img/logo.png') }} @endif">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('') }}">
    <meta property="twitter:title"
        content="@hasSection('title') @yield('title')@else Direct Selling Forum & Expo - Nairobi 2023 @endif">
    <meta property="twitter:description"
        content="@hasSection('description') @yield('description')@else The Direct Selling Forum is a continental-wide stakeholder engagement platform that seeks to bring together key players within the Direct Selling industry, to explore the economic benefits of the Direct Selling Business on the African continent and the impact it can have on improving citizens' lives @endif">
    <meta property="twitter:image"
    content="@hasSection('image') @yield('image')@else{{ asset('img/logo.png') }} @endif">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

</head>

<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script>
        eval(mod_pagespeed_Jk0eYH_1hK);
    </script>
    <script>
        eval(mod_pagespeed_5vXMK0YFXy);
    </script>
    <script>
        eval(mod_pagespeed_173hHsqYbG);
    </script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script>
        eval(mod_pagespeed_8MxE3VmDuJ);
    </script>
    <script>
        eval(mod_pagespeed_kzHRM00OWJ);
    </script>
    <script>
        eval(mod_pagespeed_Dhkgb82Vsp);
    </script>
    <script>
        eval(mod_pagespeed_zf48_NWl0K);
    </script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        eval(mod_pagespeed_jul9BqcQwB);
    </script>
    <script>
        eval(mod_pagespeed_tdDUrIel9p);
    </script>
    <script>
        eval(mod_pagespeed_9UpqTOJlpB);
    </script>
    <script>
        eval(mod_pagespeed_x08rxoseRN);
    </script>
    <script>
        eval(mod_pagespeed_NhdM2oKiAm);
    </script>
    <script src="{{ asset('js/fslightbox.js') }}"></script>
    @yield('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            },
            autoplay: true,
        })
    </script>
</body>


</html>
