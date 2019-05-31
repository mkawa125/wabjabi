<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 5/27/19
 * Time: 10:06 AM
 */
?>
<!-- start banner Area -->
<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset('images/house3.jpg') }}">
    <div class="overlay-bg overlay"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content  col-md-12">
                <h1 class="text-uppercase">
                    Build Your Dream house with <span style="color: firebrick">wab</span><span style="color: #27A7AA">jabi</span>
                </h1>
                <div class="col-md-5" style="margin: 25px auto">
                    <p class="text-white">
                        When it comes time for change modern house is priority <br> Wabjabi is the real estate company based in Tanzania committed to build your home that match.
                    </p>
                </div>
                <a href="#contact" class="primary-btn header-btn text-uppercase">send us message <i class="fa fa-arrow-down"></i></a>
            </div>
        </div>
    </div>
</section>

<script>
    // Wrap every letter in a span
    $('.text-white').each(function(){
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });

    anime.timeline({loop: false})
        .add({
            targets: '.text-white .letter',
            opacity: [0,1],
            easing: "easeInOutQuad",
            duration: 10,
            delay: function(el, i) {
                return 20 * (i+1)
            }
    });
</script>
<!-- End banner Area -->
