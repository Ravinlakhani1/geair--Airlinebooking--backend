<div class="col-27">
    <aside class="booking-sidebar">
        <h2 class="main-title">Booking Info</h2>
        <div class="widget">
            <ul class="flight-info">
                <li><img src="{{ asset($flight->airline->logo) }}" alt="" width="55px">
                    <p>{{ date_format( date_create($flight->departure_time),'G:i') }} ({{
                        $flight->origin->code }}) <span> {{ $flight->origin->city->name }} </span></p>
                </li>
                <li>
                    <p>{{ date_format( date_create($flight->arrival_time),'G:i') }} ({{
                        $flight->destination->code }}) <span> {{ $flight->destination->city->name
                            }}</span></p>
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
