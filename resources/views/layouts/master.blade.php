<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    @include('includes.head')

    <body>

        @include('includes.navigation')

        @yield('content')

        @include('includes.javascript')

    </body>
</html>
