<div>
    <div class="booking-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="booking-wrap">
                        <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                            <li class="nav-item w-100" role="presentation">
                                <button class="text-white nav-link active rounded-3 bg-622243" id="bOOKing-tab"
                                    data-bs-toggle="tab" data-bs-target="#bOOKing-tab-pane" type="button" role="tab"
                                    aria-controls="bOOKing-tab-pane" aria-selected="true">
                                    <i class="flaticon-flight"></i>
                                    AIR BOOKING
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel"
                                aria-labelledby="bOOKing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content-wrap">
                                            <div class="content-top">
                                                <ul>
                                                    <li>Flights</li>
                                                    <li>Geair Stopover</li>
                                                </ul>
                                            </div>
                                            <form wire:submit='submit'>
                                                <div class="booking-form">
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp position-relative ">
                                                                <input type="text" placeholder="From"
                                                                    wire:model.live='from'>
                                                                <div class="position-absolute top-10">
                                                                    <ul class="d-grid">
                                                                        @foreach ($from_city_list as $list)
                                                                        <li
                                                                            class="py-1 pl-20 bg-white hover-text-gray-900">
                                                                            <a href="javascript:"
                                                                                wire:click="setFrom({{ $list->id }},'{{ $list->name }}')"
                                                                                class="cursor-pointer">{{ $list->name
                                                                                }}</a>
                                                                        </li>
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp position-relative">
                                                                <input type="text" placeholder="To"
                                                                    wire:model.live='to'>
                                                                <div class="position-absolute top-10">
                                                                    <ul class="d-grid">
                                                                        @foreach ($to_city_list as $list)
                                                                        <li
                                                                            class="py-1 pl-40 bg-white hover-text-gray-900 ">
                                                                            <a href="javascript:"
                                                                                wire:click="setTo({{ $list->id }},'{{ $list->name }}')"
                                                                                class="cursor-pointer">{{ $list->name
                                                                                }}</a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                <button class="exchange-icon"><i
                                                                        class="flaticon-exchange-1"></i></button>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="shortBy">Type</label>
                                                                <select id="shortBy" name="flight_type"
                                                                    class="form-select" wire:model="type"
                                                                    aria-label="Default select example">
                                                                    <option value="">All</option>
                                                                    @foreach (config('flight_type') as $key => $type)
                                                                    <option value="{{ $key }}">
                                                                        {{ $type }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="traveling_date">Traveling
                                                                            Date</label>
                                                                        <input type="date"
                                                                            id="traveling_date" wire:model.lazy.blur="t_date"
                                                                            placeholder="Select Date">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp economy">
                                                                <label for="passenger">Passenger</label>
                                                                <input type="text" id="passenger" wire:model='p' placeholder="1">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="content-bottom">
                                                    {{-- <a href="booking-details.html" class="promo-code">+ Add Promo
                                                        code</a> --}}
                                                    <button class="btn">
                                                        Show Flights
                                                        <i class="flaticon-flight-1"></i>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
