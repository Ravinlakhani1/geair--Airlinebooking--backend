<aside class="booking-sidebar">
    <div class="widget filters">
        <h2 class="title">filters</h2>
        <div class="filters-wrap">
            <h2 class="widget-title">Price Range</h2>
            <div class="price_filter" wire:ignore>
                <div id="slider-range"></div>
                <div class="price_slider_amount">
                    <span>Price :</span>
                    <input type="text" id="amount" name="price" placeholder="Add Your Price" x-ref="price" />
                    <input type="submit" class="btn" value="Filter" @click="$wire.setPrice($refs.price.value)">
                </div>
            </div>
        </div>
    </div>
    <div class="widget">
        <h2 class="mb-2 widget-title">Departure Time</h2>
        <button class="reset-btn departure-time" wire:click="setTime('')">Reset</button>

        <ul class="departure-wrap">
            <li><a href="javascript:" wire:click="setTime('0:00-5:59')" @class(['departure-time avtive'=>$time ==
                    '0:00-5:59'])><i class="flaticon-sunrise"></i>00:00 -
                    05:59</a></li>
            <li><a href="javascript:" wire:click="setTime('6:00-11:59')" @class(['departure-time avtive'=>$time ==
                '6:00-11:59'])><i class="flaticon-sunny"></i>06:00 - 11:59</a>
            </li>
            <li><a href="javascript:" wire:click="setTime('12:00-17:59')"  @class(['departure-time avtive'=>$time ==
                '12:00-17:59'])><i class="flaticon-sunset"></i>12:00 -
                    17:59</a></li>
            <li><a href="javascript:" wire:click="setTime('18:00-23:59')"  @class(['departure-time avtive'=>$time ==
                '18:00-23:59'])><i class="flaticon-crescent-moon"></i>18:00 -
                    23:59</a></li>
        </ul>
    </div>
    <div class="widget">
        <h2 class="widget-title">Airlines</h2>
        <ul class="airlines-cat-list">
            @foreach ($airlines as $key => $item)
            <li>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $key }}"
                        wire:click="setAirline({{ $key }})" id="airline{{ $key }}">
                    <label class="form-check-label" for="airline{{ $key }}">{{ $item }}</label>
                </div>
            </li>
            @endforeach

        </ul>
    </div>

</aside>
