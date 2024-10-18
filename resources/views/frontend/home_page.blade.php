@extends('layouts.app')
@section('title')
@endsection
@push('front_style')
    <style>
        .hotelFacilityIcon {
            width: 70px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
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

    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                @foreach ($topHotels as $topHotel)
                    @php
                        $images = is_array($topHotel['images'])
                            ? $topHotel['images']
                            : json_decode($topHotel['images'], true);

                        $firstImage = $images[0] ?? null;
                        $secondImage = $images[1] ?? null;

                        $hotelLink = route('single_hotel', $topHotel['id']);
                    @endphp
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <span>
                            @for ($i = 0; $i < substr($topHotel->hotel_class, 0, 1); $i++)
                                <i class="star-rating"></i>
                            @endfor
                        </span>

                        <div class="section-subtitle">{{ $topHotel->hotel_style }}</div>
                        <div class="section-title">{{ $topHotel->name }}</div>
                        <p style="text-align: justify">{{ \Illuminate\Support\Str::limit($topHotel->about, 500) }}</p>
                        <p style="text-align: justify">{{ \Illuminate\Support\Str::limit($topHotel->summary, 500) }}</p>
                        <!-- call -->
                        <div class="reservations">
                            <div class="icon"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p>Reservation</p> <a href="tel:{{ Settings::setting('phone') }}">{{ Settings::setting('phone') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                        <img src="{{ Storage::url($firstImage) }}" alt="{{ $topHotel->name }}" class="mt-90 mb-30">
                    </div>
                    <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                        <img src="{{ Storage::url($secondImage) }}" alt="{{ $topHotel->name }}">
                    </div>
                @endforeach
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
                @foreach ($hotels as $hotel)
                    @php
                        $images = is_array($hotel['images']) ? $hotel['images'] : json_decode($hotel['images'], true);
                        $image = $images[0] ?? null;

                        $hotelLink = route('single_hotel', $hotel['id']);
                    @endphp
                    <div class="col-md-4">
                        <div class="item">
                            <div class="position-re o-hidden"> <img style="height: 237px" src="{{ Storage::url($image) }}"
                                    alt="{{ $hotel->name }}">
                            </div>
                            {{-- <span class="category"><a href="#">Book</a></span> --}}
                            <div class="con">
                                {{-- <h6><a href="{{ $hotelLink }}">150$ / Night</a></h6> --}}
                                <h5><a href="{{ $hotelLink }}">{{ $hotel['name'] }}</a>
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
                                        <div class="permalink"><a href="{{ $hotelLink }}">Details
                                                <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

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
    @if ($hotelFacility->count() > 0)
        <section class="facilties section-padding bg-darkblack">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-subtitle">{{ __('sentence.our_services') }}</div>
                        <div class="section-title">{{ __('sentence.hotel_facilities') }}</div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($hotelFacility as $facility)
                        <div class="col-md-4">
                            <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                                <img class="hotelFacilityIcon" src="{{ Storage::url($facility->image) }}"
                                    alt="{{ $facility->image }}">
                                <h5>{{ $facility->heading ?? '' }}</h5>
                                <p>{{ $facility->description ?? '' }}</p>
                                <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
@push('front_script')
@endpush
