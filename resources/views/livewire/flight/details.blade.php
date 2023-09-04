<div>

    @foreach ($flights as $flight)
    <div class="booking-list-item">

        <div class="booking-list-item-inner">
            <div class="booking-list-top">
                <div class="flight-airway">
                    <div class="flight-logo">
                        <img src="{{ $flight->airline->logo }}" width="66px" alt="">
                        <h5 class="title">{{ $flight->airline->name }}</h5>
                    </div>
                    {{-- <span>Operated by Emirates</span> --}}
                </div>
                <ul class="flight-info">
                    <li>{{ date('l', strtotime($flight->departure_time)) }}, <span>{{ date('M
                            d',strtotime($flight->departure_time)) }}</span></li>
                    <li class="time"><span>{{ date('G:i', strtotime($flight->departure_time))}}</span>DAC</li>
                    <li> {{ $this->timeDifference($flight->departure_time,$flight->arrival_time) }}</li>
                </ul>
                <div class="flight-price">
                    <h4 class="title">₹&nbsp;{{ number_format($flight->price) }}</h4>
                    <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                </div>
            </div>
            <div class="booking-list-bottom">
                <ul>
                    <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                    <li>Price per person (incl. taxes & fees)</li>
                </ul>
            </div>
        </div>
        <div class="flight-detail-wrap">
            <div class="flight-date">
                <ul>
                    <li>{{ date('l, M d', strtotime($flight->departure_time)) }}</li>
                    <li> {{ date('l, M d - G:i', strtotime($flight->departure_time)) }} <span>
                            {{ $this->timeDifference($flight->departure_time,$flight->arrival_time) }}
                        </span></li>
                    <li>{{ date('l, M d - G:i', strtotime($flight->arrival_time)) }}</li>

                </ul>
            </div>
            <div class="flight-detail-right">
                <h4 class="title">{{ $flight->origin->code }} - {{ $flight->origin->name }}, {{ $flight->origin->city->name }}</h4>
                <div class="flight-detail-info">
                    <img src="{{ $flight->airline->logo }}" alt="" width="66px">
                    <ul>
                        {{-- <li>Tpm Line</li> --}}
                        <li>Operated by {{ $flight->airline->name }}</li>
                        <li>{{ $flight->flight_type }} | Flight {{ $flight->flight_number }} | {{ $flight->plane->name }}</li>
                        <li>Adult(s): 25KG luggage free</li>
                    </ul>
                </div>
                <h4 class="title title-two">{{ $flight->destination->code }} - {{ $flight->destination->name }}, {{ $flight->destination->city->name }}</h4>
            </div>
        </div>
    </div>
    @endforeach
</div>
