<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Static Navigation - SB Admin</title>
    <link href="{{asset('/')}}admin/assets/css/styles.css" rel="stylesheet" />
</head>
<body>
@include('admin.includes.top-navbar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.includes.side-navbar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('body')
        </main>
        @include('admin.includes.footer')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin/assets/js/datatables-simple-demo.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script src="{{asset('/')}}admin/assets/js/scripts.js"></script>
@yield('script');
</body>
</html>

