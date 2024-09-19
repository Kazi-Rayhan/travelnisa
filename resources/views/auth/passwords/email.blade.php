@extends('layouts.app')

@section('content')
    <section class="contact section-padding">
        <div class="container">

            <div class="row mb-90">
                <div class="col-md-6 mb-30 offset-md-1 mx-auto mt-5">
                    <h1 class="text-center">Reset Password</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-12 form-group mt-4">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                    placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="butn-dark2">
                                    <span>Send Password Reset Link</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
