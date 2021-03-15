<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sample') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
    </head>
    <body class="bg-black">
        <div style="font-family: 'Open Sans';" class="text-white antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
