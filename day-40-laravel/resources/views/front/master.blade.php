<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('bitm')</title>
    @include('front.includes.style')
</head><!--/head-->
<body>
@include('front.includes.header')
@yield('body')
@include('front.includes.footer')
@include('front.includes.script')
</body>
</html>