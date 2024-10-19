@extends('layouts.app')
@section('title')
    About
@endsection
@push('front_style')
@endpush
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>{{ Settings::setting('site_name') }}</h5>
                    <h1>{{ $about->display_name ?? '' }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding bg-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">{{ Settings::setting('site_name') }}</div>
                    <h1>{{ $about->page_title ?? '' }}</h1>
                    <p>{!! $about->description ?? 'No description available.' !!}</p>

                </div>
                @if (!empty($about->images))
                    @php
                        $images = $about->images;
                    @endphp
                    @if (is_array($images) && count($images) > 0)
                        @foreach ($images as $index => $image)
                            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                                <img src="{{ Storage::url($image) }}" alt="Image"
                                    class="@if ($index == 0) mt-90 mb-30 @endif">
                            </div>
                        @endforeach
                    @endif
                @endif

            </div>
        </div>
    </section>

@endsection
