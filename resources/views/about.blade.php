@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="hero">
        <p class="eyebrow">About the Project</p>
        <h1>Tasks for Today Management System</h1>

        <p class="subtitle">
            This Laravel application displays today’s tasks, all scheduled tasks,
            and one user profile using database records created through migrations
            and seeders.
        </p>

        <div class="info-grid">
            <div class="info-box">
                <span>Developer</span>
                <strong>Charles Miguel Martin</strong>
            </div>

            <div class="info-box">
                <span>Framework</span>
                <strong>Laravel</strong>
            </div>

            <div class="info-box">
                <span>Activity</span>
                <strong>TSA3</strong>
            </div>

            <div class="info-box">
                <span>Theme</span>
                <strong>Beachside Productivity</strong>
            </div>
        </div>
    </section>
@endsection