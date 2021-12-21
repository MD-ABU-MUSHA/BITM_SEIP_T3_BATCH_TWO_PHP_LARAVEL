<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>@yield('bitm')</title>
    @include('front.includes.style')


</head>
<body>
@include('front.includes.header')
@yield('body')
@include('front.includes.footer')
@include('front.includes.script')
</body>
</html>












