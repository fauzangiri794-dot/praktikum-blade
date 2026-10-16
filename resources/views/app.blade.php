<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Laravel')</title>
    <style>
        .alert { padding: 10px; margin: 10px 0; border: 1px solid; }
        .alert-sukses { background: #d4edda; border-color: #28a745; }
        .alert-bahaya { background: #f8d7da; border-color: #dc3545; }
        .alert-info { background: #d1ecf1; border-color: #17a2b8; }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        &copy; {{ date('Y') }} Praktikum Laravel
    </footer>

    @stack('scripts')
</body>
</html>