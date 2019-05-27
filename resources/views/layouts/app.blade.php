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
</head>
<body>
@include('home.partials.header')
@include('home.partials.banner')
@include('home.partials.activities')
@include('home.partials.projects')
<section class="facts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col single-fact">
                <h1 class="counter">2536</h1>
                <p>Projects Completed</p>
            </div>
            <div class="col single-fact">
                <h1 class="counter">6784</h1>
                <p>Really Happy Clients</p>
            </div>
            <div class="col single-fact">
                <h1 class="counter">435</h1>
                <p>In House Professionals</p>
            </div>
        </div>
    </div>
</section>
<!-- end fact Area -->


<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Why we are the best</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-service">
                    <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->


<!-- Start testimonial Area -->
<section class="testimonial-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('template-styles/img/user1.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.
                        </p>
                        <h4 mt-30>Mark Alviro Wiens</h4>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('template-styles/img/user2.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.
                        </p>
                        <h4 mt-30>Mark Alviro Wiens</h4>
                        <p>CEO at Google</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
