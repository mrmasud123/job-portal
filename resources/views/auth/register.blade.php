@extends('layouts.auth_master_layout')

@section('content')
    <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" class="form-control" id="username" name="username" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
                <a href="{{ route('login') }}" type="submit" class="btn btn-warning w-100">Login</a>
            </form>
@endsection