<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,700,700i,900,900i|Lato:300,400,500,600,700:Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <title>@yield('title', 'Project Details')</title>
</head>
<body style="background: #000; overflow-y: auto; color: #fff;">
    @yield('content')
</body>
</html>
