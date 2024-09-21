@extends('layouts.app')
@section('title')
    Change Password
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

        input::placeholder {
            color: #999;
            opacity: 1;
        }

        input {
            color: #000 !important;
        }
    </style>
    <style>
        /* Custom media query to ensure the sidebar doesn't block the row */
        @media (min-width: 768px) {
            #sidebarMenu {
                display: flex !important;
                flex-direction: column;
            }
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
                                <div class="row">
                                    <form method="POST" action="{{ route('user.changePasswordSubmit') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 form-group mb-4">
                                                <input name="current_password" type="password"
                                                    placeholder="Enter Current Password *"
                                                    class="@error('current_password')
                                                    is-invalid
                                                    @enderror">
                                                @error('current_password')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <input name="new_password" type="password"
                                                    placeholder="Enter New Password *"
                                                    class="@error('new_password')
                                                    is-invalid
                                                    @enderror">
                                                @error('new_password')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <input name="retype_password" type="password"
                                                    placeholder="Retype Password *"
                                                    class="@error('retype_password')
                                                    is-invalid
                                                    @enderror">
                                                @error('retype_password')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="butn-dark2"><span>Submit</span></button>
                                            </div>
                                        </div>
                                    </form>

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
