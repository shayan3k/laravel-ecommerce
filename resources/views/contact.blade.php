@extends('layouts.app')


@section('content')
<aside id="shop-hero" class="breadcrumbs">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/cover-img-1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Contact</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span>Contact</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="shop-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="contact-wrap">
                    <h3>Get In Touch</h3>
                    <form action="/contact" method='POST'>
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 padding-bottom">
                                <input type="text" name='fname' id="fname" class="form-control bg-login" placeholder="Enter You First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name='lname' id="lname" class="form-control bg-login" placeholder="Enter You Last Name" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="email" id="email" class="form-control bg-login" placeholder="Enter You Email Address" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text" name='subject' id="subject" class="form-control bg-login"
                                    placeholder="Enter The Subject" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="10" class="form-control bg-login"
                                    placeholder="What's On Your Mind?"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Send" class="btn-login">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div id="map" class="shop-map">

                        </div>
                    </div>


                    <div class="row contact-info-wrap w-100">

                        <div class="col-12 py-5 w-100">
                            <div class="row mx-auto">
                                <div class="col-6">

                                    <p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721
                                        New York NY 10016</p>

                                </div>

                                <div class="col-6">

                                    <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355
                                            98</a></p>

                                </div>
                            </div>

                            <div class="row mx-auto">
                                <div class="col-6">

                                    <p><span><i class="icon-paperplane"></i></span> <a
                                            href="mailto:info@yoursite.com">info@yoursite.com</a></p>

                                </div>

                                <div class="col-6">

                                    <p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>

                                </div>
                            </div>
                        </div>

                    </div>






                </div>
            </div>
        </div>

    </div>

</div>
@endsection


@section('goToTop')
@include('partials.goToTop')
@endsection

@section('custom-scripts')
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>
@endsection
