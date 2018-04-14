<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    @include('includes.head')

    <body>
        <div class="tile" id="vue-app">
            <div class="column">
                <example></example>
            </div>
        </div>

        <script src="{{ mix('js/vue.js') }}"></script>
    </body>
</html>
