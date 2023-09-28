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
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="50"
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

                <div class="col-12">
                    <div class="primary-contact">
                        <i class="fa-regular fa-user"></i>
                        <h2 class="title">Ticket Details</h2>
                    </div>
                    <div class="booking-details-wrap">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/icon/ticket-flight.png') }}" alt="" width="200px">

                        </div>

                        <div class=" row">
                            <div class="mt-4 border-2 col-6 border-2b-622243">
                                <div class="d-flex flex-column">
                                    <label class="text-muted fs-6">To</label>
                                    <div class="fs-5 text-622243">
                                        {{ $ticket->flight->origin->city->name }}
                                        <span class="fs-6">
                                            ( {{ $ticket->flight->origin->name }})
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 border-2 col-6 border-2b-622243">
                                <div class="d-flex flex-column justify-content-end align-items-end">
                                    <label class="text-muted fs-6">Dispatch Time</label>
                                    <span class="fs-5 text-622243">
                                        {{ $ticket->flight->departure_time }}
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 border-2 col-6 border-2b-622243">
                                <div class="d-flex flex-column justify-content-center">
                                    <label class="text-muted fs-6">From</label>


                                    <div class="fs-5 text-622243">
                                        {{ $ticket->flight->destination->city->name }}
                                        <span class="fs-6">
                                            ( {{ $ticket->flight->destination->name }})
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-4 border-2 col-6 border-2b-622243">
                                <div class="d-flex flex-column justify-content-end align-items-end">
                                    <label class="text-muted fs-6">Arrival Time</label>
                                    <span class="fs-5 text-622243">
                                        {{ $ticket->flight->arrival_time }}
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 ">
                                <div class="mt-4 text-center">
                                    <button class="btn btn-57112f">Download</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking-details-area-end -->


</x-layout.master>
