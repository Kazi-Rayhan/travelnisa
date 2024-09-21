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

/* Modal Custom Design */
.custom-modal {
    background-color: #f5f5f5; /* Light background for the modal */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.modal-header {
    background-color: #343a40; /* Dark header background */
    color: white; /* White text */
    border-bottom: none; /* No border */
    border-radius: 10px 10px 0 0; /* Rounded top corners */
}

.modal-footer {
    border-top: none; /* No border */
}

.modal-body {
    padding: 2rem; /* Extra padding for spacing */
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Centering modal content */
.modal-content {
    max-width: 500px; /* Limit the width of the modal */
    margin: auto; /* Auto margins to ensure centering */
}

.btn-primary {
    background-color: #aa8453;
    border-color: #aa8453;
}

.btn-primary:hover {
    background-color: #916a3f;
    border-color: #916a3f;
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
                                    <div class="max-w-md mx-auto p-6 bg-card rounded-lg shadow-md">
                                        <div class="col-12 d-flex justify-content-center align-items-center position-relative">
                                            <div class="profile-image-container position-relative">
                                                <img src="{{ asset('uploads/user/default.jpg') }}" alt="User Profile Picture" class="rounded-full mb-2 profile_image" />

                                                <!-- Trigger modal with the edit icon -->
                                                <button type="button" class="edit-icon position-absolute bottom-0 end-0" data-bs-toggle="modal" data-bs-target="#imageUploadModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Modal for image upload -->
                                        <div class="modal fade" id="imageUploadModal" tabindex="-1" aria-labelledby="imageUploadModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content custom-modal">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imageUploadModalLabel">Upload New Profile Picture</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="profileImage" class="form-label">Choose an image</label>
                                                                <input class="form-control" type="file" id="profileImage" accept="image/*">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <input name="new_password" type="password" placeholder="Enter New Password *"
                                            class="@error('new_password')
                                            is-invalid
                                            @enderror">
                                        @error('new_password')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
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
