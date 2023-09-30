<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themehut.co/html/geair/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 05:57:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Geair - Air Ticket Booking System HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    {{-- Header --}}
    <x-layout.inc.header />
    <!-- header-area-end -->
    {{-- /Header --}}


    <!-- main-area -->
    <main>

        {{ $slot }}

    </main>
    <!-- main-area-end -->
    @auth
        <!-- footer-area -->
        <footer>
            <div class="footer-area footer-bg">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-content">
                                        <p>Online to make your journey even more memorable access or meet</p>
                                        <ul class="footer-social">
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Explore</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="contact.html">Travel alerts</a></li>
                                            <li><a href="contact.html">Awards</a></li>
                                            <li><a href="contact.html">Qatarisation</a></li>
                                            <li><a href="contact.html">Careers</a></li>
                                            <li><a href="contact.html">Beyond</a></li>
                                            <li><a href="contact.html">Press release</a></li>
                                            <li><a href="contact.html">Airways Cargo</a></li>
                                            <li><a href="contact.html">Sponsorship</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-4">
                                <div class="footer-widget privacy">
                                    <div class="fw-title">
                                        <h4 class="title">Privacy</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul>
                                            <li><a href="booking-list.html">Airline fees</a></li>
                                            <li><a href="booking-list.html">Airline guides</a></li>
                                            <li><a href="booking-list.html">Airport guides</a></li>
                                            <li><a href="booking-list.html">Low fare tips</a></li>
                                            <li><a href="booking-list.html">Flights</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-8">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Contacts</h4>
                                    </div>
                                    <div class="footer-contact">
                                        <p>PO Box W75 Street lan West new queens</p>
                                        <h2 class="title"><a href="tel:0123456789">+1 246 333 - 0079</a></h2>
                                        <a href="#">geair@company.com</a>
                                        <form action="#">
                                            <input type="email" placeholder="Enter your email">
                                            <button type="submit"><i class="flaticon-send"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="copyright-text">
                                    <p>Copyright © 2022.All Rights Reserved By <span>Geair</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cart-img text-end">
                                    <img src="{{ asset('assets/img/images/cart.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
    @endauth

    @livewireScripts
    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from themehut.co/html/geair/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 05:58:38 GMT -->

</html>
