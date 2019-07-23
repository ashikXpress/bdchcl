<!DOCTYPE html><!--[if IE 9]>
<html class="ie9"><![endif]--><!--[if !IE]><!-->
<html><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/revslider-section.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/css/revslider2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('frontend/js/jquery-2.1.1.min.js') }}"><\/script>');</script>
</head>
<body>
<div id="wrapper">
    <div id="sticky-header" class="fullwidth-menu header1" data-fixed="fixed"></div>
    <header id="header" class="fullwidth-menu header2">
        <div id="header-top">
            <div class="container clearfix">
                <div class="left-side">
                    <ul class="header-links">
                        <li><a href="{{ route('login') }}"><span
                                        class="header-links-icon icon-login"></span><span>Login</span></a></li>
                        <li><a href="{{ route('emp.login') }}"><span
                                        class="header-links-icon icon-login"></span><span>Employee Login</span></a></li>

                        <li><a href=""><span
                                        class="header-links-icon icon-login"></span><span>Member Register</span></a>
                        </li>
                    </ul>
                    <div class="user-dropdown dropdown visible-sm visible-xs"><a title="My Account"
                                                                                 class="dropdown-toggle"
                                                                                 data-toggle="dropdown"><span
                                    class="header-links-icon icon-account"></span><span
                                    class="user-text">My Account</span><span class="dropdown-arrow"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('login') }}"><span class="header-links-icon icon-login"></span><span>Login</span></a>
                            </li>
                            <li><a href="{{ route('login') }}"><span class="header-links-icon icon-login"></span><span>Employee Login</span></a>
                            </li>
                            <li><a href="{{ route('register') }}"><span
                                            class="header-links-icon icon-login"></span><span>Member Registration</span></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="right-side">
                    <div class="search-container">
                        <form action="#" class="search-form"><input type="search" name="s" class="s"
                                                                    placeholder="Search entry site here..."> <a href="#"
                                                                                                                title="Close Search"
                                                                                                                class="search-close-btn"></a>
                            <input type="submit" value="Submit" class="search-submit-btn"></form>
                    </div>
                    <a href="#" class="header-search-btn" title="Search"><span class="hidden-sm hidden-xs">Search</span></a>
                    <div class="cart-dropdown dropdown pull-right"><a title="Shopping Cart" class="dropdown-toggle"
                                                                      data-toggle="dropdown"><span
                                    class="dropdown-icon"></span><span class="badge">2</span><span
                                    class="hidden-sm hidden-xs">2 item(s)</span></a>
                        {{--<div class="dropdown-menu">--}}
                        {{--<div class="cart-dropdown-header"><span class="dropdown-icon"></span>2 item(s) - $665.00--}}
                        {{--</div>--}}
                        {{--<p class="cart-desc">2 item(s) in your cart - $658.00</p>--}}
                        {{--<div class="product clearfix"><a href="#" class="delete-btn" title="Delete Product"></a>--}}
                        {{--<figure class="product-image-container"><a href="product.html"--}}
                        {{--title="Mustard yellow ruffle dress"><img--}}
                        {{--src="images/products/product9.jpg" alt="Product image"--}}
                        {{--class="product-image"></a></figure>--}}
                        {{--<div class="product-content">--}}
                        {{--<h3 class="product-name"><a href="product.html" title="Mustard yellow ruffle dress">Mustard--}}
                        {{--yellow ruffle dress</a></h3>--}}
                        {{--<div class="product-price-container"><span class="product-price">$478.00</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product clearfix"><a href="#" class="delete-btn" title="Delete Product"></a>--}}
                        {{--<figure class="product-image-container"><a href="product.html"--}}
                        {{--title="Navy Blue Silk Pleated Shift Dress"><img--}}
                        {{--src="images/products/product2.jpg" alt="Product image"--}}
                        {{--class="product-image"></a></figure>--}}
                        {{--<div class="product-content">--}}
                        {{--<h3 class="product-name"><a href="product.html"--}}
                        {{--title="Navy Blue Silk Pleated Shift Dress">Navy Blue--}}
                        {{--Silk Pleated Shift Dress</a></h3>--}}
                        {{--<div class="product-price-container"><span class="product-old-price">$250.00</span>--}}
                        {{--<span class="product-price">$180.00</span></div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix">--}}
                        {{--<ul class="pull-left action-info-container">--}}
                        {{--<li>Shipping: <span class="first-color">$7.00</span></li>--}}
                        {{--<li>Tax: <span class="text-lowercase">free</span></li>--}}
                        {{--<li>Total: <span class="first-color">$665.00</span></li>--}}
                        {{--</ul>--}}
                        {{--<ul class="pull-right action-btn-container">--}}
                        {{--<li><a href="cart.html" class="btn btn-custom-5">Cart</a></li>--}}
                        {{--<li><a href="cart.html" class="btn btn-custom">Checkout</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="currency-dropdown dropdown"><a title="Currenct" class="dropdown-toggle"
                                                               data-toggle="dropdown"><span
                                    class="long-name">US Dollar</span><span class="short-name">USD</span><span
                                    class="dropdown-arrow"></span></a>
                    </div>
                    <div class="language-dropdown dropdown"><a title="Language" class="dropdown-toggle"
                                                               data-toggle="dropdown"><span
                                    class="long-name">English</span><span class="short-name">Eng</span><span
                                    class="dropdown-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" data-clone="sticky">
            <div class="row">
                <div class="col-sm-12 clearfix">
                    <div class="logo-container">
                        <h1 class="logo clearfix">
                            <a href="{{ route('index') }}"
                               title="Bangladesh Community Health Care"><img style="width: 50px; height: 50%;" src="{{ asset('logo.png') }}" alt="">BCHCL</a>
                        </h1></div>
                    <div class="right-side clearfix">
                        <!--=========================================================================
                        mega menu include
                        ==========================================================================-->
                        <nav id="main-nav" role="navigation">
                            <div id="responsive-nav"><a id="responsive-btn" href="#"><span
                                            class="responsive-btn-icon"><span class="responsive-btn-block"></span> <span
                                                class="responsive-btn-block"></span> <span
                                                class="responsive-btn-block last"></span></span> <span
                                            class="responsive-btn-text">Menu</span></a>
                                <div id="responsive-menu-container"></div>
                            </div>
                            <ul class="menu clearfix">
                                <li><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class=""><a href="">About Us</a>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Board of Members</a></li>
                                        <li><a href="#">Managing Committee</a></li>
                                        <li><a href="#">Vision</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-container"><a href="#">Products</a>

                                </li>
                                <li><a href="blog.html">Events</a>
                                    <ul>
                                        <li><a href="">Recent Activity</a></li>
                                        <li><a href="">Gallery</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="#">Corporate Service</a>
                                    <ul>
                                        <li><a href="">Corporate Company</a></li>
                                        <li><a href="">Medical List</a></li>
                                        <li><a href="">Health Card</a></li>
                                        <li><a href="">Ayurvedic Medicine</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <!--=========================================================================
                           mega menu include
                           ==========================================================================-->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=========================================================================
                            mega menu include
    ==========================================================================-->
@yield('content')
<!--=========================================================================
                       mega menu include
     ==========================================================================-->
    <footer id="footer">
        {{--<div id="footer-top">--}}
            {{--<div id="footer-top-map"></div>--}}
        {{--</div>--}}
        <div id="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 widget"><h4>My Account</h4>
                        <ul class="links">
                            <li><a href="#" title="My account">My account</a></li>
                            <li><a href="#" title="Personal information">Personal information</a></li>
                            <li><a href="#" title="Addresses">Addresses</a></li>
                            <li><a href="#" title="Discount">Discount</a></li>
                            <li><a href="#" title="Orders history">Orders history</a></li>
                            <li><a href="#" title="Your vouchers">Your vouchers</a></li>
                            <li><a href="#" title="Safe shopping">Safe shopping</a></li>
                            <li><a href="#" title="Size guides">Size guides</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 widget"><h4>Customer Service</h4>
                        <ul class="links">
                            <li><a href="#" title="Help &amp; Contact">Help &amp; contact</a></li>
                            <li><a href="#" title="Shipping &amp; taxes">Shipping &amp; taxes</a></li>
                            <li><a href="#" title="Return policy">Return policy</a></li>
                            <li><a href="#" title="Careers">Careers</a></li>
                            <li><a href="#" title="Affiliates">Affiliates</a></li>
                            <li><a href="#" title="Legal Notice">Legal Notice</a></li>
                            <li><a href="#" title="Privacy &amp; Security">Privacy &amp; Security</a></li>
                            <li><a href="#" title="Sitemap">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 widget"><h4>From Twitter</h4>
                        <ul class="twitter-widget"></ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 clearfix"><p class="copyright-text">&copy; {{ \Illuminate\Support\Carbon::now() }} BDCHCL.
                            All Rights Reserved.</p>
                        <ul class="social-links color2 clearfix">
                            <li><a href="#" class="social-icon icon-facebook" title="Facebook"></a></li>
                            <li><a href="#" class="social-icon icon-twitter" title="Twitter"></a></li>
                            <li><a href="#" class="social-icon icon-rss" title="Rss Feed"></a></li>
                            <li><a href="#" class="social-icon icon-delicious" title="Delicious"></a></li>
                            <li><a href="#" class="social-icon icon-linkedin" title="Linkedin"></a></li>
                            <li><a href="#" class="social-icon icon-flickr" title="Flickr"></a></li>
                            <li><a href="#" class="social-icon icon-skype" title="Skype"></a></li>
                            <li><a href="#" class="social-icon icon-email" title="Email"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
{{--<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>--}}
<script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<script src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
<script src="{{ asset('frontend/js/waypoints.js') }}"></script>
<script src="{{ asset('frontend/js/waypoints-sticky.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.debouncedresize.js') }}"></script>
<script src="{{ asset('frontend/js/retina.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.placeholder.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.hoverIntent.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/twitter/jquery.tweet.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('frontend/js/maplabel.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script>
    $(function () {
        "use strict";
        jQuery("#revslider").revolution({
            delay: 8e3,
            startwidth: 1170,
            startheight: 600,
            fullWidth: "on",
            fullScreen: "off",
            hideTimerBar: "on",
            spinner: "spinner3"
        })
    });

</script>
{{--<script>!function () {--}}
{{--"use strict";--}}

{{--function e() {--}}
{{--var e = new google.maps.LatLng(51.514943, -.133689), t = {--}}
{{--center: e,--}}
{{--zoom: 17,--}}
{{--scrollwheel: !1,--}}
{{--mapTypeId: google.maps.MapTypeId.ROADMAP,--}}
{{--styles: [{--}}
{{--featureType: "landscape",--}}
{{--stylers: [{saturation: -100}, {lightness: 25}, {visibility: "on"}]--}}
{{--}, {featureType: "poi", stylers: [{saturation: -100}, {lightness: 51}]}, {--}}
{{--featureType: "road.highway",--}}
{{--stylers: [{saturation: -50}]--}}
{{--}, {--}}
{{--featureType: "road.arterial",--}}
{{--stylers: [{saturation: -20}, {lightness: 30}]--}}
{{--}, {--}}
{{--featureType: "road.local",--}}
{{--stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]--}}
{{--}, {--}}
{{--featureType: "transit",--}}
{{--stylers: [{saturation: -100}, {visibility: "simplified"}]--}}
{{--}, {--}}
{{--featureType: "water",--}}
{{--elementType: "labels",--}}
{{--stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]--}}
{{--}, {--}}
{{--featureType: "water",--}}
{{--elementType: "geometry",--}}
{{--stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]--}}
{{--}]--}}
{{--}, n = new google.maps.Map(document.getElementById("footer-top-map"), t), r = "images/pin.png";--}}
{{--new google.maps.Marker({--}}
{{--position: e,--}}
{{--map: n,--}}
{{--icon: r,--}}
{{--animation: google.maps.Animation.DROP,--}}
{{--title: "Granada"--}}
{{--});--}}
{{--var o = new google.maps.LatLng(51.514863, -.133689),--}}
{{--a = new MapLabel({text: "Granada", position: o, map: n, fontSize: 18, align: "center"});--}}
{{--a.set("position", o), a.set("fontColor", "#57add8"), a.set("fontSize", 18), a.set("strokeWeight", 0)--}}
{{--}--}}

{{--var t = jQuery("#arrivals-slider.revbanner-slider").revolution({--}}
{{--delay: 7e3,--}}
{{--fullWidth: "on",--}}
{{--startwidth: 1170,--}}
{{--startHeight: 800,--}}
{{--fullScreen: "on",--}}
{{--fullScreenAlignForce: "on",--}}
{{--hideTimerBar: "on",--}}
{{--spinner: "spinner4"--}}
{{--});--}}
{{--$("#arrivals-prev").on("click", function (e) {--}}
{{--t.revprev(), e.preventDefault()--}}
{{--}), $("#arrivals-next").on("click", function (e) {--}}
{{--t.revnext(), e.preventDefault()--}}
{{--});--}}
{{--var n = jQuery("#lookbook-slider.revbanner-slider").revolution({--}}
{{--delay: 8500,--}}
{{--fullWidth: "on",--}}
{{--startwidth: 1170,--}}
{{--startHeight: 800,--}}
{{--fullScreen: "on",--}}
{{--fullScreenAlignForce: "on",--}}
{{--hideTimerBar: "on",--}}
{{--spinner: "spinner4"--}}
{{--});--}}
{{--$("#lookbook-prev").on("click", function (e) {--}}
{{--n.revprev(), e.preventDefault()--}}
{{--}), $("#lookbook-next").on("click", function (e) {--}}
{{--n.revnext(), e.preventDefault()--}}
{{--}), document.getElementById("footer-top-map") && google.maps.event.addDomListener(window, "load", e)--}}
{{--}();</script>--}}
</body>
</html>
