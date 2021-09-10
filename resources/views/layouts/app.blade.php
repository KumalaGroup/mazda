<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mazda</title>
    <meta content="Dealer Mazda Kumala dibawah naungan PT.Kumala Celebes Motor merupakan autorized dealer 3 S
    (sales , Service dan Sparepart ) .
    Pada awalnya berdiri pada September 2007 di Jl. Bulusaraung Makassar dengan 1 S hingga resmi
    menjadi Autorize Dealer 3 S pada Januari 2010 yang beralamat di JL.A.P Pettarani Kav E1 No.5
    Kota makassar hingga sekarang. Dealer Resmi Mazda melayani penjualan Mobil Mazda Semua Tipe,
    pelayanan suku cadang dan bengkel Resmi Mazda di Makassar, Yang melayani Wilayah Indonesia
    Timur." name="description">
    <meta content="mazdakumala,kumalagroup,mazda,mobilmazda" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('temp/assets/img/logo-mzda.png')}}" rel="icon">
    <link href="{{asset('temp/assets/img/logo-mzda.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('temp/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('temp/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('temp/assets/css/style2.css')}}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: MyBiz - v2.2.1
  * Template URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .floating-btn {
            width: 60px;
            height: 60px;
            background: #25D366;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 50%;
            color: #ffffff;
            font-size: 40px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25);
            position: fixed;
            right: 10px;
            bottom: 65px;
            z-index: 10000;
            transition: background 0.25s;
        }
    </style>
    @yield('style')
</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('section.header')

    <main id="main">

        @yield('content')

    </main><!-- End #main -->
    {{-- @include('form.testDrive') --}}
    <!-- ======= Footer ======= -->
    @include('section.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('temp/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('temp/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('temp/assets/js/main.js')}}"></script>
    @yield('script')

</body>

</html>