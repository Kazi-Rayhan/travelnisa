@extends('layouts.app')
@section('title')
Detail
@endsection
@push('front_style')
@endpush
@section('content')
    @php
        $images = is_array($hotel['images']) ? $hotel['images'] : json_decode($hotel['images'], true);
    @endphp

    <!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            @foreach ($images as $key => $image)
                <div class="text-center item bg-img" data-overlay-dark="{{ $key }}"
                    data-background="{{ Storage::url($image) }}"></div>
            @endforeach
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding bg-darkblack" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12">
                    {{-- <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span> --}}
                    {{-- @dd($hotel) --}}
                    <div class="section-subtitle">Luxury Hotel</div>
                    <div class="section-title">{{ $hotel->name }}</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">Hotel non lorem ac erat suscipit bibendum nulla facilisi. Sedeuter nunc volutpat miss
                        sapien vel conseyen turpeutionyer masin libero sevenion vusetion viventa augue sit amet hendrerit
                        vestibulum. Duisteyerion venenatis lacus gravida eros ut turpis interdum ornare.</p>
                    <p class="mb-30">Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu site
                        feugiat in tortor in, volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla
                        facilisi nedeuter nunc volutpa mollis sapien velet conseyer turpeutionyer masin libero sempe mollis.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-in from 9:00 AM - anytime</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Early check-in subject to availability</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-out before noon</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Express check-out</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <h6>Special check-in instructions</h6>
                            <p>Guests will receive an email 5 days before arrival with check-in instructions; front desk
                                staff will greet guests on arrival For more details, please contact the property using the
                                information on the booking confirmation.</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Pets</h6>
                            <p>Pets not allowed</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Children and extra beds</h6>
                            <p>Children are welcome Kids stay free! Children stay free when using existing bedding; children
                                may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10
                                per day.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="butn-dark mt-15 mb-30"> <a href="#"><span>Check Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Amenities</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-group"></span> </div>
                            <div class="page-list-text">
                                <p>1-2 Persons</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                            <div class="page-list-text">
                                <p>Free Wifi</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                            <div class="page-list-text">
                                <p>200 sqft room</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-breakfast"></span> </div>
                            <div class="page-list-text">
                                <p>Breakfast</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-towel"></span> </div>
                            <div class="page-list-text">
                                <p>Towels</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-swimming"></span> </div>
                            <div class="page-list-text">
                                <p>Swimming Pool</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Similiar Room -->
    {{-- <section class="rooms1 section-padding bg-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Luxury Hotel</span></div>
                    <div class="section-title">Similar Rooms</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach ($similar_rooms as $room)
                            @php
                                $images = is_array($hotel['images']) ? $hotel['images'] : json_decode($hotel['images'], true);
                                $image = $images[0] ?? null;
                            @endphp

                            <x-room.similar_room :room="$room" :image="$image" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Best Prices</span></div>
                    <div class="section-title">Extra Services</div>
                    <p>The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum
                        sceisue the aucan.</p>
                    <p>Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque
                        habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>For information</p> <a href="tel:855-100-4444">855 100 4444</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <div class="pricing-card">
                            <img src="{{ asset('assets/frontend') }}/img/pricing/1.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room cleaning</div>
                                <div class="amount">$50<span>/ month</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="{{ asset('assets/frontend') }}/img/pricing/2.jpg" alt="">
                            <div class="desc">
                                <div class="name">Drinks included</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="{{ asset('assets/frontend') }}/img/pricing/3.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room Breakfast</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="{{ asset('assets/frontend') }}/img/pricing/4.jpg" alt="">
                            <div class="desc">
                                <div class="name">Safe & Secure</div>
                                <div class="amount">$15<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ asset('assets/frontend') }}/img/slider/2.jpg" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                                class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full
                            breakfast.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> <a class="color-1" href="tel:855-100-4444">855 100
                                    4444</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box">
                                <h6>Rooms & Suites</h6>
                                <h4>Hotel Booking Form</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form action="rooms2.html" class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check in</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Check in">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check out</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Check out">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Adults</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Adults</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Children</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Check
                                                Availability</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('assets/frontend') }}/img/clients/1.png"
                                    alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('assets/frontend') }}/img/clients/2.png"
                                    alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('assets/frontend') }}/img/clients/3.png"
                                    alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('assets/frontend') }}/img/clients/4.png"
                                    alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('assets/frontend') }}/img/clients/5.png"
                                    alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('assets/frontend') }}/img/clients/6.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
