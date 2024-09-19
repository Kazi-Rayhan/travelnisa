@extends('layouts.app')

@section('content')
    <section class="contact section-padding">
        <div class="container">

            <div class="row mb-90">
                <div class="col-md-6 mb-30 offset-md-1 mx-auto mt-5">
                    <h1 class="text-center">Reset Password</h1>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row">
                            <div class="col-md-12 form-group mt-4">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                    name="email" placeholder="Enter Email" value="{{ $email ?? old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mt-4">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                                    name="password" placeholder="Enter Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mt-4">
                                <input id="password-confirm" type="password" placeholder="Retype Password" class=""
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="butn-dark2">
                                    <span>Reset Password</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
