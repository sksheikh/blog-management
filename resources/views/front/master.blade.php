<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/bootstrap.min.css">
</head>
<body>
<!-- Start Navigation -->
@include('front.includes.nav')
<!-- End Navigation -->

<!--  Start All Blog-->
@yield('body')
<!--  End All Blog-->

<!--Start Footer Section-->
@include('front.includes.footer')
<!--End Footer Section-->

<script src="{{asset('/')}}front/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

