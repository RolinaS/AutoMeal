<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

{{-- Header --}}
<header>
    <nav>
        <ul>
            <li><a href="{{ route('meal.index') }}">Meal</a></li>
            <li><a href="{{ route('training.index') }}">Training</a></li>
            <li><a href="{{ route('appraisal.index') }}">Appraisal</a></li>
        </ul>
    </nav>
</header>

{{-- Main Content --}}
<main>
    @yield('content')
</main>

{{-- Footer --}}
<footer>
    <p>&copy; {{ date('Y') }} - My Application. All rights reserved.</p>
</footer>

</body>
</html>
