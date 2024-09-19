@extends('layouts.app')
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
    </style>
@endpush

@section('content')
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <ul class="list-group">
                                <li><a href="#" class="list-group-item d-flex gap-4 side-item  align-items-center "><i
                                            class="fa-solid fa-house"></i><span>Dashboard</span></a></li>
                                <li><a href="#" class="list-group-item d-flex gap-4 side-item  align-items-center "><i
                                            class="fa-solid fa-user"></i><span>My Profile</span></a></li>
                                <li><a href="#" class="list-group-item d-flex gap-4 side-item align-items-center "><i
                                            class="fa-solid fa-key"></i><span>Change Password</span></a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-flex">
                                        @csrf
                                        <button type="submit"
                                            class="list-group-item d-flex gap-4 side-item align-items-center"
                                            style="border: none; padding: 10px; width: 100%; text-align: left;">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                            <span>Log Out</span>
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
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
