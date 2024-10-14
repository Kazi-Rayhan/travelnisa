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
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <h5>The Cappa Luxury Hotels</h5>
                    <h1>Hotels</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms -->
    <section class="rooms1 section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                @php
                    $triplePairIndex = 3;
                    $doublePairIndex = 5;
                @endphp
                @foreach ($hotels as $index => $hotel)
                    @php
                        if ($index >= $doublePairIndex) {
                            $triplePairIndex += 5;
                            $doublePairIndex = $triplePairIndex + 2;
                        }

                        $images = is_array($hotel['images']) ? $hotel['images'] : json_decode($hotel['images'], true);
                        $image = $images[0] ?? null;
                    @endphp

                    <div class="col-md-{{ $index < $triplePairIndex ? '4' : '6' }}">
                        <div class="item">
                            {{-- @dd($hotel) --}}
                            <div class="position-re o-hidden"> <img src="{{ Storage::url($image) }}" alt=""> </div>
                            <span class="category"><a href="">Book</a></span>
                            <div class="con">
                                <h6><a href="{{ route('single_hotel', $hotel) }}">150$ / Night</a></h6>
                                <h5><a href="{{ route('single_hotel', $hotel) }}">{{ $hotel->name }}</a> </h5>
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
                                        <div class="permalink"><a href="{{ route('single_hotel', $hotel) }}">Details <i
                                                    class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Facilties -->
    <section class="facilties section-padding bg-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                @foreach ($hotelFacility as $facility)
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            {{-- <span class="flaticon-world"></span> --}}
                            <img class="hotelFacilityIcon" src="{{ Storage::url($facility->image) }}" alt="{{ $facility->image }}">
                            <h5>{{  $facility->heading ?? '' }}</h5>
                            <p>{{  $facility->description ?? '' }}</p>
                            <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
