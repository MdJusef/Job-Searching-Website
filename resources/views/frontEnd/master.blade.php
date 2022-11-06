<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/jobhere/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:22:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') || JobHere</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontEndAsset') }}/images/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- All css files are included here
    ============================================ -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/bootstrap.min.css">

    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <!-- Nice select css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/nice-select.css">
    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/core.css">

    <!-- Theme shortcodes/elements style
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/shortcode/shortcodes.css">

    <!--  Theme main style
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/style.css">

    <!-- Color CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/plugins/color.css">

    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/responsive.css">

    <!-- Modernizr JS -->
    <script src="{{ asset('frontEndAsset') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!--Main Wrapper Start-->
<div class="as-mainwrapper">
    <!--Header Area Start-->
    @include('frontEnd.include.header')
    <!-- End of Header Area -->
    <!-- Search Form Start -->
@yield('content')

    <!-- End of Footer area -->
</div>
<!--End of Main Wrapper Area-->

<!--Start of Login Form-->
@include('frontEnd.include.footer')
<!--End of Login Form-->


<!-- jquery latest version
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap framework js
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/popper.min.js"></script>

<!-- Owl Carousel js
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/owl.carousel.min.js"></script>

<!-- Jquery nice select js
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/jquery.nice-select.min.js"></script>

<!-- nivo slider js
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="{{ asset('frontEndAsset') }}/lib/nivo-slider/home.js"></script>

<!-- Js plugins included in this file
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/plugins.js"></script>

<!-- Video Player JS
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/jquery.mb.YTPlayer.js"></script>

<!-- AJax Mail JS
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/ajax-mail.js"></script>

<!-- Mail Chimp JS
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/jquery.ajaxchimp.min.js"></script>

<!-- Waypoint Js
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/waypoints.min.js"></script>

<!-- Main js file contents all jQuery plugins activation
========================================================= -->
<script src="{{ asset('frontEndAsset') }}/js/main.js"></script>

<!-- Google Map js
============================================ -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM"></script>

<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(23.761226, 90.420766), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#26ae61"
                }]
            },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#dde6e8"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#26ae61"
                    },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "lightness": "-12"
                    },
                        {
                            "saturation": "0"
                        },
                        {
                            "color": "#26ae61"
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.761226, 90.420766),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>

</body>

<!-- Mirrored from htmldemo.net/jobhere/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:23:33 GMT -->
</html>

