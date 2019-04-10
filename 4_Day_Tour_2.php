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
                <div class="overlay"><a href="img/3_Nights_4_days/l1.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/l1.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/l2" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/l2" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/l3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/l3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/l4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/l4.jpg" alt="" class="img-responsive">
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
                        <h2>4 Days Tour #2
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
                                            <h3>Day 01( Leh)</h3>
                                            <p>After arrival at Leh airport, meet our representative at the airport who'll escort you to the hotel. Check-in at the hotel. Welcome drink on arrival. After resting and relaxing for a while step out to visit the local bazaar of Leh. The market is the perfect place to buy pearls and coral jewelry. Later in the evening enjoy an excursion to the Shanti Stupa- a Buddhist pilgrimage. Return to hotel in the evening for dinner and Stay.</p>
                                            <p>Return to the Hotel for dinner and over night stay.</p>
                                        </li>
                                        <li>
                                            <h3>Day 02 (Leh - Indus Valley - Leh)</h3>
                                            <p>In the morning after breakfast move out to visit Thiksey Gompa that is situated in the village of Ladakh. The monastery exhibits the gold-plated statue of Lord Buddha, called the Maitreya Buddha. Also visit the Indus Valley Monastery. The tour plan also includes a stop over at the Indus Valley monastery. Then return to the Leh city and after lunch visit the beautiful Stok Palace that lies on the bank opposite to Tsangspo River. Spend night at the hotel.</p>
                                            <p>Overnight in Leh</p>
                                        </li>
                                        <li>
                                            <h3>Day 03(Leh - Khardungla - Leh)</h3>
                                            <p>Post breakfast, leave for Khardungla top. While going to Khardungla top you would be driving on the highest motor drive road in the world with a height of 18,390 feet. In the later part of the day enjoy shopping extravaganza. Overnight at hotel..</p>
                                        </li>
                                         <li>
                                            <h3>Day 04( Leh - Departure)</h3>
                                            <p>In the morning after breakfast, transfer to the airport to board a flight for the onward journey.</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/s2S8TMZURFL2"><i
                                                            class="fa fa-check"></i>Leh</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/PiWA7UM7Vku"><i
                                                            class="fa fa-check"></i>Indus Valley</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/JJTM1si7XDE2"><i
                                                            class="fa fa-check"></i>Khardungla</a></li>
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
