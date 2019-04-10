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
                <div class="overlay"><a href="img/7-day-tours/n1.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n1.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n2.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n2.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n3.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n3.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n4.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n4.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n5.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n5.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n6.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n6.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n7" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n7" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n8.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n8.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/7-day-tours/n9.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/7-day-tours/n9.jpg" alt="" class="img-responsive">
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
                        <h2>7 Days Tour #2
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
                                    <a href="bookTour.php?tour=7 Day Tour Package 2&type=honeymoon"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 01 (Guwahati (Arrival))</h3>
                                            <p>Upon arrival in Guwahati, meet our tour representative who'll assist you in smooth transfer to the hotel for overnight stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (Guwahati - Cherrapunjee)</h3>
                                            <p>Post breakfast in the morning, pay a visit to the Kamakhya Temple, a major Hindu pilgrimage site. One of the famous Shakti peethas in the North East India, Kamakhya temple is visited by a million devotees during the Ambubashi festival. Later, hit the road to Cherranpunjee (170 kilometers). It is the region with the highest rainfall. On the way, visit the Borapani Umiam Lake. Stay overnight in Cherrapunjee.</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 (Cherrapunjee)</h3>
                                            <P>In the morning, set off to visit the Krem Mawmluh cave in Cherrapunjee. It is located around 0.5 kilometers west of Cherrapunjee, next to the small village of Mawmluh. It has five river passages with impressive magnitude. The length of the cave is more than 7 kilometers. Besides, you will also visit the waterfalls in Cherranpunjee. Stay overnight at Cherrapunjee resort.</p>
                                        </li>
                                        <li>
                                            <h3>Day 04 ( Cherrapunjee)</h3>
                                            <p>Post an early morning breakfast, enjoy a leisurely walk on the Double Decker Living Root Bridge, designed by the indigenous Khasi Tribesman. Later, enjoy a picnic lunch on the bridge and return back to the Chera Tourist Resort. In the evening, treat your eyes with the awe-inspiring views of the Khasi hills and the Bangladesh plains. Overnight stay at Cherrapunjee resort.</p>
                                        </li>
                                        <li>
                                            <h3>Day 05 (Cherrapunjee - Shillong)</h3>
                                            <p>Post breakfast, take a road journey to Shillong, also known as the 'Scotland of the East'. On the way, visit the Elephanta falls and head straight to Shillong peak to enjoy some breathtaking views. Overnight stay in Shillong..</p>
                                        </li>
                                        <li>
                                            <h3>Day 06 (Shillong)</h3>
                                            <p>In the morning, embark on a sightseeing tour of Shillong. The former capital of Assam, it is the home to the Khasi Highland tribes. Overnight stay in Shillong.

</p>
                                        </li>
                                        <li>
                                            <h3>Dday 07 ( Guwahati - Departure)</h3>
                                            <p>Today, you will be transferred to the Guwahati airport to board flight for onward journey.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/f1t7jR6kUDA2"><i
                                                            class="fa fa-check"></i>Guwahati</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/6iEH9wggzuK2"><i
                                                            class="fa fa-check"></i>Cherrapunjee</a></li>

                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/ZPoYSWH93D72"><i
                                                            class="fa fa-check"></i>Shillong</a></li>
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
