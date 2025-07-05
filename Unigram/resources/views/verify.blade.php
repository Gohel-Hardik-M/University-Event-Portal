<!-- resources/views/auth/verify.blade.php -->

@extends('layouts.guest') <!-- Optional, use if you have a layout file -->

@section('content')

    <div class="container">
        <h2>OTP Verification</h2>

        @if(session('email'))
            <p>A one-time password (OTP) has been sent to {{ session('email') }}. Please enter the OTP below to activate your account.</p>
        @else
            <p>Invalid request. Please try registering again.</p>
        @endif

        <form action="{{ URL::to('/') }}/verify-otp" method="POST">
            @csrf

            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email" value="{{ session('email') }}" required class="form-control">
            </div>

            <div class="form-group">
                <input type="text" name="otp" placeholder="Enter OTP" required class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Verify OTP</button>
        </form>
    </div>


    <style>
        /* General container styling */
.container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

/* Heading */
h2 {
    text-align: center;
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
}

/* Instructions text */
.container p {
    text-align: center;
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
}

/* Form input fields */
input[type="email"], input[type="text"], input[type="password"], input[type="tel"], input[type="date"] {
    width: 100%;
    padding: 12px 16px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #f9f9f9;
}

/* Input focus effect */
input[type="email"]:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="tel"]:focus, input[type="date"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Button styling */
button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Button hover effect */
button:hover {
    background-color: #0056b3;
}

/* Form wrapper with some space and alignment */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Error messages */
.alert {
    color: red;
    font-size: 14px;
    text-align: center;
    margin-top: 10px;
}

/* Styling for divider or any additional content */
.divider {
    margin-top: 20px;
    border-top: 1px solid #ddd;
    width: 100%;
    text-align: center;
    font-size: 16px;
}

.divider a {
    color: #007bff;
    text-decoration: none;
}

.divider a:hover {
    text-decoration: underline;
}

    </style>
@endsection
