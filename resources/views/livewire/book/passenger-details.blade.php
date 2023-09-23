<div class="col-73">
    <div class="primary-contact">
        <i class="fa-regular fa-user"></i>
        <h2 class="title">Passenger Details</h2>
    </div>
    <div class="booking-details-wrap">
        <form action="#">
            @for($i=1;$i<=$pessenger_count;$i++) <ul>
                <li>
                    <div class="form-grp">
                        <div class="icon">
                            <i class="flaticon-user-1"></i>
                        </div>
                        <input type="text" placeholder="Give Name">
                    </div>
                </li>
                <li>
                    <div class="form-grp">
                        <input type="text" placeholder="Sur Name *">
                    </div>
                </li>
                <li>
                    <div class="form-grp">
                        <div class="form">
                            <select id="title" name="select" class="form-select" aria-label="Default select example">
                                <option value="">Mr.</option>
                                <option>Mrs.</option>
                                <option>Others..</option>
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
                                <input type="number" placeholder="Mobile Number *">
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
                                <input type="email" id="email" placeholder="youinfo@gmail.com">
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
