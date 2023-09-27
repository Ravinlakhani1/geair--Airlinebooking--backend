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

                <div class="col-73">
                    <div class="primary-contact">
                        <i class="fa-regular fa-user"></i>
                        <h2 class="title">Passenger Details</h2>
                    </div>
                    <div class="booking-details-wrap">
                        <form action="/payment" method="POST">

                            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZOR_KEY') }}"
                                data-amount="{{ $total * 100 }}" data-buttontext="PAY NOW" data-name="Geair" data-description="booking of"
                                data-theme.color="#1f252e"></script>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="sub_total" value="{{ $booking_total }}">
                            <input type="hidden" name="text" value="{{ $tax_total }}">
                            <input type="hidden" name="total" value="{{ $total }}">
                            <input type="hidden" name="number_of_passengers" value="{{ $pessenger_count }}">
                            <input type="hidden" name="flight_id"  value="{{ $flight->id }}" >
                            @for ($i = 0; $i < $pessenger_count; $i++)
                                <ul>
                                    <li>
                                        <div class="form-grp">
                                            <div class="icon">
                                                <i class="flaticon-user-1"></i>
                                            </div>
                                            <input type="text" name="first_name[]"  placeholder="Give Name" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-grp">
                                            <input type="text" name="last_name[]" placeholder="Sur Name *" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-grp">
                                            <div class="form">
                                                <select id="gender" required name="gender[]" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="" selected disabled >Gender</option>
                                                    <option value="male" required>Male</option>
                                                    <option value="female" required>Female</option>
                                                    <option value="other" required>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endfor



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <div class="icon">
                                            <i class="flaticon-telephone-call"></i>
                                        </div>
                                        <div class="form">
                                            <input type="number" name="mobile" placeholder="Mobile Number *" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <div class="icon">
                                            <i class="flaticon-arroba"></i>
                                        </div>
                                        <div class="form">
                                            <label for="email">Your Email</label>
                                            <input type="email" id="email" name="email"
                                                placeholder="youinfo@gmail.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-sidebar" wire:ignore>
                                    <div
                                        class="col-md-12 price-summary-detail d-flex justify-content-center align-items-center">
                                        <a href="javascript:" class="btn"
                                            onclick="$('.razorpay-payment-button').click();">Pay Now</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-27">
                    <aside class="booking-sidebar">
                        <h2 class="main-title">Booking Info</h2>
                        <div class="widget">
                            <ul class="flight-info">
                                <li><img src="{{ asset($flight->airline->logo) }}" alt="" width="55px">
                                    <p>{{ date_format(date_create($flight->departure_time), 'G:i') }}
                                        ({{ $flight->origin->code }}) <span> {{ $flight->origin->city->name }} </span>
                                    </p>
                                </li>
                                <li>
                                    <p>{{ date_format(date_create($flight->arrival_time), 'G:i') }}
                                        ({{ $flight->destination->code }}) <span>
                                            {{ $flight->destination->city->name }}</span></p>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Your price summary</h2>
                            <div class="price-summary-top">
                                <ul>
                                    <li>Details</li>
                                    <li>Amount</li>
                                </ul>
                            </div>
                            <div class="price-summary-detail">
                                <ul>
                                    <li>Adult x {{ $pessenger_count }} <span>₹{{ $booking_total }}</span></li>
                                    <li>Tax x {{ $pessenger_count }} <span>₹{{ $tax_total }}</span></li>
                                    <li>Total Payable: <span>₹{{ $total }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- booking-details-area-end -->


</x-layout.master>
