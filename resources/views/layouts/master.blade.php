<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    @include('includes.head')

    <body>

        @yield('content')

        @include('includes.javascript')

    </body>
</html>
