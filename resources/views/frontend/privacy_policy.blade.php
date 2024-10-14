@extends('layouts.app')
@section('title')
    Privacy Policy
@endsection
@push('front_style')
@endpush
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
        data-background="{{ asset('assets/frontend/img/slider/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-12">
                    <p>{!! $privacy_policy->description ?? 'No privacy policy available.' !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
