@extends('layouts.app')

@push('front_style')
    <style>
        .preference-input {
            display: none !important;
        }

        .preference-label {
            padding: 10px 20px;
            margin-right: 10px;
            border: 2px solid #aa8453;
            border-radius: 5px;
            background-color: transparent;
            color: #aa8453;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            display: block;
            text-align: center;
            width: 100%;
        }

        .preference-input:checked+.preference-label {
            background-color: #aa8453;
            color: white;
        }

        .preference-label:hover {
            background-color: #d2a76f;
            color: white;
        }

        @media (min-width: 768px) {
            .preference-label {
                width: auto;
                display: inline-block;
            }
        }
    </style>
@endpush

@section('content')
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-30 offset-md-1 mx-auto mt-5">
                    <h1 class="text-center">Register</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mt-4">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    placeholder="Enter Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group mt-4">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required placeholder="Enter Email"
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="mb-3">Select Your Preferences:</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters text-center">
                                        <div class="col-12 col-md-12 col-lg-4  form-check mb-2">
                                            <input class="form-check-input preference-input" type="radio"
                                                name="preference" id="solo" value="solo" checked>
                                            <label class="form-check-label preference-label w-100"
                                                for="solo">Solo</label>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4  form-check mb-2">
                                            <input class="form-check-input preference-input" type="radio"
                                                name="preference" id="friends" value="friends">
                                            <label class="form-check-label preference-label w-100"
                                                for="friends">Friends</label>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4  form-check mb-2">
                                            <input class="form-check-input preference-input" type="radio"
                                                name="preference" id="family" value="family">
                                            <label class="form-check-label preference-label w-100"
                                                for="family">Family</label>
                                        </div>
                                    </div>
                                </div>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mt-4">
                                <input id="password" type="password" placeholder="Enter Password"
                                    class=" @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group mt-4">
                                <input id="password-confirm" type="password" class="" name="password_confirmation"
                                    placeholder="Retype Password" required autocomplete="new-password">
                            </div>

                            <div class="col-md-12 mt-4">
                                <button type="submit" class="butn-dark2">
                                    <span>Register</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
