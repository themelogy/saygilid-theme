<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<!-- [if IE 8]>
<html class="ie ie8" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!-- [if IE 9]>
<html class="ie ie9" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!-- [if gt IE 9]>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif] -->

<head>
    @include('partials.metadata')
</head>

<body>

    @include('partials.header.topbar')

    @include('partials.header')

    @yield('content')

    @include('contact::home')

    @include('partials.footer')

    @stack('menu.parts')

    @include('partials.scripts')

</body>

</html>
