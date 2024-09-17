<?php
?> <!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include("front.LayOut.head")
    @yield('title')
</head>

<body>
<header>
@include('front.LayOut.header')
</header>
@yield('item_content')
<footer>
@include('front.LayOut.footer')
</footer>
@include('front.LayOut.jsQuery')
</body>
