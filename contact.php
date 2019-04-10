<?php
include "database.php";
?>
 
<html lang="en">
<head>

     <?php
        include "head.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>

</head>
<body>

<div id="layout">

     <?php
        include "nav.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


    <div class="section-title-02">
        <div class="bg_parallax image_05_parallax"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Contact</h1>
                </div>
                <div class="col-md-8">
                    <div class="crumbs">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li>/</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-central">

        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>


        <!--<div id="map"></div>-->


        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <aside>
                                <h4>The Office</h4>
                                <address>
                                    <strong>Corners Of India</strong><br>
                                    <!--<i class="fa fa-map-marker"></i><strong>Address: </strong> fa795 Folsom Ave, Suite-->
                                    <!--600<br>-->
                                    <!--<i class="fa fa-plane"></i><strong>City: </strong>San Francisco, CA 94107<br>-->
                                    <i class="fa fa-phone"></i> (+91) 999 999 999<br>
                                    <i class="fa fa-phone"></i> (+91) 888 888 888
                                </address>
                                <address>
                                    <strong>Corners Of India</strong><br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong>angelansu1975.@gmail.com<br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong>lolz28773@gmail.com
                                </address>
                            </aside>
                        </div>

                        <div class="col-md-8">
                            <h3>Contact Form</h3>
                            <form id="contact_form" class="form-theme" action="#">
                                <input type="text" placeholder="Name" name="Name" required="">
                                <input type="email" placeholder="Email" name="Email" required="">
                                <input type="tel" placeholder="Phone" name="Phone" required="">
                                <textarea placeholder="Your Message" name="message" required=""></textarea>
                                <input type="submit" name="Submit" value="Send Message" class="btn btn-primary">
                            </form>
                            <div id="result">
                                <div id="contact_error" hidden class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Contact email was <strong>successfully</strong> sent. Our agent will contact you as soon as possible.
                                </div>
                                <div id="contact_success" hidden class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    Contact email was <strong>successfully</strong> sent. Our agent will contact you as soon as possible.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php
        include "footer.php";
        $strconn=mysqli_connect("localhost","root","","SEproject");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
    ?>


</div>


<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.1.10.4.min.js"></script>

<script src="js/nav/jquery.sticky.js" type="text/javascript"></script>

<script type="text/javascript" src="js/totop/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/accordion/accordion.js"></script>

<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

<script src="js/maps/gmap3.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>

<script src="js/carousel/carousel.js"></script>

<script src="js/filters/jquery.isotope.js" type="text/javascript"></script>

<script src="js/twitter/jquery.tweet.js"></script>

<script src="js/flickr/jflickrfeed.min.js"></script>

<script type="text/javascript" src="js/theme-options/theme-options.js"></script>
<script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>

<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script>

<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("#contact_form").submit(function (e) {
            e.preventDefault();
            var $form = $(this);
            $form.addClass('disable-click');
            var formDataSerialized = $(this).serialize();
            console.log(formDataSerialized);
            $.post("contact-email-send.php", formDataSerialized, function (data) {
                $form.removeClass('disable-click');
                if (data == 'success') {
                    $('#contact_success').fadeIn();
                    setTimeout(function () {
                        $('#contact_success').fadeOut("slow");
                    }, 3000);
                } else {
                    $('#contact_error').fadeIn();
                    setTimeout(function () {
                        $('#contact_error').fadeOut("slow");
                    }, 3000);
                }
            });
        });
    });
</script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    /*
     Map Settings
     Find the Latitude and Longitude of your address:
     - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
     - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
     */

    // Map Markers
    var mapMarkers = [{
        address: "217 Summit Boulevard, Birmingham, AL 35243",
        html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/img-theme/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }, {
        address: "645 E. Shaw Avenue, Fresno, CA 93710",
        html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/img-theme/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }, {
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/img-theme/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }];

    // Map Initial Location
    var initLatitude = 38.09024;
    var initLongitude = -98.71289;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 5
    };

    $("#map").gMap(mapSettings);

    // Map Center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $("#map").gMap("centerAt", options);
    }

</script>
</body>
</html>
