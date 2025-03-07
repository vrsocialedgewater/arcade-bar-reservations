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
    {{-- Google font --}}
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&amp;family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&amp;family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700;9..40,800&amp;family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
    <link rel="icon" href="/assets/svg/landing-icons.svg">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css">
    {{-- Bootstrap css --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    {{-- App css --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flatpickr/flatpickr.min.css">
    {{-- Responsive css --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/owlcarousel.css">
    @yield('styles')
    @livewireStyles
</head>
<body class="landing-page">
{{-- tap on top starts --}}
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
{{-- tap on tap ends --}}
{{-- page-wrapper Start --}}
<div>
    {{-- Page Body Start --}}
    <header class="landing-header">
        <div class="custom-container">
            <div class="row">
                <div class="col-12 p-0">
                    <nav class="navbar navbar-light p-0" id="navbar-example2">
                        <livewire:booking.navigate/>

                        <h3 class="mb-0 sub-title text-white d-none d-md-inline">Virtual Reality Social Reservation System</h3>
                        <div>
                            <a class="logo" href="/">
                                <img class="img-fluid for-light" style="width: 100px" src="/assets/images/logo/logo_light.png" alt="looginpage">
                                <img class="img-fluid for-dark" style="width: 100px" src="/assets/images/logo/logo_dark.png" alt="looginpage">
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- header end --}}
    {{-- landing home start --}}
    @yield('container')
    {{-- landing home end  --}}



    {{--footer start --}}
    <footer class="footer-bg">
        <div class="container-fluid">
            <div class="sub-footer row g-md-2 g-3 pb-2 pt-2">
                <div class="col-md-12">
                    <div class="left-subfooter">
                        <img class="img-fluid" src="/assets/images/logo/logo_light.png" alt="logo">
                        <p class="mb-0 float-end">Copyright {{ date("Y") }} © <a href="https://virtualrealitysocial.com/" target="_blank" class="text-white">Virtual Reality Social</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
{{-- latest jquery --}}
<script src="/assets/js/jquery-3.5.1.min.js"></script>
{{-- Bootstrap js --}}
<script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
{{-- feather icon js --}}
<script src="/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
{{-- Plugins JS start --}}
<script src="/assets/js/tooltip-init.js"></script>
<script src="/assets/js/animation/wow/wow.min.js"></script>
<script src="/assets/js/landing_sticky.js"></script>
<script src="/assets/js/landing.js"></script>
<script src="/assets/js/jarallax_libs/libs.min.js"></script>
<script src="/assets/js/slick/slick.min.js"></script>
<script src="/assets/js/slick/slick.js"></script>
<script src="/assets/js/landing-slick.js"></script>

<script src="../assets/js/flat-pickr/flatpickr.js"></script>
<script src="../assets/js/flat-pickr/custom-flatpickr.js"></script>
{{-- Plugins JS Ends --}}
<script src="/assets/js/owlcarousel/owl.carousel.js"></script>
<script src="/assets/js/owlcarousel/owl-custom.js"></script>
@yield('scripts')
@livewireScripts
</body>
</html>
