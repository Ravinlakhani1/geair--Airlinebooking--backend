<div class="col-73">
    <div class="primary-contact">
        <i class="fa-regular fa-user"></i>
        <h2 class="title">Passenger Details</h2>
    </div>
    <div class="booking-details-wrap">
        {{-- <form action="#"> --}}
            {{-- <a class="btn" wire:click='savePessenger'>Save</a> --}}

            @for($i=0;$i<$pessenger_count;$i++) <ul>
                <li>
                    <div class="form-grp">
                        <div class="icon">
                            <i class="flaticon-user-1"></i>
                        </div>
                        <input type="text" placeholder="Give Name" wire:model.live='pessenger.{{ $i }}.first_name'>
                    </div>
                </li>
                <li>
                    <div class="form-grp">
                        <input type="text" placeholder="Sur Name *" wire:model.live='pessenger.{{ $i }}.last_name'>
                    </div>
                </li>
                <li>
                    <div class="form-grp">
                        <div class="form">
                            <select id="title" name="select" class="form-select"
                                wire:model.live='pessenger.{{ $i }}.gender' aria-label="Default select example">
                                <option value="" selected disabled>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
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
                                <input type="number" wire:model.live='mobile' placeholder="Mobile Number *">
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
                                <input type="email" id="email" wire:model.live='email' placeholder="youinfo@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="booking-sidebar" wire:ignore>
                        <div class="col-md-12 price-summary-detail d-flex justify-content-center align-items-center">
                            <form action="/payment" method="POST">

                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="{{ env('RAZOR_KEY') }}" data-amount="{{ $total * 100 }}"
                                    data-buttontext="PAY NOW" data-name="Geair"
                                    data-description="booking of {{ $mobile }}" data-prefill.email="{{ $email }}"
                                    data-theme.color="#1f252e">
                                </script>
                                <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                                @for($i=0;$i<$pessenger_count;$i++)

                                    <input type="hidden" name="first_name[]" value="{{ $pessenger[$i]['first_name'] }}">
                                    <input type="hidden" name="last_name[]" value="{{ $pessenger[$i]['last_name'] }}">
                                    <input type="hidden" name="gender[]" value="{{ $pessenger[$i]['gender'] }}">

                                @endfor
                                    <input type="hidden" name="mobile" value="{{ $mobile }}">
                                    <input type="hidden" name="email" value="{{ $email }}">
                            </form>
                        </div>
                    </div>
                </div>

    </div>
</div>
