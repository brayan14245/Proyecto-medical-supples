<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Medical Supplies - Equipos y Productos Médicos')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')
</head>
<body>
    @yield('content')

    @stack('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
