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
                <div class="overlay"><a href="img/3_Nights_4_days/g1.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/g1.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/g2.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/g2.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/g3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/g3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/g4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/g4.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/g5.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/g5.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/3_Nights_4_days/g6.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/3_Nights_4_days/g6.jpg" alt="" class="img-responsive">
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
                        <h2>4 Days Tour #3
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
                                            <h3>Day 01(Arrival in Ahmedabad)</h3>
                                            <p>On reaching Ahmedabad, head towards the hotel. Take some rest and then leave for sightseeing. Begin with a visit to the well-known Sabarmati Ashram, located on the banks of the Sabarmati River. The ashram was the center of India's freedom movement which was started off by Mahatma Gandhi in the year 1917. The place houses Hridaya Kunj, a small cottage where Gandhi Ji lived during his freedom struggle. 
                                            </p>
                                            <p>
                                            Thereafter, proceed towards the Sidi Sayed Mosque. Built back in the year 1973, the mosque is one of the most renowned religious buildings in the city of Ahmedabad. The mosque was established by Sidi Sayed, a slave of Sultan Ahmed Shah during the Mughal reign. It was the last prominent mosque that was built in Ahmedabad during the rule of the Mughals. Return to the hotel after sightseeing and stay overnight.</p>
                                        </li>
                                        <li>
                                            <h3>Day 02(Ahmedabad to Lothal)</h3>
                                            <p>This morning, freshen up and leave for Lothal – a significant historic site of Gujarat. On reaching Lothal, start your sightseeing tour of the city. One of the most important cities from the Indus Valley Civilization, Lothal dates back to 3700 BCE. The port of the city is considered the oldest in the world. Lothal is a major tourist attraction among history buffs and wanderers. The place still holds a lot of history which has not yet been discovered.</p>

                                            <p>In an excavation, it was found that many dead bodies were buried here along with ancient potteries. Today, all these potteries are kept inside different museums to make people learn about their ancient civilizations. Later, move towards the museums of Lothal that are known for housing a number of artifacts that are related to the history of Lothal. The most popular of all the museums is the Archaeological Museum that displays animal shells, pottery and other figures from the Harappan Civilization.</p>

                                            <p>After enjoying your sightseeing tour of Lothal, leave back for towards the city of Ahmedabad. As soon as you arrive in Ahmedabad, take you conveyance to reach your hotel. Stay overnight.</p>
                                        </li>
                                        <li>
                                            <h3>Day 03 (Ahmedabad to Patan and Modhera)</h3>
                                            <p>Get ready early in the morning and then leave for Patan. Patan is an ancient fortified town which dates back to the 8th century. The town was established by Vanraj Chavda, a loved and praised king of the Chavda Kingdom. Today, the town is known for displaying Gujarati culture and history. Also, it is famous for items like weaving crafts, widely-exported Patola silk sarees.</P>
                                            <P>Later, visit Maatangi Modheshwari Temple, a beautiful temple dedicated to Goddess Modheshwari – the patron goddess of the local Modh community. After completing your sightseeing tour of Patan and Modhera, head back to Ahmedabad. Stay overnight at the hotel.</P>
                                        </li>
                                        <li>
                                            <h3>Day 04( Departure from Ahmedabad)</h3>
                                            <p>This is the last day of the tour. Complete check-out formalities at the hotel and then leave for the transport terminal and then depart to home. Tour Ends..</p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/83ufbBHJKPE2"><i
                                                            class="fa fa-check"></i>Ahmedabad</a></li>
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/B8VLR3zQo642"><i
                                                            class="fa fa-check"></i>Lothal</a></li>

                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/PXmcwDd3PCK2"><i
                                                            class="fa fa-check"></i>Patan</a></li>

                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/vZ7eM721pmt"><i
                                                            class="fa fa-check"></i>Modhera</a></li>
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
