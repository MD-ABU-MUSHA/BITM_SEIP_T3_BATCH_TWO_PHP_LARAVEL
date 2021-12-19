<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"/>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('Bitm')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('count')}}" class="nav-link">Count</a></li>
            {{--<li><a href="{{ route('about-us') }}" class="nav-link">About</a></li>--}}
            <li><a href="{{ route('odd-even') }}" class="nav-link">Odd-Even</a></li>
            <li><a href="{{route('registration')}}" class="nav-link">Registration</a></li>
            <li><a href="{{route('prime')}}" class="nav-link">Prime</a></li>
            <li><a href="" class="nav-link">Login</a></li>
        </ul>
    </div>
</nav>