<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>

    <title>Quotes</title>
</head>