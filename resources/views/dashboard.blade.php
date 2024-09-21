@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@push('front_style')
    <style>
        .side-item {
            border-radius: 5px !important;
            margin-bottom: 4px;
            position: relative;
            left: 0px;
            transition: all .3s ease-in;
        }

        .side-item i {
            transition: .3s ease-in;
            color: #aa8453;
        }

        .side-item:hover {
            position: relative;
            left: 20px;
            color: #fff;
            background-color: #aa8453;

        }

        .side-item:hover i {
            transform: scale(1.3);
            color: #fff;
        }

        .card-item {
            background-color: #d2a76f94;
        }

        .active {
            position: relative;
            left: 20px;
            color: #fff !important;
            background-color: #aa8453 !important;
            border: none;
        }

        .active i {
            color: #fff !important;
            transform: scale(1.3);
        }
    </style>
@endpush

@section('content')
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                @include('layouts.partials.user_sidebar')
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row g-2">
                                    <div class="col-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body card-item">
                                                <p class="text-black">dsaf</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body card-item">
                                                <p class="text-black">dsaf</p>
                                            </div>
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
@endsection
@push('front_script')
@endpush
