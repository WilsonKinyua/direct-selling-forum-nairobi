<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}"
                                alt="Logo"></a>
                    </h2>

                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a target="_blank" href="https://twitter.com/directforum"><span
                                    class="fab fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a target="_blank"
                                href="https://web.facebook.com/directsellingsummit/"><span
                                    class="fab fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a target="_blank"
                                href="https://www.instagram.com/africadirectsellingforum/"><span
                                    class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Explore</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about-us') }}"><span class="fa fa-chevron-right mr-2"></span>About</a>
                        </li>
                        <li><a href="{{ route('contact-us') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        {{-- <li><a href="{{ route('speakers') }}"><span class="fa fa-chevron-right mr-2"></span>Speakers</a>
                        </li> --}}

                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <a href="{{ route('register')}}" class="btn btn-primary px-3 py-2">Register Now</a>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a QUESTION?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">Nairobi, Kenya</span>
                            </li>
                            <li><a><span class="icon fa fa-phone"></span><span class="text">+254 729 301
                                        953 / +254 705 782 606</span></a></li>
                            <li><a><span class="icon fa fa-paper-plane pr-4"></span><span
                                        class="text"><span>secretariat@directsellingafrica.com</span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-2 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0" style="color: rgba(255,255,255,.5);">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
