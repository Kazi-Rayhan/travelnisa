@extends('layouts.app')
@section('title')
    Faqs
@endsection
@push('front_style')
@endpush
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('assets/frontend') }}/img/slider/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>F.A.Qs</h5>
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Faqs -->
    @if ($faqs->count() > 0)
        <section class="section-padding bg-darkblack">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="accordion-box clearfix">
                            @foreach ($faqs as $faq)
                                <li class="accordion block">
                                    <div class="acc-btn">{{ $faq->title }}</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">{{ $faq->body }}</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
@push('front_script')
@endpush
