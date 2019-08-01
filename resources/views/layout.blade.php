<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App</title>

    <!-- Scripts -->
    <stript src="{{ asset('js/app.js') }}"></stript>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        form{
            display: inline;
        }

        form button{
            background: transparent;
            padding: 0px;
            border: 0px;
        }

        form button i{
            color:blue;
        }

    </style>

</head>
<body>
    @yield('content')
</body>
</html>
