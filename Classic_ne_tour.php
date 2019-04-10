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
                <div class="overlay"><a href="img/Classic_ne_tour/image1.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image1.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image2.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image2.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image4.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image4.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image11.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image11.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image9.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image9.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image29.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image29.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image35.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image35.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image37.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image37.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image40.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image40.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image42.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image42.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image44.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image44.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image46.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image46.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/Classic_ne_tour/image49.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/Classic_ne_tour/image49.jpeg" alt="" class="img-responsive">
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
                        <h2>Classic North East Tour
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
                                    <a href="bookTour.php?tour=Classic ne Tour Package&type=CCT"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01 (GUWAHATI)</h3>
                                            <p>On arrival at Guwahati Airport/Guwahati railway Station, our representative will be there to welcome you and transfer you to your already booked hotel. The evening is free at leisure for shopping. An overnight stay in the hotel in Guwahati.</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (GUWAHATI - BOMDILA)</h3>
                                            <p>Today after an early breakfast in the morning, we will drive towards Bomdila. On arrival check in at the hotel in Bomdila for an overnight stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 (BOMDILA SIGHTSEEING - TAWANG)</h3>
                                            <p>In the morning after breakfast, we will proceed for sightseeing of Bomdila. Later, we will drive to Tawang. Enjoy an overnight stay at the hotel in Tawang.</p>
                                        </li>
                                        <li>
                                            <h3>Day 04 (TAWANG)</h3>
                                            <p>After breakfast in the morning, we will proceed for the local sightseeing tour in Tawang. We will ne visiting the Tawang Monastery, which is around 400 yrs old and is the is the 6th birth place of Dalai Lama Galden Namgyel Lhatse. The Tawang Gompa is a major attraction of the town with a commanding view of the splendid valleys beyond. Also, we will be visiting the War memorial. The evening is free at leisure for shopping. Take pleasure of an overnight stay at the hotel in Tawang.</p>
                                        </li>
                                        <li>
                                            <h3>Day 05 (TAWANG - DIRANG)</h3>
                                            <p>In the morning after breakfast, we will drive to Dirang (140Km/6hrs). On arrival, we will proceed for the local sightseeing tour in Dirang. Later, check in at the hotel for an overnight stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 06 (DIRANG SIGHTSEEING - NAMERI NATIONAL PARK)</h3>
                                            <p>After breakfast in the morning, we will proceed for the local sightseeing in Dirang and later drive straight to Nameri Eco Camp (170/6Hrs). Enjoy a night stay at the camp in Nameri.</p>
                                        </li>
                                        <li>
                                            <h3>Day 07 (NAMERI - KAZIRANGA NATIONAL PARK)</h3>
                                            <p>Today after breakfast in the morning, we will be visiting the Nameri National Park. Later, we will drive to Kaziranga (80Km/2Hrs.), the homeland of the Great India one horned Rhinoceros". On arrival, check in at your pre-booked hotel. The evening is free at leisure. An overnight stay in Kaziranga.</p>
                                        </li>
                                        <li>
                                            <h3>Day 08 (KAZIRANGA NATIONAL PARK)</h3>
                                            <p>Today early in the morning, we will leave to take pleasure of the elephant ride at the Kaziranga National Park. The actual attraction of this national park is a broad diversity of wildlife beauty. The chief riches trove of Kaziranga is vast one horned Rhinoceros, but it is also a house to other species of flora & Fauna for instance, elephants, wild Asiatic water buffalo, swamp deer, hog deer, gaur, samber, Indian Mautjac & many more. Kaziranga is also familiar as a significant Bird life watching point of bird life.</p>
                                        </li>
                                        <li>
                                            <h3>Day 09 (KAZIRANGA NATIONAL PARK - GUWAHATI)</h3>
                                            <p>In the morning, we will drive to Guwahati (220km/5Hrs.) On reaching, check in at the hotel. The evening is free at leisure for shopping. An overnight stay at the hotel in Guwahati.</p>
                                        </li>
                                        <li>
                                            <h3>Day 10 (GUWAHATI DEPARTURE)</h3>
                                            <p>We will take a temple tour in the morning on the last day of the tour. We will be visiting the Maa Kamakhya Temple, Narbagraha temple and Sukhleshwar Temple. Later, we will proceed to Guwahati Airport/ Railway Station to catch the flight or board the train for onward destination.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/brShH4MFZr62"><i
                                                            class="fa fa-check"></i>Guwahati</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/ybowotWGvXE2"><i
                                                            class="fa fa-check"></i>Bomdila</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/1hsiaJD2SMK2"><i
                                                            class="fa fa-check"></i>Tawang</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/rM87LxNAzd42"><i
                                                            class="fa fa-check"></i>Dirang</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/vatkGoJHJaR2"><i
                                                            class="fa fa-check"></i>Kaziranga</a></li>
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


    <footer id="footer" class="footer-v1">
        <div class="container">
            <div class="row">

                <!--<div class="col-md-5">
                    <div class="title-footer">
                        <h2>Save on your plans!
                            <br> <span>Select Travelia Theme And Receive</span>
                            <br> our discounts by e-mail.</h2>
                    </div>
                    <p>You can choose your favorite destination and start planning your long-awaited vacation. We offer
                        thousands of destinations and have a wide variety of hotels so that you can host and enjoy your
                        stay without problems. Book now your trip travelia.com.</p>
                </div>-->

                <div class="col-md-7">
                    <div class="row">

                        <!--<div class="col-md-3">
                            <h3>FOLLOW US</h3>
                            <ul class="social">
                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a>
                                </li>
                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a>
                                </li>
                                <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                            </ul>
                        </div>


                        <div class="col-md-5">
                            <h3>TRAVEL SPECIALISTS </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a href="#">Golf Vacations</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Disney Parks Vacations</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Vacations As Advertised</a></li>
                            </ul>
                        </div>-->


                        <div class="col-md-4">
                            <h3>CONTACT US</h3>
                            <ul class="contact_footer">
                                <li>
                                    <i class="fa fa-envelope"></i>rangikamadu.dl27@gmail.com<br>
                                    <i class="fa fa-envelope"></i>hasitharanjana@gmail.com
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>(+94) 776 029 463<br>
                                    <i class="fa fa-phone"></i>(+94) 779 891 275
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--<div class="divisor"></div>-->
                    <!--<div class="row">

                        <div class="col-md-12">
                            <h3>NEWSLETTER SIGN UP</h3>
                            <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
                                            <input class="form-control" placeholder="Your Name" name="name" type="text"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
                                            <input class="form-control" placeholder="Your  Email" name="email"
                                                   type="email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
<span class="input-group-btn">
<button class="btn btn-primary" type="submit" name="subscribe">SIGN UP</button>
</span>
                                    </div>
                                </div>
                            </form>
                            <div id="result-newsletter"></div>
                        </div>

                    </div>-->
                </div>
            </div>
        </div>

        <div class="footer-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <p>&copy; 2015 ne Travel Evoke . All Rights Reserved. 2017 - 2018</p>
                    </div>
                    <!--<div class="col-md-7">

                        <ul class="nav-footer">
                            <li><a href="main.php">HOME</a></li>
                            <li><a href="hotel-main.php">HOTELS</a></li>
                            <li><a href="flight-main.php">FLIGHTS</a></li>
                            <li><a href="car-main.php">CARS</a></li>
                            <li><a href="cruice-main.php">CRUICES</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>

    </footer>

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
