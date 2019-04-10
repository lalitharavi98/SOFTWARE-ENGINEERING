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


    <div class="section-title-detailed">

        <div id="single-carousel">
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/k1.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/k1.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/k2.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/k2.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/k3.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/k3.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/k4.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/k4.jpeg" alt="" class="img-responsive">
            </div>
        </div>


        <div class="title-detailed">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="starts">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                        </ul>
                        <h2>4 Days Tour #1
                            <span></span>
                        </h2>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="content-central">

        <div class="content_info">

            <div class="content_resalt paddings-mini tabs-detailed">
                <div class="container wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#plan" data-toggle="tab"><i class="fa fa-bicycle"></i> TOUR PLAN</a>
                                </li>
                                <li>
                                    <a href="#destinations" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                        Destinations</a>
                                </li>
                                <li class="pull-right">
                                    <a href="bookTour.php?tour=4 Day Tour Package&type=4day"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01(Arrival at Cochin Airport- Kumarakom)</h3>
                                            <p>As soon as you reach Cochin Airport, our representative will escort you to the hotel in Kumarakom. Once you are done with the check-in formalities, you can choose to relax for a while or go for the sightseeing tour. This city of Kerala is most visited for its calm environs and the cuddled up backwaters. Another famous attraction of the city is the Kumarakom Bird Sanctuary. Upon reaching, you can revel in the various adventure activities like wind sailing and water skiing.
                                            </p>
                                            <p>Overnight stay at the hotel.</p>
                                            
                                        </li>
                                        <li>
                                            <h3>Day 02( Kumarakom)</h3>
                                            <p>On this day, you will be taking a tour close to the local life of Kumarakom. After breakfast, begin your backwater cruise touching the panoramic Vembanad Lake. To add a traditional touch, you will be riding on a Kettuvallaum (houseboat). Spend some time amid nature and feel the joy of spotting colorful birds soaring high in the sky. Also, see villagers engrossed in their daily activities as your cruise around the natural warmth of Kumarakom.</p>
                                            <p>Overnight stay at Hotel</p>
                                        </li>
                                        <li>
                                            <h3>Day 03( Kumarakom to Alleppey)</h3>
                                            <p>Begin this day with a smile as you are about to make way through the water to the charming realms of Alleppey. Upon your arrival, check-in at the houseboat and unwind as you are staying for an overnight backwater cruise. Along with a warm home-like feeling, the houseboat has facilities like kitchen and modern rooms. Sit back and rejoice in the arms of nature where the paddy fields and coconut grooves smile back at you.</p>
                                            <p>
                                                Disembark at Alleppey as the cruise ends here.</p>
                                        </li>
                                        <li>
                                            <h3>Day 04 ( Alleppey to Cochin)</h3>
                                            <p>This day marks the end of your indelible journey in Alleppey. As soon as you collect your pack your bags, you will be escorted to the Cochin airport for the journey ahead</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/uT6nqWUKAZt"><i
                                                            class="fa fa-check"></i>Cochin</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/Xq5LsBXNEUE2"><i
                                                            class="fa fa-check"></i>Kumarakom</a></li>

                                                 <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/mKx9Bk5ucm92"><i
                                                            class="fa fa-check"></i>Alleppey</a></li>

                                            </ul>
                                        </div>
                                    </div>
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

</body>
</html>
