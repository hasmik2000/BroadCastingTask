<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>BroadCasting  Example</title>
</head>
<body>
    @yield('content')

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>