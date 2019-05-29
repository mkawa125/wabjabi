<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 5/27/19
 * Time: 8:47 AM
 */
?>

        <!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Wabjabi - home</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('template-styles/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('template-styles/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{--toas notification--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
@include('home.partials.header')
@include('home.partials.banner')
@include('home.partials.about-us')
@include('home.partials.activities')
@include('home.partials.projects')
@include('home.partials.why-wabjabi')
@include('home.partials.team')
@include('home.partials.contact-us')
@include('home.partials.footer')
<!-- End footer Area -->

<script src="{{ asset('template-styles/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('template-styles/js/vendor/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('template-styles/js/easing.min.js') }}"></script>
<script src="{{ asset('template-styles/js/hoverIntent.js') }}"></script>
<script src="{{ asset('template-styles/js/superfish.min.js') }}"></script>
<script src="{{ asset('template-styles/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('template-styles/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template-styles/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template-styles/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('template-styles/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('template-styles/js/parallax.min.js') }}"></script>
<script src="{{ asset('template-styles/js/waypoints.min.js') }}"></script>
<script src="{{ asset('template-styles/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('template-styles/js/mail-script.js') }}"></script>
<script src="{{ asset('template-styles/js/main.js') }}"></script>
</body>
</html>
