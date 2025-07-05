@extends('layouts.guest')
@section('content')

<div class="login-container">
    <div class="login-box">
        <h1>Login</h1>
        <form action="{{ URL::to('/') }}/login_action" method="POST">
            @csrf
            <input type="text" placeholder="Username or Email" name="username" >
            <input type="password" placeholder="Password"  autocomplete="new-password" name="password" >
            <button type="submit">Log In</button>
        </form>
        <div class="divider"></div>
        <p>Don't have an account? <a href="{{ URL::to('/') }}/register">Sign up</a></p>
    </div>
</div>


@endsection