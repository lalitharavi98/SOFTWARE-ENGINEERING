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
                <div class="overlay"><a href="img/2_nights_3_Days/i1.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i1.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i2.jpeg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i2.jpeg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i4.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i5.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i5.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i6.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i6.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i7.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i7.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i8.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i8.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i9.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i9.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i10.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i10.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i11.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i11.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/2_nights_3_Days/i12.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/2_nights_3_Days/i12.jpg" alt="" class="img-responsive">
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
                        <h2>3 Days Tour
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
                                    <a href="bookTour.php?tour=3 Day Tour Package&type=3day"><i class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>Day 1: Start at 7 AM from Bangalore - Travel to Mysore & Mysore Sightseeing</h3>
                                            <ul>                                       
                                               <li>Chamundi Hill Temple </li>
                                               <li>Mysore Palace</li> 
                                                <li>Jagan Mohan Palace / Jayachamarajendra Art Gallery</li>
                                                <li>St. Philomena's Cathedral</li>
                                                <li>Brindavan Gardens</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h3>Day 2: Start at 8 AM - Travel to Coorg & Coorg Sightseeing</h3>
                                            <ul>
                                                <li>Abbey Falls</li>
                                                <li>Bhagamandala</li>
                                                <li>Talacauvery / Talakaveri</li>
                                                <li>Raja's Seat</li>
                                            </ul>

                                        </li>
                                        <li>
                                            <h3>Day 3: Start at 8 AM - Coorg Sightseeing & Travel to Bangalore</h3>
                                            <ul>
                                                <li>Omkareswara Temple</li>
                                                <li>Dubare Elephant Camp</li>
                                                <li>Cauvery Nisargadhama</li>
                                                <li>Golden Temple / Tibetan Monastery - Bylakuppe</li>
                                            </ul>
                                        </li>
                                        <li>Reach Bangalore by around 10 PM</li>
                                            
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/9jvQ1hacyuJ2"><i
                                                            class="fa fa-check"></i>Bangalore</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/7e2eTJ3xBYr"><i
                                                            class="fa fa-check"></i>Mysore</a></li>
                                                 <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/PH2vqapTW3E2"><i
                                                            class="fa fa-check"></i>Coorg</a></li>
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
