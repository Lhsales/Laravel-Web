<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Admin | @yield('head-title')</title>

    @include('layout.include.head')
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layout.admin.include.header')
    @include('layout.include.toast')

    @yield('content')

    @include('layout.admin.include.footer')
    @include('layout.include.scripts')
    @yield('custom-script')
</body>
</html>