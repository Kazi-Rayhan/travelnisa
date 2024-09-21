@extends('layouts.app')
@section('title')
    Profile
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

        .profile-image-container {
            width: 10rem;
            height: 10rem;
            position: relative;
        }

        .profile_image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .edit-icon {
            background-color: #f8f9fa;
            border-radius: 50%;
            padding: 5px;
            border: none;
            font-size: 16px;
            color: #6c757d;
            cursor: pointer;
        }

        .edit-icon:hover {
            color: #343a40;
        }

        .position-absolute {
            position: absolute;
        }

        .bottom-0 {
            bottom: 0;
        }

        .end-0 {
            right: 0;
        }

        .custom-modal {
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            background-color: #343a40;
            color: white;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
        }

        .modal-footer {
            border-top: none;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            max-width: 500px;
            margin: auto;
        }

        .btn-primary {
            background-color: #aa8453;
            border-color: #aa8453;
        }

        .btn-primary:hover {
            background-color: #916a3f;
            border-color: #916a3f;
        }

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
        }

        .preference-input:checked+.preference-label {
            background-color: #aa8453;
            color: white;
        }

        .preference-label:hover {
            background-color: #d2a76f;
            color: white;
        }

        @media (max-width: 576px) {
            .form-check-label {
                font-size: 14px;
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
                                <div class="row g-2">
                                    <form method="POST" action="{{ route('user.profilePageSubmit') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="max-w-md mx-auto p-6 bg-card rounded-lg shadow-md mb-5">
                                            <div
                                                class="col-12 d-flex justify-content-center align-items-center position-relative">
                                                <div class="profile-image-container position-relative">
                                                    <img src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}"
                                                        alt="User Profile Picture"
                                                        class="rounded-full mb-2 profile_image" />
                                                    <input
                                                        class="form-control position-absolute bottom-0 end-0 @error('image') is-invalid @enderror"
                                                        type="file" id="profileImage" name="image"
                                                        onchange="previewImage(event)"
                                                        style="opacity: 0; cursor: pointer; height: 100%; width: 100%;">
                                                    <button type="button"
                                                        class="edit-icon position-absolute bottom-0 end-0"
                                                        style="background: none; border: none; cursor: pointer;"
                                                        onclick="document.getElementById('profileImage').click();">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                @error('image')
                                                    <div class="invalid-feedback d-block text-center">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 form-group mb-4">
                                                <input name="name" type="text" placeholder="Enter Your Name *"
                                                    class="@error('name')
                                                    is-invalid
                                                    @enderror"
                                                    value="{{ old('name', Auth::user()->name) }}">
                                                @error('name')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label for="" class="text-bold text-black"><strong>(You can't change
                                                        your email.)</strong></label>
                                                <input name="email" type="text" placeholder="Enter Your Email *"
                                                    class="@error('email')
                                                    is-invalid
                                                    @enderror"
                                                    value="{{ old('email', Auth::user()->email) }}" readonly>
                                                @error('email')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <label class="mb-3 text-black">Select Your Preferences:</label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="row no-gutters text-center">
                                                        <div class="col-12 col-md-12 col-lg-4  form-check mb-2">
                                                            <input class="form-check-input preference-input" type="radio"
                                                                name="preference" id="solo" value="solo"
                                                                @if (Auth::user()->preference == 'solo') checked @endif>
                                                            <label class="form-check-label preference-label w-100"
                                                                for="solo">Solo</label>
                                                        </div>
                                                        <div class="col-12 col-md-12 col-lg-4  form-check mb-2">
                                                            <input class="form-check-input preference-input" type="radio"
                                                                name="preference" id="friends" value="friends"
                                                                @if (Auth::user()->preference == 'friends') checked @endif>
                                                            <label class="form-check-label preference-label w-100"
                                                                for="friends">Friends</label>
                                                        </div>
                                                        <div class="col-12 col-md-12 col-lg-4  form-check mb-2">
                                                            <input class="form-check-input preference-input" type="radio"
                                                                name="preference" id="family" value="family"
                                                                @if (Auth::user()->preference == 'family') checked @endif>
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

                                            <div class="col-12 form-group mb-4">
                                                <input name="phone" type="text" placeholder="Enter Your Phone *"
                                                    class="@error('phone')
                                                    is-invalid
                                                    @enderror"
                                                    value="{{ old('phone', Auth::user()->phone) }}">
                                                @error('phone')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <input name="address" type="text" placeholder="Enter Your Address *"
                                                    class="@error('address')
                                                    is-invalid
                                                    @enderror"
                                                    value="{{ old('address', Auth::user()->address) }}">
                                                @error('address')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="butn-dark2"><span>Update</span></button>
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
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.profile_image').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush
