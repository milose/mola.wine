<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('layouts.shared.globalmeta')

    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ $appCss }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('style')

</head>
<body>
    @if (session()->has('notification'))
        <div class="notification is-{{ session('notification') }}">
            <button class="delete" onclick="this.parentNode.parentNode.removeChild(this.parentNode)"></button>
            {{ session('notificationTitle') }}
        </div>
    @endif

    @include('layouts.app.navbar')

    @yield('content')

    @include('layouts.app.footer')

    <!-- Scripts -->
    <script src="{{ $appJs }}"></script>
    @stack('scripts')
</body>
</html>
