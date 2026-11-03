<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tasks for Today')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <nav class="navbar">
            <a href="{{ route('home') }}" class="brand">
                <span class="brand-icon">☀</span>

                <span>
                    <strong>Tasks for Today</strong>
                    <small>Beachside Productivity</small>
                </span>
            </a>

            <div class="nav-links">
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Today
                </a>

                <a href="{{ route('tasks') }}"
                   class="{{ request()->routeIs('tasks') ? 'active' : '' }}">
                    All Tasks
                </a>

                <a href="{{ route('profile') }}"
                   class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                    Profile
                </a>

                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </div>
        </nav>
    </header>

    <main class="page-container">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>Tasks for Today Management System</p>
        <span>Made by Charles Miguel Martin</span>
    </footer>
</body>
</html>