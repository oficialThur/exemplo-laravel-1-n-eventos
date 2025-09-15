<!DOCTYPE html>
<html>
<head>
    <title>Event App</title>
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <header>
        <div class="navbar">
            <span class="logo">Event App</span>
            <nav>
                <a href="/organizations" class="{{ request()->is('organizations*') ? 'active' : '' }}">Organizations</a>
                <a href="/events" class="{{ request()->is('events*') ? 'active' : '' }}">Events</a>
            </nav>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
