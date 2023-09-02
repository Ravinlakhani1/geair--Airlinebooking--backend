<x-layout.master>
    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-bg" data-background="{{ asset('assets/img/slider/slider_bg01.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of
                                    Discounts? It's Genius.</h2>
                                <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock
                                    instant savings of 10% or more with a free Geairinfo.com account</p>
                                @guest
                                    <a href="{{ route('login') }}" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Sign in /
                                        Register</a>
                                @endguest
                                @auth
                                    <a href="#" class="btn" data-animation="fadeInUp" data-delay=".6s">Book Now</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-bg" data-background="{{ asset('assets/img/slider/slider_bg02.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of
                                    Discounts? It's Genius.</h2>
                                <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock
                                    instant savings of 10% or more with a free Geairinfo.com account</p>
                                @guest
                                    <a href="{{ route('login') }}" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Sign in /
                                        Register</a>
                                @endguest
                                @auth
                                    <a href="#" class="btn" data-animation="fadeInUp" data-delay=".6s">Book Now</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-bg" data-background="{{ asset('assets/img/slider/slider_bg03.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of
                                    Discounts? It's Genius.</h2>
                                <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock
                                    instant savings of 10% or more with a free Geairinfo.com account</p>

                                @guest
                                    <a href="{{ route('login') }}" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Sign in /
                                        Register</a>
                                @endguest
                                @auth
                                    <a href="#" class="btn" data-animation="fadeInUp" data-delay=".6s">Book Now</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- booking-area -->
    <div>
        <livewire:flight.search />
    </div>
    <!-- booking-area-end -->

    <!-- features-area -->
    <section class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-sm-10">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="flaticon-help"></i>
                        </div>
                        <div class="features-content">
                            <h6 class="title">We are now available</h6>
                            <p>Call +1 555 666 888 for contuct with us</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-10">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="flaticon-plane"></i>
                        </div>
                        <div class="features-content">
                            <h6 class="title">International Flight</h6>
                            <p>Call +1 555 666 888 for booking assistance</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-10">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="flaticon-money-back-guarantee"></i>
                        </div>
                        <div class="features-content">
                            <h6 class="title">Check Refund</h6>
                            <p>Call +1 555 666 888 for check refund status</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- flight-offer-area -->
    <x-page.flight-offer />
    <!-- flight-offer-area-end -->

    <!-- destination-area -->
    <x-page.destination />
    <!-- destination-area-end -->

    <!-- fly-next-area -->
    <x-page.flynext-package />
    <!-- fly-next-area-end -->

    <!-- brand-area -->
    <div class="brand-area brand-bg">
        <div class="container">
            <div class="row brand-active">
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img03.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img04.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img05.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img06.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img03.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- service-area -->
    <x-page.services />
    <!-- service-area-end -->

    <!-- blog-area -->
    <x-page.blogs />
    <!-- blog-area-end -->
</x-layout.master>
