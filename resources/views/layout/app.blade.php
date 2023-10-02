<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | {{ config('app.name') }}</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/frontend/dist/css/adminlte.min.css">
    {{-- <link rel="stylesheet" href="/frontend/plugins/pace-progress/themes/black/pace-theme-minimal.css"> --}}
    <link rel="stylesheet" href="/frontend/plugins/fontawesome-free/css/all.min.css">
    @isset($styles)
        {{ $styles }}
    @endisset
    @livewireStyles
</head>

<body class="hold-transition">
    {{-- <body class="hold-transition sidebar-large pace-bounce"> --}}
    <x-navbar></x-navbar>
    <x-main-sidebar></x-main-sidebar>
    {{ $slot }}
    <x-footer></x-footer>
    @yield('script')
    @livewireScripts
</body>

</html>
