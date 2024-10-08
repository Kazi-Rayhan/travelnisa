@extends('layouts.app')
@section('title')
@endsection
@push('front_style')
@endpush
@section('content')
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            @foreach ($sliders as $key => $slider)
                <div class="text-center item bg-img" data-overlay-dark="{{ $key }}"
                    data-background="{{ Storage::url($slider->image) }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <h4>{{ $slider->title }}</h4>
                                    <h1>{{ $slider->heading }}</h1>
                                    <div class="butn-light mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>Rooms &
                                                Suites</span></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </header>
    <!-- Booking Search -->
    {{-- <div class="booking-wrapper">
        <div class="container">
            <div class="booking-inner clearfix">
                <form action="rooms.html" class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                            </div>
                        </div>
                    </div>
                    <div class="col2 c3">
                        <div class="select1_wrapper">
                            <label>Adults</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c4">
                        <div class="select1_wrapper">
                            <label>Children</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c5">
                        <div class="select1_wrapper">
                            <label>Rooms</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col3 c6">
                        <button type="submit" class="btn-form1-submit">Check Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">The Cappa Luxury Hotel</div>
                    <div class="section-title">Enjoy a Luxury Experience</div>
                    <p>Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan
                        vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec
                        id velit ac arcu posuere blane.</p>
                    <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius
                        natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant
                        morbine.</p>
                    <!-- call -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:855-100-4444">855 100 4444</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('assets/frontend') }}/img/rooms/8.jpg" alt="" class="mt-90 mb-30">
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('assets/frontend') }}/img/rooms/2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-darkblack" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">The Cappa Luxury Hotel</div>
                    <div class="section-title">Rooms & Suites</div>
                </div>
            </div>
            <div class="row">
                {{-- @foreach ($groupHotels as $groups) --}}
                {{-- @if (count($groups) >= 3) --}}
                @foreach ($hotels as $hotel)
                    @php
                        $images = is_array($hotel['images']) ? $hotel['images'] : json_decode($hotel['images'], true);
                        $image = $images[0] ?? null;
                    @endphp
                    <div class="col-md-4">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ Storage::url($image) }}" alt="">
                            </div>
                            <span class="category"><a href="#">Book</a></span>
                            <div class="con">
                                <h6><a href="{{ route('single_hotel', $hotel['id']) }}">150$ / Night</a></h6>
                                <h5><a href="{{ route('single_hotel', $hotel['id']) }}">{{ $hotel['name'] }}</a>
                                </h5>
                                <div class="line"></div>
                                {{-- @dd($hotel) --}}
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="{{ route('single_hotel', $hotel['id']) }}">Details
                                                <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @else --}}
                {{-- @foreach ($groups as $hotel)
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ $image }}" alt="">
                                    </div>
                                    <span class="category"><a href="#">Book</a></span>
                                    <div class="con">
                                        <h6><a href="{{ route('single_hotel', $hotel['id']) }}">300$ / Night</a></h6>
                                        <h5><a href="{{ route('single_hotel', $hotel['id']) }}">{{ $hotel['name'] }}</a>
                                        </h5>
                                        <div class="line"></div>
                                        <div class="row facilities">
                                            <div class="col col-md-7">
                                                <ul>
                                                    <li><i class="flaticon-bed"></i></li>
                                                    <li><i class="flaticon-bath"></i></li>
                                                    <li><i class="flaticon-breakfast"></i></li>
                                                    <li><i class="flaticon-towel"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col col-md-5 text-end">
                                                <div class="permalink"><a
                                                        href="{{ route('single_hotel', $hotel['id']) }}">Details <i
                                                            class="ti-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach --}}

            </div>
        </div>
    </section>
    <!-- Pricing -->
    {{-- <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Best Prices</span></div>
                    <div class="section-title">Extra Services</div>
                    <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac
                        quame odion elementum sceisue the aucan.</p>
                    <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete
                        ridiculus mus nellen etesque habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:855-100-4444">855 100 4444</a>
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
    </section> --}}
    <!-- Promo Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3"
        data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                            class="star-rating"></i><i class="star-rating"></i></span>
                    <div class="section-subtitle"><span>The Cappa Luxury Hotel</span></div>
                    <div class="section-title"><span>Promotional Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="https://youtu.be/7BGNAGahig8">
                        <div class="vid-butn">
                            <span class="icon">
                                <i class="ti-control-play"></i>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Facilties -->
    @if ($facilities->count() > 0)
        <section class="facilties section-padding bg-darkblack">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-subtitle">Our Services</div>
                        <div class="section-title">Hotel Facilities</div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($facilities as $facility)
                        <div class="col-md-4">
                            <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                                <span>{!! $facility->icon !!}</span>
                                <h5>{{ $facility->heading }}</h5>
                                <p>{{ $facility->description }}</p>
                                <div class="facility-shape"> <span>{!! $facility->icon !!}</span> </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('assets/frontend') }}/img/quot.png"
                                            alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the
                                        lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at
                                        finibus viverra neca the sene on satien the miss drana inc fermen norttito sit
                                        space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('assets/frontend') }}/img/team/4.jpg"
                                                alt="">
                                        </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Emily Brown</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('assets/frontend') }}/img/quot.png"
                                            alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the
                                        lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at
                                        finibus viverra neca the sene on satien the miss drana inc fermen norttito sit
                                        space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('assets/frontend') }}/img/team/1.jpg"
                                                alt="">
                                        </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Nolan White</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="{{ asset('assets/frontend') }}/img/quot.png"
                                            alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the
                                        lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at
                                        finibus viverra neca the sene on satien the miss drana inc fermen norttito sit
                                        space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('assets/frontend') }}/img/team/5.jpg"
                                                alt="">
                                        </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i><i
                                                    class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Olivia Martin</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="#"><img src="{{ asset('assets/frontend') }}/img/restaurant/1.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>The Restaurant</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-darkblack p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Spa Center</h4>
                            <p>Spa center inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="#"><img src="{{ asset('assets/frontend') }}/img/spa/3.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="#"><img src="{{ asset('assets/frontend') }}/img/spa/2.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Modern</h6>
                            </div>
                            <h4>Fitness Center</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-darkblack p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>The Health Club & Pool</h4>
                            <p>The health club & pool at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="#"><img src="{{ asset('assets/frontend') }}/img/spa/1.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News -->
    <section class="news section-padding bg-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Hotel Blog</span></div>
                    <div class="section-title">Our News</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/frontend') }}/img/news/1.jpg"
                                    alt="">
                                <div class="date">
                                    <a href="#"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Restaurant</a>
                                </span>
                                <h5><a href="#">Historic restaurant renovated</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/frontend') }}/img/news/2.jpg"
                                    alt="">
                                <div class="date">
                                    <a href="#"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Spa</a>
                                </span>
                                <h5><a href="#">Benefits of Spa Treatments</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/frontend') }}/img/news/3.jpg"
                                    alt="">
                                <div class="date">
                                    <a href="#"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Bathrooms</a>
                                </span>
                                <h5><a href="#">Hotel Bathroom Collections</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/frontend') }}/img/news/4.jpg"
                                    alt="">
                                <div class="date">
                                    <a href="#"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <span class="category">
                                    <a href="#">Health</a>
                                </span>
                                <h5><a href="#">Weight Loss with Fitness Health Club</a></h5>
                            </div>
                        </div>

                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/frontend') }}/img/news/6.jpg"
                                    alt="">
                                <div class="date">
                                    <a href="#"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Design</a>
                                </span>
                                <h5><a href="#">Retro Lighting Design in The Hotels</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/frontend') }}/img/news/5.jpg"
                                    alt="">
                                <div class="date">
                                    <a href="#"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Health</a>
                                </span>
                                <h5><a href="#">Benefits of Swimming for Your Health</a></h5>
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
            data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}" data-overlay-dark="2">
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
@push('front_script')
@endpush
