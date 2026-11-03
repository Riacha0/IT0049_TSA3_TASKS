@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <section class="hero">
        <p class="eyebrow">Account Information</p>
        <h1>User Profile</h1>
        <p class="subtitle">
            Information about the registered user of the Tasks for Today system.
        </p>

        @if ($user)
            <div class="info-grid">
                <div class="info-box">
                    <span>Username</span>
                    <strong>{{ $user->username }}</strong>
                </div>

                <div class="info-box">
                    <span>Full Name</span>
                    <strong>{{ $user->full_name }}</strong>
                </div>

                <div class="info-box">
                    <span>Email Address</span>
                    <strong>{{ $user->email }}</strong>
                </div>

                <div class="info-box">
                    <span>Account ID</span>
                    <strong>#{{ $user->id }}</strong>
                </div>
            </div>
        @else
            <div class="empty-state">
                <h3>No user record was found.</h3>
            </div>
        @endif
    </section>
@endsection