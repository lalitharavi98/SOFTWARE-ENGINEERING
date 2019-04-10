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
                <div class="overlay"><a href="img/7-day-tours/t1.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t1.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t2.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t2.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t4.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t5.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t5.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t6.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t6.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t7.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t7.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t8.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t8.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/t9.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/t9.jpg" alt="" class="img-responsive">
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
                        <h2>7 Days Tour #1
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
                                    <a href="bookTour.php?tour=7 Day Tour Package 1&type=honeymoon"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01(Delhi)</h3>
                                            <p>Arrive at the New Delhi International Airport. Meet your tour representative. Get assisted transfer to your hotel. Check-in and relax. The day is free of plans that you can spend according to your wish. Opt to enjoy sightseeing, dining, shopping or other activity of your choice.</P>
                                            <p>Overnight stay at the hotel.</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (Delhi)</h3>
                                            <p>Today's plans include sightseeing in Delhi. Pay a visit to the holy Laxmi Narayan temple. Next, proceed to India Gate, a monument built to commemorate the Indian martyrs. Next, proceed to the Parliament House, Rashtrapati Bhawan, enjoying the design and layout of well-planned Lutyen's Delhi. Later, marvel at the Mughal masterpieces of Jama Masjid, India's largest mosque, the garden mausoleum of Humayun's Tomb.</p>
                                            <p>After the day spend exploring sights, return to hotel for overnight stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 (Delhi - Agra)</h3>
                                            <p>In the morning, check out of the hotel. Proceed to drive to Agra with a stopover at Sikandara. Set in the suburbs of Agra, the town is home to Akbar's mausoleum.</p>
                                            <p>Later, get back to the hotel for overnight stay</p>
                                        </li>
                                        <li>
                                            <h3>Day 04 (Agra)</h3>
                                            <p>After freshening up for the day, proceed for a sightseeing tour. Pay a visit to Taj Mahal, one of the famous monuments in the world. The Agra Fort, and Itmad-Ud-Daula's Tomb are equally impressive sights.</p>
                                            <p>Stay back at hotel for the night.</p>
                                        </li>
                                        <li>
                                            <h3>Day 05(Agra - Jaipur)</h3>
                                            <p>Start the day with packing your bags and leaving for Jaipur. Stop over at Fatehpur Sikri, the abandoned city of Mughals that has a number of interesting sights. Start with exploring the mighty Buland Darwaza, one of the largest doorways in the world. Move on to explore the amazing sights of Jama Masjid, Palace of Jodha Bai, Birbal Bhavan and more.</p>
                                        </li>
                                        <li>
                                            <h3>Day 06(Jaipur)</h3>
                                            <p>Today's plan include sightseeing in the 'Pink City' Jaipur. Enjoy a wonderful elephant ride to the beautiful Amber Fort. Listed as one of the hill forts of Rajasthan, a UNESCO World heritage Site, the fort is an incredible showcase of Rajputana architecture with Mughal touches.</p>
                                            <p>Get back to the hotel for a comfortable stay</p>
                                        </li>
                                        <li>
                                            <h3>Day 07 (Jaipur - Delhi)</h3>
                                            <p>Today journey back to New Delhi by road. Get transfer to airport/ railway station for further travels with fond memories of the Golden Triangle Circuit.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/frCLqfsjy5J2"><i
                                                            class="fa fa-check"></i>Delhi</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/Aqdw2Uh662M2"><i
                                                            class="fa fa-check"></i>Agra</a></li>

                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/ef56ErRx6oz"><i
                                                            class="fa fa-check"></i>Jaipur</a></li>
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
