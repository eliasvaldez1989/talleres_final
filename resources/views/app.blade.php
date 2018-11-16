<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('admin.partials.head')

    <title>@yield('title')</title>

    @yield('head')

</head>

<body>

    <div class="">

        @include('admin.partials.header')

        @yield('container')

    </div>

    @include('admin.partials.footer')

    @include('admin.partials.scripts')

    @yield('scripts')

</body>

</html>
