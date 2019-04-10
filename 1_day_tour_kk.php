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
                <div class="overlay"><a href="img/1_day_tours/kk1.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/kk1.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/1_day_tours/kk2.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/kk2.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/1_day_tours/kk3.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/kk3.jpg" alt="" class="img-responsive">
            </div>
            <div class="img-hover">
                <div class="overlay"><a href="img/1_day_tours/kk4.jpg" class="fancybox"
                                        rel="gallery"></a>
                </div>
                <img src="img/1_day_tours/kk4.jpg" alt="" class="img-responsive">
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
                        <h2>1 Day Tour - Kodai Kanal
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
                                    <a href="bookTour.php?tour=1 Day Tour - Kodai Kanal&type=1day"><i
                                            class="fa fa-bookmark"></i>Reserve this Tour</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="plan">
                                    <ul>
                                        <li>
                                            <h3>1 day tour to Kodai Kanal</h3>
                                            <h5>"The Princess of Hill Stations"</h5>
                                            <p>Located in the state of Tamil Nadu, Kodaikanal is one of the most famous honeymoon destinations in India. When you think of Kodaikanal, you think of a wonderful climate, cliffs covered in mist, cloud-capped mountains and beautiful lakes and valleys, and once you visit this hill station, you will find that every bit of what you have imagined it to be is true. Nestled amidst the rolling slopes of the Palani Hills in Tamil Nadu, Kodaikanal stands at an altitude of 7200 feet above sea level and has a cool, pleasant climate all year round. Kodaikanal means the gift of the forests.</p>
                                            <p>Famously known as the Princess of Hill Stations, Kodaikanal offers the perfect mix of culture and nature to tourists, and its perfectly manicured slopes, scenic waterfalls, rolling hills and clear lakes all come together to create the perfect setting for an ideal mountain getaway. Kodaikanal is a place you can go to take a break from the rigours of daily city life, and this hill station lets you sit back and connect with nature as you head out on biking or trekking trails or take a stroll through the huge forests surrounding the town.
                                            </p>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane" id="destinations">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-styles">
                                                <li>
                                                    <a target="_blank"
                                                       href="https://goo.gl/maps/3PjLqk1Xpys"><i
                                                            class="fa fa-check"></i>Kodai Kanal</a></li>
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
