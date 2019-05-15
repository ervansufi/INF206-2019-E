<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Benefish | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>


</html>
