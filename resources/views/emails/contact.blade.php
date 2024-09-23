@extends('layouts.email')
@section('email')
    <!-- Email Header -->
    <div class="email-header">
        Contact Form Submission
    </div>
    <!-- Email Body -->
    <div class="email-body">
        <h1>New Contact Message</h1>
        <p><strong>First Name:</strong> {{ $data['f_name'] }}</p>
        <p><strong>Last Name:</strong> {{ $data['l_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>

        <!-- Message Box -->
        <div class="message-box">
            <strong>Message:</strong>
            <p>{{ $data['message'] }}</p>
        </div>

        <p>Thank you for reaching out. We will get back to you soon.</p>
    </div>
@endsection
