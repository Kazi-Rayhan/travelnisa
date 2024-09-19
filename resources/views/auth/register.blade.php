@extends('layouts.app')

@section('content')
    <section class="contact section-padding">
        <div class="container">

            <div class="row mb-90">
                <div class="col-md-6 mb-30 offset-md-1 mx-auto mt-5">
                    <h1 class="text-center">Register</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- form elements -->
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
