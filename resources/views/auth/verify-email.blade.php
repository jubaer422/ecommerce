@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Verify Your Email Address</h2>

    @if (session('resent'))
        <div class="alert alert-success">
            A fresh verification link has been sent to your email address.
        </div>
    @endif

    <p>Before proceeding, please check your email for a verification link. If you did not receive the email, click the button below to request another.</p>

    <div class="d-grid gap-2">
        <a class="btn btn-primary" href="{{ route('verification.resend') }}">Resend Verification Link</a>
    </div>
</div>
@endsection
