<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 5/27/19
 * Time: 12:17 PM
 */
?>
<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10" style="font-size: 25px; font-family: cursive; font-style: italic">Contact us</h1>
                    <p>If you need, Just drop us a line or find us on a google map below</p>
                </div>
            </div>
        </div>
        <form class="form-area mt-60" action="{{ route('mail.send') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div>
                        @if ($message = Session::get('message'))
                            <div class="alert alert-inv alert-inv-success alert-wth-icon alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="" style="margin: 15px 0 15px 0;  font-family: cursive">
                        <h4 style="font-family: cursive"><i class="fa fa-envelope"></i> Send us message</h4>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control" required="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            <div class="mt-10 alert-msg">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" style="background-color: #27A7AA; font-size: small">
                        Send Message <strong class="lnr lnr-arrow-right"></strong>
                    </button>
                </div>

                <div class="col-md-6">
                    <div class="col-md-10" style="margin: 15px auto;  font-family: cursive">
                        <h4 style="font-family: cursive;">Contact details and location</h4>
                    </div>

                    <div class="col-md-10 map">
                        <img src="{{ asset('images/map.png') }}" alt="" class="map-box">
                    </div>

                    <div class="col-md-10" style="margin: 15px auto; font-style: italic">
                        <label><strong style="color: firebrick">Contacts details</strong></label>
                        <p><i class="fa fa-envelope-open"></i> Address: P.O.BOX 251 DSM</p>
                        <p><i class="fa fa-map-marker"></i> Location: <strong class="text-success">Mombasa Kwa Mkolemba</strong> , DSM , Tanzania</p>
                        <p><i class="fa fa-envelope" style="font-size: smaller"></i> Email Address: <strong class="text-primary">wabjabi@gmail.com</strong></p>
                        <p><i class="fa fa-phone"></i> Mobile Phone: +255717498658, +255785948250</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- end contact Area -->
