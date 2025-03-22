<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @include('layouts.partials._head')
    @stack('css')
    {{-- @yield('styles') --}}
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.partials._navbar')
        @include('layouts.partials._sidebar')
        <div class="content-wrapper">
            @include('flash::message')
            @yield('content')
        </div>
        @include('layouts.partials._footer')
    </div>
    @include('layouts.partials._footer-script')
    @stack('scripts')
    {{-- @yield('scripts') --}}
</body>

</html>
