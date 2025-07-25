<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>VRSR - Virtual Reality Social Reservation System</title>
    {{-- Google font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    {{-- ico-font --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
    {{-- Themify icon --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css">
    {{-- Flag icon --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css">
    {{-- Feather icon --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css">
    {{-- Plugins css start --}}
    {{-- Plugins css Ends --}}
    {{-- Bootstrap css --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    {{-- App css --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    {{-- Responsive css --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    @livewireStyles
</head>
<body>
{{-- login page start --}}
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div>
                        <a class="logo" href="/admin/login">
                            <img class="img-fluid for-light" style="width: 100px" src="/assets/images/logo/logo.png" alt="looginpage">
                            <img class="img-fluid for-dark" style="width: 100px" src="/assets/images/logo/logo_dark.png" alt="looginpage">
                        </a>
                    </div>
                    @yield('container')
                </div>
            </div>
        </div>
    </div>
    {{-- latest jquery --}}
    <script src="/assets/js/jquery.min.js"></script>
    {{-- Bootstrap js --}}
    <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    {{-- feather icon js --}}
    <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
    {{-- scrollbar js --}}
    {{-- Sidebar jquery --}}
    <script src="/assets/js/config.js"></script>
    {{-- Plugins JS start --}}
    {{-- Plugins JS Ends --}}
    {{-- Theme js --}}
    <script src="/assets/js/script.js"></script>
    {{-- Plugin used --}}

    @livewireScripts
</div>
</body>
</html>
