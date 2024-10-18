@extends('layouts.app')
@section('title')
    Contact
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
                    <h5>Get in Touch</h5>
                    <h1>contact us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding bg-darkblack">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>{{ Settings::setting('site_name') }}</h3>
                    <p>{{ Settings::setting('description') }}</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:{{ Settings::setting('phone') }}">{{ Settings::setting('phone') }}</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:{{ Settings::setting('email') }}">{{ Settings::setting('email') }}</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> {{ Settings::setting('address') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in Touch</h3>
                    <form action="{{ route('contact_store') }}" method="POST">
                        @csrf
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your
                                    message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="f_name" type="text" placeholder="Your First Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="l_name" type="text" placeholder="Your Last Name *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
