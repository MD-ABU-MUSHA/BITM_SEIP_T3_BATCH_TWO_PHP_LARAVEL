<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('front.includes.meta')
    <title>Urdan - @yield('title')</title>
    @include('front.includes.style')
</head>




<body>
<div class="main-wrapper main-wrapper-2">
   @include('front.includes.header')
    @yield('body')
    @include('front.includes.footer')
</div>
    @include('front.includes.script')
</body>

</html>