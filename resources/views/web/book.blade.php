<x-layout.master>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center breadcrumb-content">
                        <h2 class="title">Booking Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Booking Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- customer-details-area -->
    <section class="customer-details-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="customer-details-content">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/customer_det_icon.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Customer Details: Please fill in with valid information.</h2>
                            <div class="customer-progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="customer-progress-step">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                            <p>Guest Information</p>
                                        </li>
                                        <li>
                                            <span>2</span>
                                            <p>Payment</p>
                                        </li>
                                        <li>
                                            <span>3</span>
                                            <p>Confirmation</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customer-details-area-end -->

    <!-- booking-details-area -->
    <section class="booking-details-area">
        <div class="container">
            <div class="row justify-content-center">

                <livewire:book.passenger-details />
                <livewire:book.info :id="$id" />


            </div>
        </div>
    </section>
    <!-- booking-details-area-end -->


</x-layout.master>
