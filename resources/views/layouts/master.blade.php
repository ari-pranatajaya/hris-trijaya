<!DOCTYPE html>
<!--
Nama Perusahaan: PT. Trijaya Pratama futures
Website: https://www.tpfx.co.id
Phone: 08111999487
Email: aripranatajaya@gmail.com
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>HRIS - PT. Trijaya Pratama Futures</title>

    <!-- color-modes:js -->
    <script src="{{ asset('') }}assets/js/color-modes.js"></script>
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    @stack('cssLibrary')

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/fonts/feather-font/css/iconfont.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/demo2/style.css">
    @stack('css')
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('') }}assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_navbar.html -->
        <div class="horizontal-menu">
            @include('layouts.navbar-top')
            @include('layouts.navbar-bottom');
        </div>
        <!-- partial -->

        <div class="page-wrapper">

            <div class="page-content">
                {{ $slot }}
            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer border-top">
                <div class="container d-flex flex-row align-items-center justify-content-between py-3 small">
                    <p class="text-secondary mb-1 mb-md-0">Copyright © 2024 <a href="https://www.tpfx.co.id"
                            target="_blank">PT. Trijaya Pratama Futures</a>.</p>
                    <p class="text-secondary">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                            data-feather="heart"></i></p>
                </div>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('') }}assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    @stack('jsLibrary');
    
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('') }}assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/app.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    @stack('js')
    <script src="{{ asset('') }}assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

</body>

</html>
