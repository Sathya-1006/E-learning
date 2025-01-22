<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="sidebar">
        <h2>Edunet</h2>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/session-details">Session Details</a></li>
            <li><a href="/reset-password">Reset Password</a></li>
        </ul>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
