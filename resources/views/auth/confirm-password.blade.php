@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Confirm Your Password</h2>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password Input -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required>

            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Confirm Password</button>
        </div>
    </form>

    <div class="mt-3 text-center">
        <a href="{{ route('login') }}">Remembered your password? Login</a>
    </div>
</div>
@endsection
