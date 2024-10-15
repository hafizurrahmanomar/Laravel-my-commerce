<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>My Commerce - @yield('title')</title>

    @include('website.include.style')

</head>

<body>

    @include('website.include.header')

    @yield('body')

    @include('website.include.footer')

    @include('website.include.script')

</body>


</html>
